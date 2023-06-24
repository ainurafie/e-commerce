<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keranjang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $primaryKey = 'id';
    // protected $fillable = [
    //     'id',
    //     'user_id',
    //     'produk_id',
    //     'jumlah',
    //     'harga',
    //     'ukuran',
    //     'varian',
    //     'metode_pembayaran',
    // ];

    
}