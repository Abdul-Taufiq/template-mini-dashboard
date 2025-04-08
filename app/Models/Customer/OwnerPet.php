<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OwnerPet extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'tb_pet_owner';
    protected $fillable = [
        'nama',
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

    public function pet(): HasMany
    {
        return $this->hasMany(Pet::class, 'owner_pet_id', 'id');
    }
}
