<?php

namespace App\Models;

use App\Models\UserDetail;
use App\Models\Produk;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens; 

class User extends Authenticatable
{
    protected $table = 'user';
    use HasFactory, Notifiable;

    function detail() {
        return $this->hasOne(UserDetail::class, 'id_user'); 
    }

    function produk() {
        return $this->hasMany(Produk::class, 'id_user'); 
    }

    function getJenisKelaminStringAttribute(){
        return ($this->jenis_kelamin ==1) ? "Laki-laki" : "Perempuan";
    }
}
