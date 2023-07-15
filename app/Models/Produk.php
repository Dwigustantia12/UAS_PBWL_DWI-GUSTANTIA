<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'tb_produk';
    protected $primaryKey = 'id_produk';
    protected $guarded = '[]';
    protected $fillable = [
        'id_produk',
        'nama_produk',
        'deskripsi',
        'harga'
    ];
    public function pesanan(): HasMany
    {
        return $this->hasMany(Pesanan::class, 'id_produk', 'id_produk');    
    }
}
