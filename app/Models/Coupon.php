<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'discount_amount',
        'discount_type',
        'valid_from',
        'valid_until',
        'usage_limit',
        'used',
        'status',
        'created_at'
    ];

    /**
     * Get the orders for the coupon.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
