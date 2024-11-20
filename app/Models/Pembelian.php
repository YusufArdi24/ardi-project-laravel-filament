<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Pembelian extends Model
{
    protected $fillable = [
        'name',
        'price',
        'produk_id'
    ];


    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class);
    }
}
