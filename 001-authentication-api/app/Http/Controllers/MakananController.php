<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index()
    {
        $makanans = Makanan::all();
        return $makanans;
    }


    public function store(Request $request)
    {
        $makanan = new Makanan;

        $makanan->nama = $request->nama;
        $makanan->harga = $request->harga;
        $makanan->save();

        return $makanan;
    }

    public function show(Makanan $makanan)
    {
        return $makanan;
    }

    public function update(Request $request, Makanan $makanan)
    {
        $makanan->nama = $request->nama;
        $makanan->harga = $request->harga;
        $makanan->save();

        return $makanan;
    }

    public function destroy(Makanan $makanan)
    {
        //
    }
}
