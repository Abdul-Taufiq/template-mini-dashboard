<?php

namespace App\Models\Medis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RawatInap extends Model
{
    use HasFactory;
    protected $table = 'tb_rawat_inap';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'kode',
        'date_in',
        'date_out',
        'biaya_inap',
        'status',
        'keterangan',
    ];
    protected $casts = [
        'date_in' => 'timestamp',
        'date_out' => 'timestamp',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'date_in',
        'date_out',
    ];


    public function pemeriksaan(): HasMany
    {
        return $this->hasMany(Pemeriksaan::class, 'rawat_inap_id', 'id');
    }
}
