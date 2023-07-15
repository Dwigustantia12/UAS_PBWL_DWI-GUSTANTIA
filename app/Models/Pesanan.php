<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'tb_pesanan';
    protected $primaryKey = 'id_pesanan';
    protected $guarded = '[]';
    protected $fillable = [
        'id_pesanan',
        'tanggal_pesanan',
        'total_harga',
        'id_kontak',
        'id_produk'
    ];
    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class, 'id_produk');    
    }
    public function kontak(): BelongsTo
    {
        return $this->belongsTo(Kontak::class, 'id_kontak');    
    }    
}
