<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Exceptions\ApiException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Session;


class TransactionController extends Controller
{
    public function createTransaction(Request $request)
    {
        try {
            $transaction = Transaction::create([
                'nama_transaksi' => $request->nama_transaksi,
                'tanggal_transaksi' => $request->tanggal_transaksi,
                'jumlah_transaksi' => $request->jumlah_transaksi,
                'jenis_transaksi' => $request->jenis_transaksi,
                'bukti_transaksi' => $request->bukti_transaksi,
                'pihak_terlibat' => $request->pihak_terlibat,
                'catatan' => $request->catatan
            ]);
            return response()->redirectToRoute('getAll');
        } catch (\Exception $e) {
            // Tangkap dan tangani pengecualian di sini
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

    public function getOne(Request $request)
    {
        $transact = Transaction::where('id_transaksi', $request->id)->get();
        return response()->view('detail', ['data' => $transact]);
    }
    public function getAll()
    {
        $transact = Transaction::select('nama_transaksi', 'tanggal_transaksi', 'jumlah_transaksi', 'jenis_transaksi', 'id_transaksi')->get();
        return response()->view('showAll', ['data' => $transact]);
    }

    public function getLast7Days(Request $request)
    {
        //  $transact = Transaction::find($request->id);

        $transact = Transaction::select('nama_transaksi', 'tanggal_transaksi', 'jumlah_transaksi', 'jenis_transaksi')
            ->where('tanggal_transaksi', ">=", 'CURRENT_DATE - INTERVAL 7 DAY')->get();
        if ($transact == null) {
            return response()->json(['success' => false, 'message' => 'data tidak ditemukan']);
        }

        return response()->json([
            $transact
        ]);
    }

    public function getMonthly(Request $request)
    {

        $transact = Transaction::select('nama_transaksi', 'tanggal_transaksi', 'jumlah_transaksi', 'jenis_transaksi')
            ->whereMonth('tanggal_transaksi', $request->bulan)
            ->where('jenis_transaksi', '=', $request->jenis)->get();
        if ($transact == null) {
            return response()->json(['success' => false, 'message' => 'data tidak ditemukan']);
        }
        return response()->json([
            $transact
        ]);
    }
    //===========================================================================================================================
    public function postTransactionApi(Request $request)
    {
        $request->validate([
            'amount' => 'numeric|required',
        ]);
        $token=Session::get('access_token');
        $data = $request->all();
        $jsondata=json_encode($data,JSON_NUMERIC_CHECK);
        $response = Http::withToken($token)->withBody($jsondata)->post('https://pemin.aenzt.tech/api/v1/finance/transactions'
        );
        $responseData = $response->json();
        // dd($jsondata);
        return response()->redirectToRoute('getAll',['from'=> '2023-4-5','to'=>'2024-1-4']);

    }
    public function inputData()
    {
        return view('postData.blade.php');
    }
    public function getAllApi(Request $request)
    {
        $apiEndpoint = 'https://pemin.aenzt.tech/api/v1/finance/transactions';
       $token=Session::get('access_token');

        $from = $request->from;
        $to = $request->to;
        try {
            $response = Http::withToken(
                $token
            )->get($apiEndpoint, [
                        'from' => $from,
                        'to' => $to,
                    ]);
                    $data = json_decode($response,true);
                    // if ($response->failed()) {
                    //     throw new ApiException($response->json('message'), $response->status());
                    // }
                  //d($data);
                    return view('showAll',compact('data'));
        } catch (ApiException $e) {

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function getMonthlynApi(Request $request)
    {
        $response = Http::get('', [
            'nama_transaksi' => $request->nama_transaksi,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'jumlah_transaksi' => $request->jumlah_transaksi
        ]);
        return view('showAll', compact('response'));
    }


    public function getOneApi(Request $request)
    {
        $token=Session::get('access_token');

        $id = (String) $request->id;
        $response = Http::withToken(
            $token
        )->get('https://pemin.aenzt.tech/api/v1/finance/transactions/'. $id);
        $data = json_decode($response,true);
        // if ($response->failed()) {
        //     throw new ApiException($response->json('message'), $response->status());
        // }
    // dd($data);

        return view('detail',compact('data'));
    }
}
