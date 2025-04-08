<?php

namespace App\Models\Medis;

use App\Models\Store\Obat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PemeriksaanObat extends Model
{
    use HasFactory;
    protected $table = 'tb_pemeriksaan_obat';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'pemeriksaan_id',
        'obat_id',
        'qty',
        'keterangan'
    ];

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $with = [
        'obat',
        'pemeriksaan'
    ];

    public function obat(): BelongsTo
    {
        return $this->belongsTo(Obat::class, 'obat_id', 'id');
    }

    public function pemeriksaan(): BelongsTo
    {
        return $this->belongsTo(Pemeriksaan::class, 'pemeriksaan_id', 'id');
    }
}
