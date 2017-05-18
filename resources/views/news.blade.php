@extends('layouts.app')

@section('content')



<div class="container">



          <div class="row x">
              <div class="col-lg-12">
                  <h1 class="page-header">Nieuwsartikels
                  </h1>
              </div>
          </div>
         <!-- Projects Row -->
         <div class="row">

          @foreach ($textArticles as $article)
           
             <div class="col-md-6 art">
                 <a href="article/{{ $article->id }}">
                     <img class="img-responsive " src="../storage/app/{{$article->link1}}" alt="">
                 </a>
                 <div class="text">
                   <h3>
                      {{ $article->title}}
                  </h3>
                    <p>{{ $article->excerpt}}</p>
                    <i class="fa fa-plus" aria-hidden="true"></i><a href="article/{{ $article->id }}">  Lees meer</a>
                 </div>
               </div>

           
         @endforeach

         </div>
</div>




@endsection
