<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    //memberika akses data apa saja yang bisa dilihat
    protected $visible = ['jenis_tiket', 'stok', 'harga'];
    //memberikan akses data apa saja yang bisa di isi 
    protected $fillable = ['jenis_tiket', 'stok', 'harga'];
    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;

    //membuat relasi one to many
    public function dataTransaksi()
    {
        
        return $this->hasMany('App\Models\dataTransaksi', 'id_tiket');
    }
}
