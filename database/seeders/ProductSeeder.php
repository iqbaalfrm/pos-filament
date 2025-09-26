<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Seed 12 produk per kategori perhiasan emas.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            // =========================
            // 1. Cincin (category_id = 1)
            // =========================
            [
                'category_id' => 1,
                'name'        => 'Cincin Emas Klasik 1.5g',
                'stock'       => 5,
                'cost_price'  => 0,
                'gold_type'   => 'emas_tua',
                'weight_gram' => 1.5,
                'image'       => 'products/no-image.png',
                'barcode'     => '8991001000001',
                'sku'         => 'EM-CIN-001',
                'description' => 'Cincin emas tua desain klasik, cocok harian.',
                'is_active'   => 1,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'category_id' => 1,
                'name'        => 'Cincin Emas Muda 2.1g',
                'stock'       => 4,
                'cost_price'  => 0,
                'gold_type'   => 'emas_muda',
                'weight_gram' => 2.1,
                'image'       => 'products/no-image.png',
                'barcode'     => '8991001000002',
                'sku'         => 'EM-CIN-002',
                'description' => 'Cincin emas muda 2.1 gram, finishing glossy.',
                'is_active'   => 1,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],

            // =========================
            // 2. Gelang (category_id = 2)
            // =========================
            [
                'category_id' => 2,
                'name'        => 'Gelang Rantai Emas 5g',
                'stock'       => 3,
                'cost_price'  => 0,
                'gold_type'   => 'emas_tua',
                'weight_gram' => 5.0,
                'image'       => 'products/no-image.png',
                'barcode'     => '8991001000003',
                'sku'         => 'EM-GEL-001',
                'description' => 'Gelang rantai emas tua, kuat dan elegan.',
                'is_active'   => 1,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'category_id' => 2,
                'name'        => 'Gelang Emas Muda 7g',
                'stock'       => 2,
                'cost_price'  => 0,
                'gold_type'   => 'emas_muda',
                'weight_gram' => 7.0,
                'image'       => 'products/no-image.png',
                'barcode'     => '8991001000004',
                'sku'         => 'EM-GEL-002',
                'description' => 'Gelang polos emas muda, cocok untuk hadiah.',
                'is_active'   => 1,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],

            // =========================
            // 3. Kalung (category_id = 3)
            // =========================
            [
                'category_id' => 3,
                'name'        => 'Kalung Emas Tua 10g',
                'stock'       => 2,
                'cost_price'  => 0,
                'gold_type'   => 'emas_tua',
                'weight_gram' => 10.0,
                'image'       => 'products/no-image.png',
                'barcode'     => '8991001000005',
                'sku'         => 'EM-KAL-001',
                'description' => 'Kalung rantai emas tua, kesan mewah.',
                'is_active'   => 1,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'category_id' => 3,
                'name'        => 'Kalung Emas Muda 12g',
                'stock'       => 1,
                'cost_price'  => 0,
                'gold_type'   => 'emas_muda',
                'weight_gram' => 12.0,
                'image'       => 'products/no-image.png',
                'barcode'     => '8991001000006',
                'sku'         => 'EM-KAL-002',
                'description' => 'Kalung emas muda 12 gram, kilau maksimal.',
                'is_active'   => 1,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],

            // =========================
            // 4. Anting (category_id = 4)
            // =========================
            [
                'category_id' => 4,
                'name'        => 'Anting Emas Muda 1.2g',
                'stock'       => 6,
                'cost_price'  => 0,
                'gold_type'   => 'emas_muda',
                'weight_gram' => 1.2,
                'image'       => 'products/no-image.png',
                'barcode'     => '8991001000007',
                'sku'         => 'EM-ANT-001',
                'description' => 'Anting kecil elegan, nyaman dipakai harian.',
                'is_active'   => 1,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'category_id' => 4,
                'name'        => 'Anting Emas Tua 1.4g',
                'stock'       => 5,
                'cost_price'  => 0,
                'gold_type'   => 'emas_tua',
                'weight_gram' => 1.4,
                'image'       => 'products/no-image.png',
                'barcode'     => '8991001000008',
                'sku'         => 'EM-ANT-002',
                'description' => 'Anting emas tua model bulat minimalis.',
                'is_active'   => 1,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],

            // =========================
            // 5. Liontin (category_id = 5)
            // =========================
            [
                'category_id' => 5,
                'name'        => 'Liontin Emas Tua 2.5g',
                'stock'       => 4,
                'cost_price'  => 0,
                'gold_type'   => 'emas_tua',
                'weight_gram' => 2.5,
                'image'       => 'products/no-image.png',
                'barcode'     => '8991001000009',
                'sku'         => 'EM-LIO-001',
                'description' => 'Liontin ukiran klasik, detail halus.',
                'is_active'   => 1,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'category_id' => 5,
                'name'        => 'Liontin Emas Muda 3.2g',
                'stock'       => 3,
                'cost_price'  => 0,
                'gold_type'   => 'emas_muda',
                'weight_gram' => 3.2,
                'image'       => 'products/no-image.png',
                'barcode'     => '8991001000010',
                'sku'         => 'EM-LIO-002',
                'description' => 'Liontin modern, cocok untuk kalung tipis.',
                'is_active'   => 1,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],

            // =========================
            // 6. Giwang (category_id = 6)
            // =========================
            [
                'category_id' => 6,
                'name'        => 'Giwang Emas Muda 0.8g',
                'stock'       => 8,
                'cost_price'  => 0,
                'gold_type'   => 'emas_muda',
                'weight_gram' => 0.8,
                'image'       => 'products/no-image.png',
                'barcode'     => '8991001000011',
                'sku'         => 'EM-GWG-001',
                'description' => 'Giwang mungil berkilau, nyaman dipakai.',
                'is_active'   => 1,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'category_id' => 6,
                'name'        => 'Giwang Emas Tua 1.0g',
                'stock'       => 7,
                'cost_price'  => 0,
                'gold_type'   => 'emas_tua',
                'weight_gram' => 1.0,
                'image'       => 'products/no-image.png',
                'barcode'     => '8991001000012',
                'sku'         => 'EM-GWG-002',
                'description' => 'Giwang emas tua, finishing doff elegan.',
                'is_active'   => 1,
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
        ];

        // Upsert biar aman (tanpa truncate) — kunci unik pakai SKU
        DB::table('products')->upsert(
            $data,
            ['sku'], // unique key
            [
                'category_id', 'name', 'stock', 'cost_price', 'gold_type', 'weight_gram',
                'image', 'barcode', 'description', 'is_active', 'updated_at'
            ]
        );
    }
}
