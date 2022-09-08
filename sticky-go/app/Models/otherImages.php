<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otherImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'other_image'
    ];

    public function stickers(){
        return $this->belongsTo(stickers::class);
    }
}
