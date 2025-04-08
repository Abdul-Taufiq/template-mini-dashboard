<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockBarang extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_barang_stock';
    protected $fillable = [
        'barang_id',
        'supplier_id',
        'harga_pokok',
        'harga_jual',
        'tgl_berlaku',
        'tgl_akhir',
        'stock',
        'exp_date',
    ];

    public $casts = [
        'tgl_berlaku' => 'datetime',
        'tgl_akhir' => 'datetime',
        'exp_date' => 'datetime',
    ];
    protected $dates = [
        'tgl_berlaku',
        'tgl_akhir',
        'exp_date',
        'created_at',
        'updated_at',
    ];
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    // eager load
    protected $with = [
        'barang',
        'supply'
    ];


    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'barang_id');
    }

    public function supply(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'supplier_id');
    }
}
