<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personalInformation extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'name',
        'lastname',
        'contact',
        'house_number',
        'barangay',
        'city',
        'province',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
