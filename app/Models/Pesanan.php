<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = "pesan";
    protected $guarded = [];

    public function KitchenSet()
    {
        return $this->belongsTo(KitchenSet::class);
    }
}
