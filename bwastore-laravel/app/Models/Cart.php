<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable =  [
        'product_id', 'users_id'
    ];

    protected $hidden = [];

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
