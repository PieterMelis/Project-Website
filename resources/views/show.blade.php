
@extends('layouts.app')

@section('content')

  <div class="container">
    <!-- Page Header -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Niews article X
            </h1>
        </div>
    </div>
   <!-- Projects Row -->
   <div class="row">
       <div class="col-md-6 portfolio-item">
           <a href="#">
               <img class="img-responsive" src="../img/700x400.jpg" alt="">
           </a>
           <h3>
               <h2>{{ $article->title }}</h2>
           </h3>
           <b>{{ $article->excerpt }}</b>
           <p>{{ $article->body }}</p>
       </div>

   </div>

  </div>
@endsection
