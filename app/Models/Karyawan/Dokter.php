<?php

namespace App\Models\Karyawan;

use App\Models\Layanan\Layanan;
use App\Models\Medis\Jadwal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dokter extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_dokter';
    protected $fillable = [
        'kode',
        'nama_dokter',
        'spesialis',
        'alamat',
        'no_telp',
        'email',
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


    public function dokterbiaya(): HasMany
    {
        return $this->hasMany(DokterBiaya::class, 'dokter_id', 'id');
    }

    public function layanan(): HasMany
    {
        return $this->hasMany(Layanan::class, 'dokter_id', 'id');
    }

    public function jadwal(): HasMany
    {
        return $this->hasMany(Jadwal::class, 'dokter_id', 'id');
    }
}
