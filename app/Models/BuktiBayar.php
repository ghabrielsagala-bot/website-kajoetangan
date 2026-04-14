<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuktiBayar extends Model
{
    use HasFactory;

    protected $table = 'bukti_bayars';

    protected $fillable = [
        'transaction_id',
        'name',
        'email',
        'tanggal_transfer',
        'bukti_bayar_path',
        'status',
        'admin_notes',
        'verified_at',
        'verified_by',
    ];

    protected $casts = [
        'tanggal_transfer' => 'date',
        'verified_at' => 'datetime',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
