<?php

namespace App\Models\Store;

use App\Models\Medis\PemeriksaanObat;
use App\Models\Output\NotaBayar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Obat extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_obat';
    protected $fillable = [
        'kode',
        'nama_obat',
        'jenis_obat',
        'satuan',
        'keterangan',
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


    public function stockobat(): HasMany
    {
        return $this->hasMany(StockObat::class, 'obat_id', 'id');
    }

    public function pemeriksaanobat(): HasMany
    {
        return $this->hasMany(PemeriksaanObat::class, 'obat_id', 'id');
    }

    public function notapembayaran(): HasMany
    {
        return $this->hasMany(NotaBayar::class, 'obat_id', 'id');
    }
}
