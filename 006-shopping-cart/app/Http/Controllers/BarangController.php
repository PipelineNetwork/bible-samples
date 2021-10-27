<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembelian;
use App\Models\PembelianBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        $pembelian_barangs = PembelianBarang::all();
        return view('barang_index', [
            'barangs'=> $barangs,
            'pembelian_barangs'=> $pembelian_barangs,
        ]);
    }


    public function store(Request $request)
    {
        $barang = new Barang;
        $barang->name = $request->name;
        $barang->harga = $request->harga;
        $barang->save();

        return redirect('barangs');
    }

    public function show(Barang $barang)
    {
        return view('barang_show', [
            'barang'=> $barang
        ]);
    }

    public function beli(Request $request, $barang_id)
    {
        $pembelian = Pembelian::where('aktif', true)->first(); // syafiza kena cari jugak pembelian based on user...
        if ($pembelian) {
            // kita buat bodoh...
        } else {
            $pembelian = new Pembelian;
            $pembelian->user_id = 1;
            $pembelian->save();
        }

        $pembelian_barang = new PembelianBarang;
        $pembelian_barang->barang_id = $barang_id;
        $pembelian_barang->pembelian_id = $pembelian->id;
        $pembelian_barang->save();
        
        return redirect('/barangs');
    }


}
