<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
        public function up(): void {
        Schema::create('gold_prices', function (Blueprint $table) {
            $table->id();
            $table->enum('gold_type', ['emas_tua', 'emas_muda']);
            $table->decimal('price_per_gram', 12, 2);
            $table->date('price_date');
            $table->timestamps();

            $table->unique(['gold_type', 'price_date']);     // satu harga per jenis per tanggal
            $table->index(['gold_type', 'price_date']);      // biar query cepat
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gold_prices');
    }
};