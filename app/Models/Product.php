<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Product extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = [
        'product_name',
        'product_description',
        'volume',
        'varietal',
        'appellation',
        'vintage',
        'profile',
        'alcohol',
        'price',
        'product_image',
        'slug',
        'featured'
    ];

    protected $casts = [
        'price' => 'double',
        'featured' => 'boolean'
    ];

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class,'order_products');
    }
}
