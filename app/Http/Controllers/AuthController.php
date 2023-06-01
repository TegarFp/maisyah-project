<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Session\Session;

class AuthController extends Controller
{
    public function index()
    {
        $data = User::with(['pekerjaans'])->get();
        return view('app.login', ['userList' => $data]);
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($user)){
            return redirect('/');
        }else{
            return redirect('login');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function register()
    {
        return view('app.register');
    }

    public function register_proses(Request $request)
    {
        
        // Validasi data yang di-input oleh user
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15|unique:users',
            'password' => 'required|string|min:5|confirmed',
            'terms' => 'required|accepted',
        ]);

        
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

                
        if(Auth::attempt($login)){
            return redirect()->intended('login');
        }else{
            return redirect('register');
        }

        
    }
    
    public function verif()
    {
        return view('verif.verifikasi');
    }
}


        // $user = User::create($request->except(['_token']));
        
        // event(new Registered($user));


        // auth()->login($user);
        // return redirect()->route('verification.notice')->with('success', 'Akun Berhasil Dibuat, Silakan Verification Email Anda');
