<?php

namespace App\Models;

use App\Models\User;

class Produk extends Model{
    protected $table = 'produk';

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }

    function getHargaAttribute(){
        return "Rp. ".number_format($this->attributes['harga']);
    }

    function getTanggalProduksiAttribute(){
        $tanggal = $this->created_at;
        return strftime("%d %b %Y", strtotime($this->created_at));
    }
}