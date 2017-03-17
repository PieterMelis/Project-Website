<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'title',    	
    	'excerpt',
    	'body',
    	'type',
    	'link1',
    	'link2',
    	'user_id',
    	    	
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }
}
