<?php

namespace App\Http\Controllers;
use App\Article;
use App\User;
use App\Comment;
use Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;


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
    	$article = Article::findOrFail($id);
    	return view('show', compact('article'));
    }
    public function news(){
    	 $articles = Article::latest('updated_at')->get();
        $i = 0;
        foreach ($articles as $article) {
            if($article->approved)
            {   
                if($i<4)
                {
                    $latestArticles[$i] = $article;
                    $i++;
                }
            }            
        }     
        
        $i = 0;
        foreach ($articles as $article) {
            if($article->approved)
            {   
                if(strtoupper($article->type) == 'VIDEO')
                {
                    if($i<4)
                    {
                        $videoArticles[$i] = $article;
                        $i++;
                    }

                }
            }            
        }   
        $i = 0;
        foreach ($articles as $article) {
            if($article->approved)
            {   
                if(strtoupper($article->type) == 'TEXT')
                {
                    if($i<4)
                    {
                        $textArticles[$i] = $article;
                        $i++;
                    }

                }
            }            
        } 

          
        return view('news', compact('latestArticles', 'videoArticles', 'textArticles'));
    }

}
