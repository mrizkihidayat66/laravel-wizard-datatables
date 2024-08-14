<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'coupon_id',
        'total_amount',
        'status',
    ];

    /**
     * Get the product that owns the order.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the coupon associated with the order.
     */
    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }
}
