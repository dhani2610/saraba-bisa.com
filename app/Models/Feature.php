<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'name',
        'description',
        'packets_id'
    ];

    public function packet()
    {
        return $this->belongsTo(Packet::class, 'packets_id', 'id');
    }
}
