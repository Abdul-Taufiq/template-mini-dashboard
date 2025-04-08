<?php

namespace App\Models\Output;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class LogActivity extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'log_activities';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'username',
        'email',
        'role',
        'jabatan',
        'aksi'
    ];

    protected $casts = [
        'created_at',
        'updated_at'
    ];

    protected $date = [
        'created_at',
        'updated_at'
    ];


    public static function AddLog($aksi)
    {
        self::create([
            'username' => Auth::user()->username,
            'email' => Auth::user()->email,
            'role' => Auth::user()->role,
            'jabatan' => Auth::user()->jabatan,
            'aksi' => $aksi,
        ]);
    }
}
