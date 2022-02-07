<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kereta extends Model
{
    use HasFactory;
    protected $visible = ['nama_kereta'];
    protected $fillable = ['nama_kereta'];
    public $timestamps = true;

    public function dataTransaksi()
    {
        
        return $this->hasMany('App\Models\dataTransaksi', 'id_kereta');
    }
}
