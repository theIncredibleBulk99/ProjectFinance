<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        $transact = Transaction::where('id_transaksi',$request->id)->get();
        return response()->view('detail', ['data' => $transact]);
    }
    public function getAll()
    {
        $transact = Transaction::select('nama_transaksi', 'tanggal_transaksi', 'jumlah_transaksi', 'jenis_transaksi','id_transaksi')->get();
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
    public function postTransactionApi(Request $request){
        $response = Http::post('https:LINK E NGKO', [
            'nama_transaksi' => $request->nama_transaksi,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'jumlah_transaksi' => $request->jumlah_transaksi,
            'jenis_transaksi' => $request->jenis_transaksi,
            'bukti_transaksi' => $request->bukti_transaksi,
            'pihak_terlibat' => $request->pihak_terlibat,
            'catatan' => $request->catatan
        ]);

        $data = $response->json();
    }
    public function inputData(){
return view('postData.blade.php');
    }
    public function getAllApi(Request $request){
        $response = Http::get('link e ngko', [
            'nama_transaksi'=> $request->nama_transaksi,
            'tanggal_transaksi'=> $request->tanggal_transaksi,
            'jumlah_transaksi'=> $request->jumlah_transaksi,
            'jenis_transaksi'=> $request->jenis_transaksi
        ]);
        return view('showAll',compact('response'));
    }
    public function getMonthlynApi(Request $request){
        $response = Http::get('link e ko', [
            'nama_transaksi'=> $request->nama_transaksi,
            'tanggal_transaksi'=> $request->tanggal_transaksi,
            'jumlah_transaksi'=> $request->jumlah_transaksi
        ]);
        return view('showAll',compact('response'));
    }

    public function getOneApi(Request $request){
        $response = Http::get('link e ko', [
            'nama_transaksi'=> $request->nama_transaksi,
            'tanggal_transaksi'=> $request->tanggal_transaksi,
            'jumlah_transaksi'=> $request->jumlah_transaksi,
            'jenis_transaksi'=> $request->jenis_transaksi,
            'catatan'=> $request->catatan,
            'bukti'=> $request->bukti_transaksi,
            'pihak_terlibat' => $request->pihak_terlibat
        ]);
        return view('showAll',compact('response'));
    }
}
