<?php

namespace App\Models\Karyawan;

use App\Models\Layanan\Layanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_staff';
    protected $fillable = [
        'kode',
        'nama_staff',
        'jabatan',
        'alamat',
        'no_telp',
        'email',
    ];

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



    public function layanan(): HasMany
    {
        return $this->hasMany(Layanan::class, 'dokter_id', 'id');
    }
}
