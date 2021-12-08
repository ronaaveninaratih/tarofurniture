<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class HomeController extends Controller{

    function showdashboard(){
        return view('backview.dashboard');
    }

    function showhome(){
        return view('home');
    }

    function showLogin(){
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

    function test($produk, $hargaMin = 0, $hargMax = 0){
        if($produk == 'kursi'){
            echo "Tampilkan Produk Kursi";
        }elseif($produk == 'meja'){
            echo "Tampilkan Produk Meja";
        }
        echo "<br>";
        echo "Harga Min adalah $hargaMin <br>";
        echo "Harga Max adalah $hargaMax <br>";
    }

    public function testCollection(){
        $list_chair = ['Livien', 'Ikea', 'Olympic', 'Informa', 'Doves'];
        $list_chair = collect ($list_chair);
        $list_produk = Produk::all();

        // Sorting
        // Sort By Harga Terendah
        // dd($list_produk->sortBy('harga'));
        // Sort By Harga Tertinggi
        // dd($list_produk->sortByDesc('harga'));
        
        // Map

        // $map = $list_produk->map(function($item){
            // $result['nama'] = $item->nama;
            // $result['harga'] = $item->harga;
            // return $result;
        // });

        // Each
        // $list_produk->each(function($item){
            // echo "$item->nama<br>";
        // });

        // Filter

        // $filtered = $list_produk->filter(function($item){
            // return $item->harga > 450000;
        // });

        // dd($filtered);

        // Sum, Min, Max, Avg
        // $sum = $list_produk->sum('stok');
        // dd($sum);

        $data['list'] = Produk::simplePaginate();
        return view('test-collection', $data);

        dd($list_chair, $collection, $list_produk);
    }
}