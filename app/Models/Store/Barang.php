<?php

namespace App\Models\Store;

use App\Models\Output\NotaBayar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barang extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_barang';
    protected $fillable = [
        'kode',
        'nama_barang',
        'jenis_barang',
        'satuan',
        'keterangan',
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


    public function stockbarang(): HasMany
    {
        return $this->hasMany(StockBarang::class, 'barang_id', 'id');
    }

    public function notapembayaran(): HasMany
    {
        return $this->hasMany(NotaBayar::class, 'barang_id', 'id');
    }
}
