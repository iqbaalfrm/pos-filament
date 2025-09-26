<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\GoldPrice;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id','name','stock','cost_price',
        'gold_type','weight_gram','image','barcode','sku',
        'description','is_active',
    ];

    protected $casts = [
        'weight_gram' => 'float',
    ];

    // (Opsional) kalau kamu sering kirim ke array/json dan ingin computed fields ikut muncul
    // protected $appends = ['current_price_per_gram', 'computed_price'];

    public function category() { return $this->belongsTo(Category::class); }
    public function transactionItems() { return $this->hasMany(TransactionItem::class); }

    /** Harga per gram terbaru sesuai gold_type. */
    public function getCurrentPricePerGramAttribute(): ?int
    {
        if (!$this->gold_type) return null;
        $gp = GoldPrice::latestFor($this->gold_type);
        return $gp?->price_per_gram ? (int) $gp->price_per_gram : null; // rupiah integer
    }

    /** Total harga produk = berat × harga per gram terbaru. */
    public function getComputedPriceAttribute(): ?int
    {
        if (!$this->gold_type || !$this->weight_gram) return null;
        $ppg = $this->current_price_per_gram;
        return $ppg ? (int) round($this->weight_gram * $ppg) : null; // rupiah integer
    }
}

