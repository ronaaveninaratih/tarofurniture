<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Pembeli;
use App\Models\Penjual;

class AuthController extends Controller
{
    function showLogin(){
        return view('login');
    }

    function loginProcess() {
        // if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
        //     return redirect('dashboard')->with('success', 'Login berhasil');
        // }else{
        //     return back()->with('danger', 'Login gagal, silahkan cek email dan password anda');
        // }

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            if($user->level == 1) return redirect('dashboard/admin')->with('success', 'Login berhasil');
            if($user->level == 2) return redirect('dashboard/pengguna')->with('success', 'Login berhasil');
        }else{
            return back()->with('danger', 'Login gagal, silahkan cek email dan password anda');
        }

        // $email = request('email');
        // $user = Pembeli::where('email', $email)->first();
        // if($user){
        //     $guard = 'pembeli';
        // }else{
        //     $user = Penjual::where('email', $email)->first();
        //     if($user){
        //         $guard = 'penjual';
        //     }else {
        //         $guard = false;
        //     }
        // }

        // if(!$guard) {
        //     return back()->with('danger', 'Login gagal, email tidak ditemukan di database!');
        // }else{
        //     if(Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])){
        //         return redirect("dashboard/$guard")->with('success', 'Login berhasil');
        //     }else{
        //         return back()->with('danger', 'Login gagal, silahkan cek email dan password anda');
        //     }
        // }

        // if(request('login_as') == 1){
        //     if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])){
        //       return redirect('dashboard/pembeli')->with('success', 'Login berhasil');  
        //     }else{
        //       return back()->with('danger', 'Login gagal, silahkan cek email dan password anda');
        //     }
        // }else{
        //     if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])){
        //       return redirect('dashboard/penjual')->with('success', 'Login berhasil');  
        //     }else{
        //       return back()->with('danger', 'Login gagal, silahkan cek email dan password anda');
        //     }
        // }
    }

    function logout() {
        Auth::logout();
        Auth::guard('pembeli')->logout();
        Auth::guard('penjual')->logout();
        return redirect('login');
    }

    function showregistrasi() {
        return view('register');
    }

    function forgotPassword() {

    }
}