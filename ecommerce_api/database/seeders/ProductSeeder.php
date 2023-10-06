<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productData = [
            [
                'photo' => 'https://res.cloudinary.com/dotz74j1p/image/upload/v1696259177/kafubjfrvkfppbggnbv6.png',
                'product_name' => 'Bawang Putih',
                'description' => 'Bawang Putih Malaysia',
                'price' => 65,
                'category' => 'Sembako',
            ],
            [
                'photo' => 'https://res.cloudinary.com/dotz74j1p/image/upload/v1696259177/kafubjfrvkfppbggnbv6.png',
                'product_name' => 'Bawang Merah',
                'description' => 'Bawang Merah Brebes',
                'price' => 85,
                'category' => 'Sembako',
            ],
            [
                'photo' => 'https://res.cloudinary.com/dotz74j1p/image/upload/v1696259177/kafubjfrvkfppbggnbv6.png',
                'product_name' => 'Beras Merah',
                'description' => 'Beras Merah 1Kg', 
                'price' => 120,
                'category' => 'Sembako',
            ],
            [
                'photo' => 'https://res.cloudinary.com/dotz74j1p/image/upload/v1696259177/kafubjfrvkfppbggnbv6.png',
                'product_name' => 'Minyak Kelapa',
                'description' => 'Minyak Kelapa 1 Liter',
                'price' => 115,
                'category' => 'Sembako',
            ],
            [
                'photo' => 'https://res.cloudinary.com/dotz74j1p/image/upload/v1696259177/kafubjfrvkfppbggnbv6.png',
                'product_name' => 'Jagung Putih',
                'description' => 'Jagung Putih Pulut Enak', 
                'price' => 140,
                'category' => 'Sembako',
            ],
            [
                'photo' => 'https://res.cloudinary.com/dotz74j1p/image/upload/v1696259177/kafubjfrvkfppbggnbv6.png',
                'product_name' => 'Jahe Merah',
                'description' => 'Jamer Jahe Merah Merona',
                'price' => 225,
                'category' => 'Rempah',
            ],
            [
                'photo' => 'https://res.cloudinary.com/dotz74j1p/image/upload/v1696259177/kafubjfrvkfppbggnbv6.png',
                'product_name' => 'Kunyit Besar',
                'description' => 'Kunyit Unggulan Ukuran Besar',
                'price' => 98,
                'category' => 'Rempah',
            ],
            [
                'photo' => 'https://res.cloudinary.com/dotz74j1p/image/upload/v1696259177/kafubjfrvkfppbggnbv6.png',
                'product_name' => 'Gula Merah',
                'description' => 'Gula Merah Aren',
                'price' => 85,
                'category' => 'Sembako',
            ],
            [
                'photo' => 'https://res.cloudinary.com/dotz74j1p/image/upload/v1696259177/kafubjfrvkfppbggnbv6.png',
                'product_name' => 'Gula Pasir',
                'description' => 'Gula Pasir Impor',
                'price' => 158,
                'category' => 'Sembako',
            ],
            [
                'photo' => 'https://res.cloudinary.com/dotz74j1p/image/upload/v1696259177/kafubjfrvkfppbggnbv6.png',
                'product_name' => 'Temu Lawak',
                'description' => 'Temu Lawak Unggulan',
                'price' => 76,
                'category' => 'Rempah',
            ],
        ];
        
        foreach ($productData as $key => $val) {
            Product::create($val);
        }

        // Product::create([
        //     'product_name' => 'Product 1',
        //     'description' => 'Description for Product 1',
        //     'price' => 19.99,
        // ]);

        // Product::create([
        //     'product_name' => 'Product 2',
        //     'description' => 'Description for Product 2',
        //     'price' => 29.99,
        // ]);
    }
}
