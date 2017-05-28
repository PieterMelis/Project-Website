
@extends('layouts.app')

@section('content')
@if(strtoupper($article->type) == 'TEXT')
 
 
  <div class="container">
   <div class="row">
       <div  class="col-md-12 ">
           
               <img class="img-responsive" src="../../storage/app/{{$article->link1}}" alt="">
           
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
  <a href="{{ url('news') }}">Geen artikel gevonden, ga terug</a>
  <div>
  @endif
@endsection
