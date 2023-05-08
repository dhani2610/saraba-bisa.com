<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'store_name',
        'location',
        'packets_id',
        'status',
        'exp_trial',
        'exp_subscribe'
    ];

    public function packet()
    {
        return $this->belongsTo(Packet::class, 'packets_id', 'id');
    }
}
