<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public function compare_barang(Item $barang_1, Item $barang_2, Item $barang_3 )
    {
        $barang_1 = Item::where('id', $request->barang_1_id)->first();
        $barang_2 = Item::where('id', $request->barang_2_id)->first();
        $barang_3 = Item::where('id', $request->barang_3_id)->first();

        return view('compare_barang', [
            'barang_1' => $barang_1,
            'barang_2' => $barang_2,
            'barang_3' => $barang_3,
        ]);

    }

    public function verify_signature(Request $request)
    {
        $permohonan = Permohonan::where('id', $request->permohonan_id)->first();
        $pegawai = $request->pegawai_id;
        $ic_diletakkan = $request->ic_diletakkan;

        if($pegawai->ic == $ic_diletakkan) {
            $permohonan->status = 'Diluluskan';
            $permohonan->save();
            return view('lulus');
        } else {
            return view('gagal');
        }
    }
}
