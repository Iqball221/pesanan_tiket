<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use App\Models\Tiket;
use App\Models\DataTransaksi;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
        $kereta = Kereta::all();
        $tiket = Tiket::all();
        $dataTransaksi = DataTransaksi::all();
        return view('layouts.index', compact('kereta','tiket', 'dataTransaksi'));
    }

    public function store(Request $request)
    {
        $dataTransaksi = new DataTransaksi;
        $dataTransaksi->nama = $request->nama;
        $dataTransaksi->jk = $request->jk;
        $dataTransaksi->no_hp = $request->no_hp;
        $dataTransaksi->id_kereta = $request->id_kereta;
        $dataTransaksi->id_tiket = $request->id_tiket;
        $dataTransaksi->jam_berangkat = $request->jam_berangkat;
        $dataTransaksi->asal_berangkat = $request->asal_berangkat;
        $dataTransaksi->tujuan_berangkat = $request->tujuan_berangkat;
        $dataTransaksi->no_duduk = $request->no_duduk;
        $dataTransaksi->jumlah = $request->jumlah;
        $dataTransaksi->save();
        return redirect()->route('layouts.index');
    }
}
