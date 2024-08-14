<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'status',
        'created_at'
    ];

    /**
     * Get the orders for the product.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
