<?php

namespace App\Http\Controllers;

use App\Models\DataTransaksi;
use App\Models\Kereta;
use App\Models\Tiket;
use Illuminate\Http\Request;

class DataTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTransaksi = DataTransaksi::all();
        return view('dataTransaksi.index', compact('dataTransaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kereta = Kereta::all();
        $tiket = Tiket::all();
        return view('dataTransaksi.create', compact('kereta', 'tiket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect()->route('dataTransaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataTransaksi  $dataTransaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataTransaksi = DataTransaksi::findOrFail($id);
        return view('dataTransaksi.show', compact('dataTransaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataTransaksi  $dataTransaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataTransaksi = DataTransaksi::findOrFail($id);
        $kereta = Kereta::all();
        $tiket = Tiket::all();
        return view('dataTransaksi.edit', compact('dataTransaksi', 'kereta', 'tiket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataTransaksi  $dataTransaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'no_hp' => 'required',
            'id_kereta' => 'required',
            'id_tiket' => 'required',
            'jam_berangkat' => 'required',
            'asal_berangkat' => 'required',
            'tujuan_berangkat' => 'required',
            'no_duduk' => 'required',
            'jumlah' => 'required',
        ]);

        $dataTransaksi = DataTransaksi::findOrFail($id);
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
        return redirect()->route('dataTransaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataTransaksi  $dataTransaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataTransaksi = DataTransaksi::findOrFail($id);
        $dataTransaksi->delete();
        return redirect()->route('dataTransaksi.index');
    }
}
