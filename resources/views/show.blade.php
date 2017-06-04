
@extends('layouts.app')

@section('content')
@if(strtoupper($article->type) == 'TEXT')
 
 
  <div class="container">
   <div class="row">
       <div  class="col-md-12 ">
           
               <img class="img-responsive" src="../../storage/app/{{$article->link1}}" alt="{{ $article->title }}">
           
           <h3 class="article-header">
               <h2 >{{ $article->title }}</h2>
           </h3>
           <h4>{{ $article->excerpt }}</h4>
           <p> {!! nl2br(e($article->body)) !!}</p>
       </div>
       <img class="img-responsive" src="../../storage/app/{{$article->link2}}" alt="{{ $article->title }}">

   </div>
  </div>
  @else
  <div class="container">
  <a href="{{ url('news') }}">Geen artikel gevonden, ga terug</a>
  <div>
  @endif
@endsection
