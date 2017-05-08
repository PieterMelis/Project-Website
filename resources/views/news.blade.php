
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
         @if (isset($latestArticles[0]))
           <div class="col-md-6 portfolio-item">
             <h3>
                 <a href="article/{{ $latestArticles[0]->id }}">{{ $latestArticles[0]->title}}</a>
             </h3>
               <a href="article/{{ $latestArticles[0]->id }}">
                   <img class="img-responsive" src="../storage/app/{{$latestArticles[0]->link1}}" alt="">
               </a>

               <p>{{ $latestArticles[0]->excerpt}}</p>

           </div>
         @endif
         @if (isset($latestArticles[1]))
           <div class="col-md-6 portfolio-item">
             <h3>
                 <a href="article/{{ $latestArticles[1]->id }}">{{ $latestArticles[1]->title}}</a>
             </h3>
               <a href="article/{{ $latestArticles[1]->id }}">
                   <img class="img-responsive" src="../storage/app/{{ $latestArticles[1]->link1}}" alt="">
               </a>

               <p>{{ $latestArticles[1]->excerpt}}</p>
           </div>
          @endif
       </div>

       <div class="row">
        @if (isset($latestArticles[2]))
           <div class="col-md-6 portfolio-item">
             <h3>
                 <a href="article/{{ $latestArticles[2]->id }}">{{ $latestArticles[2]->title}}</a>
             </h3>
               <a href="article/{{ $latestArticles[2]->id }}">
                   <img class="img-responsive" src="../storage/app/{{ $latestArticles[2]->link1}}" alt="">
               </a>

               <p>{{ $latestArticles[2]->excerpt}}</p>
           </div>
        @endif
        @if (isset($latestArticles[3]))
           <div class="col-md-6 portfolio-item">
               <a href="article/{{ $latestArticles[3]->id }}">
                   <img class="img-responsive" src="../storage/app/{{ $latestArticles[3]->link1}}" alt="">
               </a>
               <h3>
                  <a href="article/{{ $latestArticles[3]->id }}">{{ $latestArticles[3]->title}}</a>
               </h3>
               <p>{{ $latestArticles[3]->excerpt}}</p>
           </div>
        @endif
       </div>

<br>
      <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Videos
                        </h1>
                    </div>
        </div>
        <div class="row">
         @if (isset($videoArticles[0]))
           <div class="col-md-6 portfolio-item">
               <a href="article/{{ $videoArticles[0]->id }}">
                   <img class="img-responsive" src="../storage/app/{{ $videoArticles[0]->link1}}" alt="">
               </a>
               <h3>
                   <a href="article/{{ $videoArticles[0]->id }}">{{ $videoArticles[0]->title}}</a>
               </h3>
               <p>{{ $videoArticles[0]->excerpt}}</p>

           </div>
         @endif
         @if (isset($videoArticles[1]))
           <div class="col-md-6 portfolio-item">
               <a href="article/{{ $videoArticles[1]->id }}">
                   <img class="img-responsive" src="../storage/app/{{ $videoArticles[1]->link1}}" alt="">
               </a>
               <h3>
                   <a href="article/{{ $videoArticles[1]->id }}">{{ $videoArticles[1]->title}}</a>
               </h3>
               <p>{{ $videoArticles[1]->excerpt}}</p>
           </div>
          @endif
       </div>

       <div class="row">
        @if (isset($videoArticles[2]))
           <div class="col-md-6 portfolio-item">
               <a href="article/{{ $videoArticles[2]->id }}">
                   <img class="img-responsive" src="../storage/app/{{ $videoArticles[2]->link1}}" alt="">
               </a>
               <h3>
                   <a href="article/{{ $videoArticles[2]->id }}">{{ $videoArticles[2]->title}}</a>
               </h3>
               <p>{{ $videoArticles[2]->excerpt}}</p>
           </div>
        @endif
        @if (isset($videoArticles[3]))
           <div class="col-md-6 portfolio-item">
               <a href="article/{{ $videoArticles[3]->id }}">
                   <img class="img-responsive" src="../storage/app/{{ $videoArticles[3]->link1}}" alt="">
               </a>
               <h3>
                  <a href="article/{{ $videoArticles[3]->id }}">{{ $videoArticles[3]->title}}</a>
               </h3>
               <p>{{ $videoArticles[3]->excerpt}}</p>
           </div>
        @endif
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
