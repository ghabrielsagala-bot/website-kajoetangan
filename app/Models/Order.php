<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_awalan',
        'email',
        'jenis_tiket',
        'metode_pembayaran',
        'jumlah_tiket',
        'total_harga',
        'status_pembayaran',
        'bukti_pembayaran',
        'tanggal_berlaku',
        'tanggal_kadaluarsa',
    ];

    protected $casts = [
        'tanggal_berlaku' => 'date',
        'tanggal_kadaluarsa' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
