<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'total',
        'size',
        'type',
        'status',
        'product_profile',
        'quantity',
        'sticker_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
