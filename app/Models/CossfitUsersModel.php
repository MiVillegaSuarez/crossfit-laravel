<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CossfitUsersModel extends Model
{
    use HasFactory;

    protected $table = 'crossfit_users';
    protected $primaryKey = 'id_user';
    protected $fillable = ['id_user', 'first_name', 'last_name', 'birth', 'email', 'password'];


}
