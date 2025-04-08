<?php

namespace App\Models\Output;

use App\Models\Layanan\Layanan;
use App\Models\Medis\Pemeriksaan;
use App\Models\Store\Barang;
use App\Models\Store\Obat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NotaBayar extends Model
{
    use HasFactory;
    protected $table = 'tb_nota_pembayaran';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'barang_id',
        'obat_id',
        'pemeriksaan_id',
        'layanan_id',
        'kode',
        'disc_barang',
        'disc_layanan',
        'disc_dokter',
        'disc_layanan',
        'disc_inap',
        'total_biaya',
        'tgl_pembayaran',
        'status_pembayaran',
    ];
    protected $casts = [
        'tgl_pembayaran' => 'timestamp',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'tgl_pembayaran',
    ];
    protected $with = ['barang', 'obat', 'pemeriksaan', 'layanan'];

    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }

    public function obat(): BelongsTo
    {
        return $this->belongsTo(Obat::class, 'obat_id', 'id');
    }

    public function pemeriksaan(): BelongsTo
    {
        return $this->belongsTo(Pemeriksaan::class, 'pemeriksaan_id', 'id');
    }

    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class, 'layanan_id', 'id');
    }
}
