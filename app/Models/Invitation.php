<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = ['title', 'address', 'latitude', 'longitude', 'phone', 'level', 'time', 'description', 'user_id'];
}
