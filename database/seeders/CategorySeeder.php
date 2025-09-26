<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Matikan constraints sementara
        Schema::disableForeignKeyConstraints();

        // Hapus anak dulu baru induk
        Product::truncate();
        Category::truncate();

        // Nyalakan lagi
        Schema::enableForeignKeyConstraints();

        // Seed data kategori
        $data = [
            ['name' => 'Cincin'],
            ['name' => 'Gelang'],
            ['name' => 'Kalung'],
            ['name' => 'Anting'],
            ['name' => 'Liontin'],
            ['name' => 'Giwang'],
        ];

        Category::insert($data);
    }
}
