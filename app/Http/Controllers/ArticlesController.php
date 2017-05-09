<?php

namespace App\Http\Controllers;
use App\Article;
use App\User;
use App\Comment;
use Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


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
     public function delete($id){
        $article = Article::findOrFail($id);
        if(Auth::user()){
            $article->delete();
        }
        return redirect('home');
    }
    public function editView($id){
        $article = Article::findOrFail($id);        
        return view('edit', compact('article'));

    }
    public function edit($id, \App\Http\Requests\CreatePostRequest $request){
        $article = Article::findOrFail($id);
        $updatedArticle = new Article($request->all());
        if( null !==$request->file('link1')){   
            $ext = $request->file('link1')->extension();
            $path = $request->file('link1')->storeAs('newsImages', 'image' . str_random(10) . ".{$ext}");
            $updatedArticle->link1 = $path;    
            if( null !==$request->file('link2')){
                $ext = $request->file('link2')->extension();

                $path = $request->file('link2')->storeAs('newsImages', 'image' . str_random(10) . ".{$ext}");
                $updatedArticle->link2 = $path; 
            } 
        }
        $article['title'] = $updatedArticle['title'];
        $article['excerpt'] = $updatedArticle['excerpt'];
        $article['body'] = $updatedArticle['body'];
        $article['type'] = $updatedArticle['type'];
        if (null !== $updatedArticle['link1']){$article['link1'] = $updatedArticle['link1'];}
        if (null !== $updatedArticle['link2']){$article['link2'] = $updatedArticle['link2'];}   
        




        $article->update();
        $redirect = 'article/' . $article['id'];     
        return redirect($redirect);

    }


    public function store(\App\Http\Requests\CreatePostRequest $request){
         $article = new Article($request->all());   
         $ext = $request->file('link1')->extension();
         $path = $request->file('link1')->storeAs('newsImages', 'image' . str_random(10) . ".{$ext}");
         $article->link1 = $path;    
         if( null !==$request->file('link2')){
            $ext = $request->file('link2')->extension();

            $path = $request->file('link2')->storeAs('newsImages', 'image' . str_random(10) . ".{$ext}");
            $article->link2 = $path; 
         }
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
