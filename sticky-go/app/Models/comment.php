<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $with=[
        'user'
    ];
    protected $fillable =[
        'sticker_id',
        'Comment'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function sticker(){
        return $this->belongsTo(sticker::class);
    }
}
