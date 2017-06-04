
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
            <div class="col-md-6 art ">
              <h3>
                 {{ $article->title}}
             </h3>
                <a href="video/{{ $article->id }}">
                    <img class="img-responsive " src="{{ url('img/Antwerp.jpg') }}" alt="{{ $article->title}}">
                </a>
                <div class="text">
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
