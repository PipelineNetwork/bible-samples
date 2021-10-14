<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        // 1. Cari semua role(s) untuk User ID 1
        $user = User::find(1);
        $user->roles();

        // 2. Link/attach satu role kepada satu user
        $role_jawatan = Role::where('nama', 'Pegawai Perancang')->first();
        $user->roles()->attach($role_jawatan);

        // 3. Unlink/detach role(s) dari satu user
        $user->roles()->detach($role_jawatan); //detach satu
        $user->roles()->detach(); // detach semua


    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Role $role)
    {
        //
    }

    public function edit(Role $role)
    {
        //
    }

    public function update(Request $request, Role $role)
    {
        //
    }

    public function destroy(Role $role)
    {
        //
    }

    public function register_pembekal(Request $request) {
        // Step 1 Pembekal row is created.... (Fiza dah buat)

        // Step 2 PL approved pembekal punya acccount, dalam function change status...

        $user = User::insert([
            'name'=> 'AA',
            'email'=> 'asd'
        ]);
        $role_jawatan = Role::where('nama', 'Pembekal - ')->first();
        $user->roles()->attach($role_jawatan);


    }
}
