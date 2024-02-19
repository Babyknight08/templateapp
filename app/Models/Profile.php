<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'tblprofile';
    protected $fillable = [
        'ProfileImg',
        'User_ID',

    ];

}
