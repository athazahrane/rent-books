<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        //Buat cek si user udh login
        if (Auth::attempt($credentials)){
            //buat cek status user active atau belum
            if(Auth::user()->status != 'active')
            {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not active yet. Please contact admin!');
                return redirect('login');
            }

            $request->session()->regenerate();
            //cek apakah dia admin atau ga
            if(Auth::user()->roles_id == 1)
            {
                return redirect('dashboard');
            }

            if(Auth::user()->roles_id == 2)
            {
                return redirect('profile');
            }
        }

            Session::flash('status', 'failed');
            Session::flash('message', 'Invalid to login');
            return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function register()
    {
        return view('register');
    }

    public function regis(Request $request)
    {
        //validate data masuk atau ga
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required|max:13',
            'address' => 'required|max:255',
        ]);
        
        
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'succces');
        Session::flash('message', 'Register success! Please, wait admin to approve');
        return redirect('register');
    }
}

