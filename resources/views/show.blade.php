
@extends('layouts.app')

@section('content')

  <div class="container">
   <div class="row">
       <div  class="col-md-12 ">
           <a href="#">
               <img class="img-responsive" src="{{ url('img/Antwerp.jpg') }}" alt="">
           </a>
           <h3 class="article-header">
               <h2 >{{ $article->title }}</h2>
           </h3>
           <h4>{{ $article->excerpt }}</h4>
           <p>{{ $article->body }}</p>
       </div>
   </div>
  </div>
@endsection
