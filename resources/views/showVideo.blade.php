
@extends('layouts.app')

@section('content')
@if(strtoupper($article->type) == 'VIDEO' || strtoupper($article->type) == 'TESTIMONIAL')
  <div class="container">
   <div class="row">
       <div  class="col-md-12 ">
          <div class="media-body">
           <video src="../storage/{{ $article->link1 }}" controls></video>

            
        </div>
           <h3 class="article-header">
               <h2 >{{ $article->title }}</h2>
           </h3>
           <h4>{{ $article->excerpt }}</h4>
           <p>{{ $article->body }}</p>
       </div>
   </div>
  </div>
  @else
  <div class="container">

  <a href="{{ url('video') }}">Geen artikel gevonden, ga terug</a>
  </div>
  @endif

@endsection
