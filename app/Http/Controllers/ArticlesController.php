<?php

namespace App\Http\Controllers;
use App\Article;
use App\User;
use App\Comment;
use Request;
use Auth;
use Carbon\Carbon;


class ArticlesController extends Controller
{
     public function create()
    {        
        return view('create');
    }


    public function store(\App\Http\Requests\CreatePostRequest $request){
         $article = new Article($request->all());
         Auth::user()->articles()->save($article);    
        return redirect('home');
    }
}
