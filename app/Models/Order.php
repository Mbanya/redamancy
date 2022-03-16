<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'billing_first_name',
        'billing_last_name',
        'billing_company',
        'billing_country',
        'billing_address_1',
        'billing_address_2',
        'billing_city',
        'billing_state',
        'billing_postcode',
        'billing_phone',
        'billing_email',
        'order_comments',
        'amount',
        'm_payment_id',
        'payment_status'
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class,'order_products')
            ->withPivot('quantity')
            ->withTimestamps();
    }
}
