<?php

namespace App\Models\Medis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RekamMedis extends Model
{
    use HasFactory;
    protected $table = 'tb_rekam_medis';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'kode',
        'keluhan',
        'diagnosa',
        'tgl_pemeriksaan',
        'tindakan_pemeriksaan',
        'keterangan'
    ];
    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'tgl_pemeriksaan' => 'timestamp',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'tgl_pemeriksaan',
    ];

    public function pemeriksaan(): HasMany
    {
        return $this->hasMany(Pemeriksaan::class, 'rekam_medis_id', 'id');
    }
}
