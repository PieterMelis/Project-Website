@extends('layouts.app')

@section('content')



<div class="container">





<div class="masonry">

  @foreach ($textArticles as $article)
<div class="item">
  <div class="col-md-4 art ">
      <a href="article/{{ $article->id }}">
        <!--  <img class="img-responsive " src="../storage/app/{{$article->link1}}" alt="{{ $article->title}}"> -->
        <img class="img-responsive " src="../storage/app/{{$article->link1}}" alt="{{ $article->title}}">


      </a>
      <div class="text">
        <h3>
           {{ $article->title}}
       </h3>
         <p>{{ $article->excerpt}}</p>
         <div class="more">
           <i class="fa fa-plus" aria-hidden="true"></i><a href="article/{{ $article->id }}">  Lees meer</a>
         </div>
      </div>
    </div>
</div>
 @endforeach

 @foreach ($gateArticles as $article)
<div class="item">
  <div class="col-md-4 art ">
      <a href="articleGate/{{ $article->id }}">
        <!--  <img class="img-responsive " src="../storage/app/{{$article->link1}}" alt="{{ $article->title}}"> -->
        <img class="img-responsive " src="{{ $article->picture_url }}" alt="{{ $article->title}}">


      </a>
      <div class="text">
        <h3>
           {{ $article->title}}
       </h3>
         <p>{{ $article->author}}</p>
         <div class="more">
           <i class="fa fa-plus" aria-hidden="true"></i><a href="articleGate/{{ $article->id }}">  Lees meer</a>
         </div>
      </div>
    </div>
</div>
 @endforeach
</div>


</div>




@endsection
