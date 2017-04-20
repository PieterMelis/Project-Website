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
    public function index()
    {        
        $articles = Article::latest('updated_at')->get();
        $i = 0;
        foreach ($articles as $article) {
            if($article->approved)
            {   
                if($i<4)
                {
                    $approvedArticles[$i] = $article;
                    $i++;
                }
            }            
        }     
          
        return view('welcome', compact('approvedArticles'));
        
    }
     public function create()
    {        
        return view('create');
    }


    public function store(\App\Http\Requests\CreatePostRequest $request){
         $article = new Article($request->all());
         Auth::user()->articles()->save($article);    
        return redirect('/');
    }
    public function show($id){
    	//find functunality
    	return view('show');
    }
    public function news(){
    	//find functunality
    	return view('news');
    }

}
