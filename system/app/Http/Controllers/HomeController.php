<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showdashboard(){
        return view('backview.dashboard');
    }

    function showhome(){
        return view('home');
    }

    function showlogin(){
        return view('login');
    }

    function showkategori(){
        return view('backview.kategori');
    }

    function showpelanggan(){
        return view('backview.pelanggan');
    }

    function showproduct(){
        return view('backview.product');
    }

    function showsupplier(){
        return view('backview.supplier');
    }
}