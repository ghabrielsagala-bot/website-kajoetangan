<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'ticket_id',
        'quantity',
        'total_price',
        'payment_status',
        'ticket_type',
        'verified_at',
        'verified_by',
    ];

    protected $casts = [
        'total_price' => 'decimal:2',
        'verified_at' => 'datetime',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function buktiBayar()
    {
        return $this->hasOne(BuktiBayar::class);
    }
}
