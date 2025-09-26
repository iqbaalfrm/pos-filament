<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // tambahin kolom emas
            if (!Schema::hasColumn('products', 'gold_type')) {
                $table->enum('gold_type', ['emas_tua', 'emas_muda'])->nullable()->after('cost_price');
            }
            if (!Schema::hasColumn('products', 'weight_gram')) {
                $table->decimal('weight_gram', 10, 3)->nullable()->after('gold_type');
            }

            // kalau mau hapus kolom price lama
            if (Schema::hasColumn('products', 'price')) {
                $table->dropColumn('price');
            }
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // rollback
            if (Schema::hasColumn('products', 'gold_type')) {
                $table->dropColumn('gold_type');
            }
            if (Schema::hasColumn('products', 'weight_gram')) {
                $table->dropColumn('weight_gram');
            }

            // balikin kolom price
            if (!Schema::hasColumn('products', 'price')) {
                $table->integer('price')->nullable();
            }
        });
    }
};
