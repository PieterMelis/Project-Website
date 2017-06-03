<?php

namespace App\Http\Controllers;
use App\Article;
use App\User;
use App\Comment;
use App\gate15_article;
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
            if($article->approved && strtoupper($article->type) != 'VIDEO' ) 
            {   
                if($i<2)
                {
                    $approvedArticles[$i] = $article;
                    $i++;
                }
            }            
        }    
        $articles = gate15_article::latest('updated_at')->get();
        foreach ($articles as $article) {
            if($article->is_accepted)
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
    public function userarticles()
    {        
        $articles = Auth::user()->articles;
        return view('userarticles', compact('articles'));
    }
    public function users()
    {        
        $users = User::all();

        return view('users', compact('users'));
    }
    public function editUser($id)
    {        
        $user = User::findOrFail($id);

        return view('editUser', compact('user'));
    }
    public function changeUser($id, \App\Http\Requests\CreatePostRequest $request){
        
        $user = User::findOrFail($id);
        if(strtoupper(Auth::user()->role) == 'ADMIN' || Auth::user()->id == $id){
        $updatedUser = new User($request->all());
        
        $user['name'] = $updatedUser['name'];
        $user['email'] = $updatedUser['email'];
        $user['role'] = $updatedUser['role'];
        $user->update();
        }
        $redirect = 'users';     
        return redirect($redirect);

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
        if(Auth::user()){
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
        }
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
    public function showGate($id){
        $article = gate15_article::findOrFail($id);
        return view('showGate', compact('article'));
    }
    public function approveView($id){
        $article = gate15_article::findOrFail($id);
        return view('approve', compact('article'));
    }
    public function approve($id){
        $article = gate15_article::findOrFail($id);
        $article['is_accepted'] = 1;
        $article->update();
        return view('approve', compact('article'));
       
    }
    public function unapprove($id){
        $article = gate15_article::findOrFail($id);
        $article['is_accepted'] = 0;
        $article->update();
        return view('approve', compact('article'));
            }
    public function gateArticles()
    {        
        $articles = gate15_article::all();
        return view('gateArticles', compact('articles'));
    }











    public function news(){
         $articles = Article::latest('updated_at')->get();
    	
        $i = 0;
        foreach ($articles as $article) {
            if($article->approved)
            {   
                if(strtoupper($article->type) == 'TEXT')
                {
                   
                        $textArticles[$i] = $article;
                        $i++;
                    

                }
            }            
        } 
         $articles = gate15_article::latest('updated_at')->get();       
         $i = 0;         
        foreach ($articles as $article) {
               
                if($article->is_accepted)
                {
                   
                        $gateArticles[$i] = $article;
                        $i++;
                    

                }
                     
        } 

        
        return view('news', compact('textArticles', 'gateArticles'));
    }
    public function videos(){
         $articles = Article::latest('updated_at')->get();       
        
        $i = 0;
        
        foreach ($articles as $article) {
            if($article->approved)
            {   
                if(strtoupper($article->type) == 'VIDEO')
                {
                    
                        $videoArticles[$i] = $article;
                        $i++;
                    

                }
            }            
        } 
        
        return view('video', compact('videoArticles'));

    }

    public function showVideo($id){
        $article = Article::findOrFail($id);
        return view('showVideo', compact('article'));
    }

}
