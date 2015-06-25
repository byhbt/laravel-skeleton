<?php
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillable = ['name', 'slug', 'description'];

    public $timestamps = false;

    public function posts()
    {
        $this->hasMany('App\Models\PostCategory');
    }
}
