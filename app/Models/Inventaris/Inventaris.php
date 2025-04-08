<?php

namespace App\Models\Inventaris;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_inventaris';
    protected $fillable = [
        'kode',
        'nama_barang',
        'jenis_barang',
        'speksifikasi',
        'qty',
        'harga_beli',
        'penyusutan',
        'tgl_pembelian',
        'keterangan',
    ];

    public $casts = [
        'tgl_pembelian' => 'datetime',
    ];

    protected $dates = [
        'tgl_pembelian',
        'created_at',
        'updated_at',
    ];

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
