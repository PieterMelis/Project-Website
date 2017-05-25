<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gate15_article extends Model
{
     protected $fillable = [
    	'title',    	
    	'author',
    	'article_url',
    	'picture_url',
    	'published_on',
    	'content',
    	'is_accepted',
    	    	
    ];
    
}
