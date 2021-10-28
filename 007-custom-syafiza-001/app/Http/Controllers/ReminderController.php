<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
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
     * @param  \App\Models\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function show(Reminder $reminder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function edit(Reminder $reminder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reminder $reminder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reminder $reminder)
    {
        //
    }

    public function hantar_peringatan_cart_aktif_tapi_tak_beli() 
    {
        // Check shopping cart is active BUT has been 30 days since created....

        $carts = Cart::where([
            ['active', '=', true],
            ['created_at', '<=', date("Y-m-d H:i:s") - 30]
        ]);

        // assuming cart ada user's ID and email...

        foreach ($carts as $cart) {
            Mail::to($cart->user()->email)->send(new ReminderEmailCustomSayfiza());
        }

    }

    public function cancel_kalau_admin_tak_approve()
    {
        $permohonans = Permohonan::where([
            ['status', '=', 'Pending'],
            ['created_at', '<=', date("Y-m-d H:i:s") - 3]
        ]);  
        
        foreach ($permohonans as $permohonan) {
            $permohonan->status = 'Dibatalkan';
            $permohonan->save();
        }        
    }    
}
