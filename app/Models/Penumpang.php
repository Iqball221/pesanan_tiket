<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    use HasFactory;
    //memberika akses data apa saja yang bisa dilihat
    protected $visible = ['nama', 'jk', 'no_hp', 'jenis', 'asal', 'tujuan', 'tgl_berangkat', 'jumlah', 'total'];
    //memberikan akses data apa saja yang bisa di isi 
    protected $fillable = ['nama', 'jk', 'no_hp', 'jenis', 'asal', 'tujuan', 'tgl_berangkat', 'jumlah', 'total'];
    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;

    //membuat relasi one to many
    public function transaksis()
    {
        
        return $this->hasMany('App\Models\Transaksi', 'id_penumpang');
    }
}
