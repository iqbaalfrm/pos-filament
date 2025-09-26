<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoldPrice extends Model
{
    protected $fillable = ['gold_type', 'price_per_gram', 'price_date'];

    // Ambil harga terbaru (<= tanggal yang diminta, default hari ini)
    public static function latestFor(string $goldType, ?string $asOfDate = null): ?self
    {
        $asOfDate = $asOfDate ?: now()->toDateString();

        return static::where('gold_type', $goldType)
            ->where('price_date', '<=', $asOfDate)
            ->orderByDesc('price_date')
            ->first();
    }
}
