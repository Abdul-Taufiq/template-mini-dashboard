<?php

namespace App\Models\Layanan;

use App\Models\Karyawan\Dokter;
use App\Models\Karyawan\Staff;
use App\Models\Medis\Jadwal;
use App\Models\Medis\Pemeriksaan;
use App\Models\Output\NotaBayar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Layanan extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_layanan';
    protected $fillable = [];

    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // eager
    protected $with = ['dokter', 'staff', 'layananbiaya'];

    public function layananbiaya(): BelongsTo
    {
        return $this->BelongsTo(LayananBiaya::class, 'layanan_biaya_id', 'id');
    }

    public function dokter(): BelongsTo
    {
        return $this->BelongsTo(Dokter::class, 'dokter_id', 'id');
    }

    public function staff(): BelongsTo
    {
        return $this->BelongsTo(Staff::class, 'staff_id', 'id');
    }

    public function jadwal(): HasMany
    {
        return $this->hasMany(Jadwal::class, 'layanan_id', 'id');
    }

    public function pemeriksaan(): HasMany
    {
        return $this->hasMany(Pemeriksaan::class, 'layanan_id', 'id');
    }

    public function notapembayaran(): HasMany
    {
        return $this->hasMany(NotaBayar::class, 'layanan_id', 'id');
    }
}
