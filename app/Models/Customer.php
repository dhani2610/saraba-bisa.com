<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function packet()
    {
        return $this->belongsTo(Packet::class, 'packets_id', 'id');
    }
}
