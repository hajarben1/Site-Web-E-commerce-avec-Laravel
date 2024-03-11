<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','prix','image','quantity'
    ];

    public function carts()
{
    return $this->belongsToMany(Cart::class)->withPivot('quantity');
}
}
