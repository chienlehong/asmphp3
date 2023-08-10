<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'soluong',
        'tong',
        'image'
    ];
    public function products(){
        return $this->belongsTo(Product::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
