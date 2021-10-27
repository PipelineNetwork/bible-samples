<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Pembelian extends Model
{
    use HasFactory;

    public function pembeli()
    {
        return $this->belongsTo(User::class);
    }
}
