<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = Users::where('username', $username)->first();

        if ($user) {
            if (Hash::check($password, $user->password)) {
                $request->session()->put('login', true);
                $request->session()->put('id', $user->id);
                $request->session()->put('name', $user->name);
                return redirect(url('/dashboard'))->with('success', "Berhasil Login");
            } else {
                return redirect(url('/login'))->with('error', "Password anda salah");
            }
        } else {
            return redirect(url('/login'))->with('error', "User tidak ditemukan");
        }
    }

    public function Register(Request $request)
    {
        $input = $request->all();
        extract($input);

        if (
            !empty($username) && !empty($password)
            && !empty($fullname)
            && !empty($email)
        ) {
            $user = new Users;
            $user->full_name = $fullname;
            $user->email = $email;
            $user->username = $username;
            $user->password = Hash::make($password);
            $user->save();

            return redirect(url('/login'))->with('success', "Berhasil mendaftarkan diri");
        } else {
            return redirect(url('/register'))->with('error', "Isi data diri dengan lengkap");
        }
    }
}
