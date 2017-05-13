
@extends('layouts.app')

@section('content')

        <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Laatste nieuws
                  </h1>
              </div>
          </div>
         <!-- Projects Row -->
         <div class="row">




          @for ($i = 0; $i <= 1; $i++)
           @if (isset($latestArticles[$i]))

             <div class="col-md-6 portfolio-item art">

                 <a href="article/{{ $latestArticles[$i]->id }}">
                     <img class="img-responsive " src="../storage/app/{{$latestArticles[$i]->link1}}" alt="">
                 </a>
                 <div class="text">
                   <h3>
                      <a href="article/{{ $latestArticles[$i]->id }}">{{ $latestArticles[$i]->title}}</a>
                  </h3>
                    <p>{{ $latestArticles[$i]->excerpt}}</p>
                    <i class="fa fa-plus" aria-hidden="true"></i><a href="article/{{ $latestArticles[$i]->id }}">  Lees meer</a>
                 </div>
             </div>

           @endif
         @endfor

         </div>
         <div class="row">
          @for ($i = 2; $i <= 3; $i++)


           @if (isset($latestArticles[$i]))
             <div class="col-md-6 portfolio-item art">

                 <a href="article/{{ $latestArticles[$i]->id }}">
                     <img class="img-responsive " src="../storage/app/{{$latestArticles[$i]->link1}}" alt="">
                 </a>
                 <div class="text">
                   <h3>
                      <a href="article/{{ $latestArticles[$i]->id }}">{{ $latestArticles[$i]->title}}</a>
                  </h3>
                    <p>{{ $latestArticles[$i]->excerpt}}</p>
                    <i class="fa fa-plus" aria-hidden="true"></i><a href="article/{{ $latestArticles[$i]->id }}">  Lees meer</a>
                 </div>
             </div>

           @endif
           @endfor
         </div>


         <br>

       <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nieuwsartikels
                        </h1>
                    </div>
        </div>
        <div class="row">
         @if (isset($textArticles[0]))
           <div class="col-md-6 portfolio-item">
               <a href="article/{{ $textArticles[0]->id }}">
                   <img class="img-responsive" src="../storage/app/{{ $textArticles[0]->link1}}" alt="">
               </a>
               <h3>
                   <a href="article/{{ $textArticles[0]->id }}">{{ $textArticles[0]->title}}</a>
               </h3>
               <p>{{ $textArticles[0]->excerpt}}</p>

           </div>
         @endif
         @if (isset($textArticles[1]))
           <div class="col-md-6 portfolio-item">
               <a href="article/{{ $textArticles[1]->id }}">
                   <img class="img-responsive" src="../storage/app/{{ $textArticles[1]->link1}}" alt="">
               </a>
               <h3>
                   <a href="article/{{ $textArticles[1]->id }}">{{ $textArticles[1]->title}}</a>
               </h3>
               <p>{{ $textArticles[1]->excerpt}}</p>
           </div>
          @endif
       </div>

       <div class="row">
        @if (isset($textArticles[2]))
           <div class="col-md-6 portfolio-item">
               <a href="article/{{ $textArticles[2]->id }}">
                   <img class="img-responsive" src="../storage/app/{{ $textArticles[2]->link1}}" alt="">
               </a>
               <h3>
                   <a href="article/{{ $textArticles[2]->id }}">{{ $textArticles[2]->title}}</a>
               </h3>
               <p>{{ $textArticles[2]->excerpt}}</p>
           </div>
        @endif
        @if (isset($textArticles[3]))
           <div class="col-md-6 portfolio-item">
               <a href="article/{{ $textArticles[3]->id }}">
                   <img class="img-responsive" src="../storage/app/{{ $textArticles[3]->link1}}" alt="">
               </a>
               <h3>
                  <a href="article/{{ $textArticles[3]->id }}">{{ $textArticles[3]->title}}</a>
               </h3>
               <p>{{ $textArticles[3]->excerpt}}</p>
           </div>
        @endif
       </div>
       </div>
@endsection
