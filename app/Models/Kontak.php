<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kontak extends Model
{
    use HasFactory;
    protected $table = 'tb_kontak';
    protected $primaryKey = 'id_kontak';
    protected $guarded = '[]';
    protected $fillable = [
        'id_kontak',
        'nama',
        'email',
        'nomor_telepon'
    ];
    public function pesanan(): HasMany
    {
        return $this->hasMany(pesanan::class, 'id_kontak', 'id_kontak');    
    }
    
}
