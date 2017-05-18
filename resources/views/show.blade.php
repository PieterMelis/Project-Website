
@extends('layouts.app')

@section('content')

  <div class="container">
    <!-- Page Header -->
    <div class="row">
        <div class="col-lg-12">
            
        </div>
    </div>
   <!-- Projects Row -->
   @if $article->is_accepted
   <div class="row">
       <div class="portfolio-item">
           <a href="#">
               <img class="img-responsive" src="../../storage/app/{{ $article->link1}}" alt="">
           </a>
           <h3>
               <h2 class="article-header">{{ $article->title }}</h2>
           </h3>
           <b>{{ $article->excerpt }}</b>
           <p>{!! $article->body !!}</p>
       </div>

   </div>
   @endif

  </div>
@endsection
