<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessToken extends Model
{
    protected $connection = 'mysql';
    protected $table = 'tb_user_access';
    protected $primaryKey = 'id';
}
