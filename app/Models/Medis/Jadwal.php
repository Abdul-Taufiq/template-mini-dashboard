<?php

namespace App\Models\Medis;

use App\Models\Customer\Pet;
use App\Models\Karyawan\Dokter;
use App\Models\Layanan\Layanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'tb_jadwal';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'dokter_id',
        'pet_id',
        'layanan_id',
        'tgl_jadwal',
        'keterangan',
        'status'
    ];

    protected $casts = [
        'tgl_jadwal' => 'timestamp',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $with = [
        'dokter',
        'pet',
        'layanan'
    ];


    public function dokter(): BelongsTo
    {
        return $this->belongsTo(Dokter::class, 'dokter_id', 'id');
    }

    public function pet(): BelongsTo
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'id');
    }

    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class, 'layanan_id', 'id');
    }
}
