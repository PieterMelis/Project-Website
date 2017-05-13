
@extends('layouts.app')

@section('content')

        <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Videos
                  </h1>
              </div>
          </div>
         <!-- Projects Row -->
         <div class="row">




            @for ($i = 0; $i <= 1; $i++)
             @if (isset($videoArticles[$i]))

               <div class="col-md-6 portfolio-item art">

                   <a href="article/{{ $videoArticles[$i]->id }}">
                       <img class="img-responsive " src="../storage/app/{{$videoArticles[$i]->link1}}" alt="">
                   </a>
                   <div class="text">
                     <h3>
                        <a href="article/{{ $videoArticles[$i]->id }}">{{ $videoArticles[$i]->title}}</a>
                    </h3>
                      <p>{{ $videoArticles[$i]->excerpt}}</p>
                      <i class="fa fa-plus" aria-hidden="true"></i><a href="article/{{ $videoArticles[$i]->id }}">  Lees meer</a>
                   </div>
               </div>

             @endif
           @endfor

           </div>
           <div class="row">
            @for ($i = 2; $i <= 3; $i++)


             @if (isset($videoArticles[$i]))
               <div class="col-md-6 portfolio-item art">

                   <a href="article/{{ $videoArticles[$i]->id }}">
                       <img class="img-responsive " src="../storage/app/{{$videoArticles[$i]->link1}}" alt="">
                   </a>
                   <div class="text">
                     <h3>
                        <a href="article/{{ $videoArticles[$i]->id }}">{{ $videoArticles[$i]->title}}</a>
                    </h3>
                      <p>{{ $videoArticles[$i]->excerpt}}</p>
                      <i class="fa fa-plus" aria-hidden="true"></i><a href="article/{{ $videoArticles[$i]->id }}">  Lees meer</a>
                   </div>
               </div>

             @endif
             @endfor
           </div>


        
       </div>
@endsection
