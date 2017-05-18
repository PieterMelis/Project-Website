
@extends('layouts.app')

@section('content')

  <div class="container">
    <!-- Page Header -->
    <div class="row">
        <div class="col-lg-12">
            
        </div>
    </div>
   <!-- Projects Row -->
   @if (Auth::guest())
    <div class="row">
       <div class="portfolio-item">
           
           <h3>
               <h2 class="article-header">Log eerst in</h2>   
              
               
           </h3>
           
       </div>

   </div>
   @else
   @if(strtoupper(Auth::user()->role) == 'APPROVER' || strtoupper(Auth::user()->role) == 'ADMIN')
   <div class="row">
       <div class="portfolio-item">
           <a href="#">
               <img class="img-responsive" src="{{ $article->picture_url}}" alt="">
           </a>
           <h3>
               <h2 class="article-header">{{ $article->title }}</h2>
           </h3>
           <b>{{ $article->published_on }}</b>
           <p>{!! $article->content !!}</p>
       </div>

   </div>
   @if ($article->is_accepted != 1)
        {!! Form::open(array('url' => 'approve/' . $article->id)) !!}
          <div class="form-group">

                                  <button type="submit" class="btn btn-default">
                                      <i class="fa fa-plus"></i> Goedkeuren
                                  </button>

                              </div>
        {!! Form::close() !!}
   @else
      {!! Form::open(array('url' => 'unapprove/' . $article->id)) !!}
          <div class="form-group">

                                  <button type="submit" class="btn btn-default">
                                      <i class="fa fa-minus"></i> Afkeuren
                                  </button>

                              </div>
        {!! Form::close() !!}
   @endif
   @endif
   @endif


  </div>
@endsection
