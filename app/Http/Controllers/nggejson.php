<?php

namespace App\Http\Controllers;

class nggejson extends Controller
{
    public function getData()
    {
        // Logika untuk mengambil data Anda
        $data = [
            'name' => 'sad',
            'amount' => 'value2',
            'type'=> 'asfa',
            // ...
        ];

        // Kembalikan data dalam format JSON
        return response()->json($data);
    }
}
