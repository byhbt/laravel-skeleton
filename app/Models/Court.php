<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    protected $fillable = ['name', 'slug', 'phone', 'address', 'latitude', 'longitude', 'price', 'website', 'open_hour', 'facebook'];
}
