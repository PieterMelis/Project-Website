
@extends('layouts.app')

@section('content')

        <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Videos
                  </h1>
              </div>
          </div>
         

          <div class="masonry">
            @if(isset($videoArticles))
            @foreach ($videoArticles as $article)
            <div class="item">
              <div class="col-md-4 art ">
                  <a href="video/{{ $article->id }}">
                    <!--  <img class="img-responsive " src="../storage/app/{{$article->link1}}" alt="{{ $article->title}}"> -->
                    <video src="../storage/app/{{ $article->link1 }}"></video>


                  </a>
                  <div class="text">
                    <h3>
                       {{ $article->title}}
                   </h3>
                     <p>{{ $article->excerpt}}</p>
                     <div class="more">
                       <i class="fa fa-plus" aria-hidden="true"></i><a href="video/{{ $article->id }}">  Lees meer</a>
                     </div>
                  </div>
                </div>
            </div>
           @endforeach
           @endif
           @if(isset($testimonialArticles))
            @foreach ($testimonialArticles as $article)
            <div class="item">
              <div class="col-md-4 art ">
                  <a href="video/{{ $article->id }}">
                    <!--  <img class="img-responsive " src="../storage/app/{{$article->link1}}" alt="{{ $article->title}}"> -->
                    <video src="../storage/app/{{ $article->link1 }}"></video>


                  </a>
                  <div class="text">
                    <h3>
                       {{ $article->title}}
                   </h3>
                     <p>{{ $article->excerpt}}</p>
                     <div class="more">
                       <i class="fa fa-plus" aria-hidden="true"></i><a href="video/{{ $article->id }}">  Lees meer</a>
                     </div>
                  </div>
                </div>
            </div>
           @endforeach
           @endif
            
          </div>

         


        
       </div>
@endsection
