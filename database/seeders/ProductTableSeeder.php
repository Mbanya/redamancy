<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::query()->create([
            'product_name'=>'Chardonnay',
            'product_description'=>'Served well-chilled our authentically
            made Cabernet Sauvignon is a refreshingly delicate dry wine with hints of
            strawberry, citrus, and peach laced fruit.',
            'volume'=>750,
            'varietal'=>'100% Cabernet',
            'appellation'=> 'Redamancy Cabernet',
            'vintage'=>'2021',
            'profile'=>'Semi-dry',
            'alcohol'=>13.5,
            'price'=> 80,
            'product_image'=>'https://redamancy.herokuapp.com/images/shop/white-wine-glass-shop.png',
            'slug'=>'chardonnay',
            'featured'=>'0',
        ]);

        Product::query()->create([
            'product_name'=>'Cabernet Sauvignon',
            'product_description'=> 'Served well-chilled our authentically made Cabernet Sauvignon is
                                    a refreshingly delicate dry wine with hints of strawberry, citrus,
                                    and peach laced fruit.',
            'volume'=>750,
            'varietal'=>'100% Cabernet',
            'appellation'=> 'Redamancy Cabernet',
            'vintage'=>'2021',
            'profile'=>'Semi-dry',
            'alcohol'=>13.5,
            'price'=> 80,
            'product_image'=>'https://redamancy.herokuapp.com/images/wine-bottles/current-release.png',
            'slug'=>'cabernet-sauvignon',
            'featured'=>'0',
        ]);
    }
}
