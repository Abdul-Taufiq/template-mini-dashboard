<?php

namespace App\Models\Karyawan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DokterBiaya extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_dokter_biaya';
    protected $fillable = [
        'dokter_id',
        'biaya_layanan',
        'tgl_berlaku',
        'tgl_akhir',
    ];

    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'tgl_berlaku' => 'datetime',
        'tgl_akhir' => 'datetime',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'tgl_berlaku',
        'tgl_akhir',
    ];

    // eager
    protected $with = [
        'dokter'
    ];

    public function dokter(): BelongsTo
    {
        return $this->belongsTo(Dokter::class, 'dokter_id', 'id');
    }
}
