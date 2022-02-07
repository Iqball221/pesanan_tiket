<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTransaksi extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['nama', 'jk', 'no_hp','id_kereta', 'id_tiket', 'jam_berangkat', 'asal_berangkat', 'tujuan_berangkat', 'no_duduk', 'jumlah'];
    //memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['nama', 'jk', 'no_hp','id_kereta', 'id_tiket', 'jam_berangkat', 'asal_berangkat', 'tujuan_berangkat', 'no_duduk', 'jumlah'];
    public $timestamp = true;

    // membuat relasi one to many
    public function kereta()
    {
        return $this->belongsTo('App\Models\Kereta', 'id_kereta');
    }
    public function tiket()
    {
        return $this->belongsTo('App\Models\Tiket', 'id_tiket');
    }
}
