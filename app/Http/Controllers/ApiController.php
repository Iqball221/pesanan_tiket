<?php

namespace App\Http\Controllers;
use App\Models\Tiket;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        //menampilkan data table TIKET
        $tiket = Tiket::all();

        return response()->json([
            'success' => true,
            'message' => 'list data Tiket',
            'data' => $tiket
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $tiket = new Tiket;
        $tiket->jenis_tiket = $request->jenis_tiket;
        $tiket->stok = $request->stok;
        $tiket->harga = $request->harga;
        $tiket->save();

        return response()->json([
            'success' => true,
            'message' => 'list tambah Tiket',
            'data' => $tiket
        ], 200);
}

    public function show($id)
    {
        $tiket = Tiket::find($id);

        return response()->json([
            'success' => true,
            'message' => 'list data Tiket',
            'data' => $tiket
        ], 200);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        
        $tiket = Tiket::findOrFail($id);
        $tiket->jenis_tiket = $request->jenis_tiket;
        $tiket->stok = $request->stok;
        $tiket->harga = $request->harga;
        $tiket->save();
        
        return response()->json([
            'success' => true,
            'message' => 'Data Tiket berhasil diedit',
            'data' => $tiket
        ], 200);
    }

}
