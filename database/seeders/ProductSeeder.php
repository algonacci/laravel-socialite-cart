<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Fresh Milk',
                'price' => '250',
                'description' => 'Susu paling fresh',
                'image' => 'https://cimory.com/uploads/products/Preview---Claim-Products-(Indonesia)-Fresh-Milk-950ml-02.jpg'
            ],
            [
                'name' => 'Wine',
                'price' => '50',
                'description' => 'Anggur fresh',
                'image' => 'https://cdn.popmama.com/content-images/community/20210609/community-9b74ec5e67ebe15c3d36f87780af021a.jpg'
            ],
            [
                'name' => 'Honey',
                'price' => '75',
                'description' => 'Madu fresh',
                'image' => 'https://asset.kompas.com/crops/xLLMihh3EZy1CwtkPn_4DGDwe9A=/0x8:1000x675/750x500/data/photo/2020/11/12/5facc84db5083.jpg'
            ]
        ];

        Product::insert($products);
    }
}
