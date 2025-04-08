<?php

namespace App\Models\Medis;

use App\Models\Customer\Pet;
use App\Models\Layanan\Layanan;
use App\Models\Output\NotaBayar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'tb_pemeriksaan';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'pet_id',
        'layanan_id',
        'rekam_medis_id',
        'rawat_inap_id',
        'kode'
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
        'pet',
        'layanan',
        'rekam_medis',
        'rawat_inap'
    ];


    public function pet(): BelongsTo
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'id');
    }

    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class, 'layanan_id', 'id');
    }

    public function rekam_medis(): BelongsTo
    {
        return $this->belongsTo(RekamMedis::class, 'rekam_medis_id', 'id');
    }

    public function rawat_inap(): BelongsTo
    {
        return $this->belongsTo(RawatInap::class, 'rawat_inap_id', 'id');
    }

    public function notapembayaran(): HasMany
    {
        return $this->hasMany(NotaBayar::class, 'pemeriksaan_id', 'id');
    }
}
