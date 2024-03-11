<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class Cart extends Model
{
    use HasFactory;

    public $table="cart";

    protected $fillable = [
        'user_id','product_id','quantity'
    ];

    public function products()
    {
        return $this->belongsToMany(product::class)->withPivot('quantity');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
}