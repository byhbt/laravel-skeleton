<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = array('id', 'created_at', 'updated_at');
    protected $fillable = array('youtube_id', 'title', 'description');
    
}
