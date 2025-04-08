<?php

namespace App\Models\Customer;

use App\Models\Medis\Jadwal;
use App\Models\Medis\Pemeriksaan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pet extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_pet';
    protected $fillable = [
        'nama',
        'jenis',
        'ras',
        'warna',
        'tgl_lahir',
        'owner_pet_id',
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

    // eager 
    protected $with = [
        'ownerpet'
    ];

    public function ownerpet(): BelongsTo
    {
        return $this->belongsTo(OwnerPet::class, 'owner_pet_id', 'id');
    }

    public function jadwal(): HasMany
    {
        return $this->hasMany(Jadwal::class, 'pet_id', 'id');
    }

    public function pemeriksaan(): HasMany
    {
        return $this->hasMany(Pemeriksaan::class, 'pet_id', 'id');
    }
}
