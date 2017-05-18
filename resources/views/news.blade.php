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

          @for ($i = 0; $i <= 1; $i++)
           @if (isset($textArticles[$i]))
             <div class="col-md-6 art">
                 <a href="article/{{ $textArticles[$i]->id }}">
                     <img class="img-responsive " src="../storage/app/{{$textArticles[$i]->link1}}" alt="">
                 </a>
                 <div class="text">
                   <h3>
                      {{ $textArticles[$i]->title}}
                  </h3>
                    <p>{{ $textArticles[$i]->excerpt}}</p>
                    <i class="fa fa-plus" aria-hidden="true"></i><a href="article/{{ $textArticles[$i]->id }}">  Lees meer</a>
                 </div>
               </div>

           @endif
         @endfor

         </div>
</div>




@endsection
