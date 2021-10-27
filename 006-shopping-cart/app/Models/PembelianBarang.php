<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Barang;

class PembelianBarang extends Model
{
    use HasFactory;

    public function barangs()
    {
        return $this->belongsToMany(Barang::class);
    }    
}
