<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'user_detail';
    protected $fillable = [
        'user_id',
        'nik',
        'place',
        'gender',
        'birth_date',
        'address',
        'phone_number',
    ];

    public $casts = [
        'birth_date' => 'datetime',
    ];

    protected $dates = [
        'birth_date',
        'created_at',
        'updated_at',
    ];

    protected $primaryKey = 'id';

    protected $with = [
        'user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
