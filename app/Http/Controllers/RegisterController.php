<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

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
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        auth()->login($user);

        return redirect($this->redirectPath());
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
