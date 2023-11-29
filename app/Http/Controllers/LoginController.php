<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $data = json_encode($credentials);

        try {
            $response = Http::withBody($data)->post('https://pemin.aenzt.tech/api/v1/auth/login');

            $responseData = $response->json();

            if (isset($responseData['data'])) {
                $access_token = $responseData['data']['access_token'];
                Session::put('access_token', $access_token);

                // Redirect to a success page or perform other actions
            } else {
                // Handle the case where 'data' key is not present
                // return response()->json('error',$response->getMessage());
                dd($response);
            }
        } catch (\Exception $e) {
            // Handle exceptions (network issues, etc.)

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
