<?php

namespace App\Models\Layanan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LayananBiaya extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_layanan_biaya';
    protected $fillable = [
        'kode',
        'nama_layanan',
        'jenis_layanan',
        'biaya_layanan',
        'tgl_berlaku',
        'tgl_akhir',
        'keterangan',
    ];

    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $casts = [
        'tgl_berlaku' => 'datetime',
        'tgl_akhir' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $dates = [
        'tgl_berlaku',
        'tgl_akhir',
        'created_at',
        'updated_at',
    ];

    public function layanan(): HasMany
    {
        return $this->HasMany(Layanan::class, 'layanan_biaya_id', 'id');
    }
}
