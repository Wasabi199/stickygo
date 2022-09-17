<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stickers extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'price',
        'product_profile',  
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function otherImages(){
        return $this->hasMany(otherImages::class);
    }


    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%'.$search.'%');
            });
        });
    }
}
