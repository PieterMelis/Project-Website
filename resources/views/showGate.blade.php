
@extends('layouts.app')

@section('content')

  <div class="container">
    <!-- Page Header -->
    <div class="row">
        <div class="col-lg-12">
            
        </div>
    </div>
   <!-- Projects Row -->
   @if ($article->is_accepted != 0)
   <div class="row">
       <div class="portfolio-item">
           <a href="#">
               <img class="img-responsive" src="{{ $article->picture_url}}" alt="">
           </a>
           <h3>
               <h2 class="article-header">{{ $article->title }}</h2>
           </h3>
           <b>{{ $article->published_on }}</b>
           <p>{!! $article->content !!}</p>
       </div>
       <a href="{{$article->article_url}}" rel=canonical>Lees het originele artikel op Gate 15!</a>

   </div>
   @else
    <div class="row">
       <div class="portfolio-item">
           
           <h3>
               <h2 class="article-header">Sorry, dit artikel is nog niet goedgekeurd</h2>
               @if (!Auth::guest())
               @if ((strtoupper(Auth::user()->role) == 'ADMIN'))
              <a href="{{ url('/approve/' . $article->id) }}">ADMIN: Keur het hier goed.</a>
               @endif
               @endif

           </h3>
           
       </div>

   </div>
   @endif

  </div>
@endsection
