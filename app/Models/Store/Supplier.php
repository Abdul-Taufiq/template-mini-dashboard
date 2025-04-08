<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_supplier';
    protected $fillable = [
        'kode',
        'kategori',
        'nama_toko',
        'alamat',
        'no_telp',
        'pemilik',
    ];
    protected $primaryKey = 'id';
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $guarded = ['id'];



    // x
    public function stockbarang(): HasMany
    {
        return $this->hasMany(StockBarang::class, 'supplier_id', 'id');
    }

    public function stockobat(): HasMany
    {
        return $this->hasMany(StockObat::class, 'supplier_id', 'id');
    }
}
