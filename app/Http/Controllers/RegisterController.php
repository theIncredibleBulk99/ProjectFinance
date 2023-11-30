<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
class RegisterController extends Controller
{
    public function showRegistrationForm(Request $request)
    {
        return view('register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'division' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'birthDate' => ['required', 'date'],
            'phoneNumber' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'in:M,F'],
        ]);
    }

    public function register(Request $request)
    {
        $credentials = $request->all();
        $data = json_encode($credentials);

        try {
            $response = Http::withBody($data)->post('https://pemin.aenzt.tech/api/v1/auth/register');

            $responseData = $response->json();

            if (isset($responseData['data'])) {
                $access_token = $responseData['data']['access_token'];
                Session::put('access_token', $access_token);
                //dd($response);
                // Redirect to a success page or perform other actions
                return response()->redirectToRoute('getAll',['from'=> '2023-4-5','to'=>'2024-1-4']);
            } else {
                // Handle the case where 'data' key is not present
                // return response()->json('error',$response->getMessage());
                dd($credentials);
            }
        } catch (\Exception $e) {
            // Handle exceptions (network issues, etc.)

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'division' => $data['division'],
            'address' => $data['address'],
            'birthDate' => $data['birthDate'],
            'phoneNumber' => $data['phoneNumber'],
            'sex' => $data['sex'],
        ]);
    }
}
