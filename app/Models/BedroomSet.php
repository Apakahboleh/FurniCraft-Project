<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BedroomSet extends Model
{
    use HasFactory;
    protected $table = "bedroom_set";
    protected $guarded = [];

    public function scopeFilter( $query, array $filters )
    {

        $query->when($filters["search"] ?? false, function($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
            ->orWhere('deskripsi', 'like', '%' . $search . '%');
        });

    }
}
