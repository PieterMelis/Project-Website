@extends('layouts.app')

@section('content')
<div class="container">
   @if (Auth::guest())
    <div class="row">
       <div class="portfolio-item">

           <h3>
               <h2 class="article-header">Log eerst in</h2>


           </h3>

       </div>

   </div>
   @else
    <div class="row">
      <div class="col-md-10 col-md-offset-1">           



              <div class="breadcrumb">
             <a href="{{ url('/home') }}">← Terug naar overzicht</a>
          </div>
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#one">Alle GATE 15 Artikels</a></li>
                <li><a data-toggle="tab" href="#two">Goedgekeurde Artikels</a></li>
                <li><a data-toggle="tab" href="#three">Afgekeurde Artikels</a></li>
              </ul>

              <div class="tab-content">
                <div id="one" class="tab-pane fade in active">
                  <br>
                  <div class="panel-content">
                  <div class="panel-heading">Lijst van GATE 15 artikels</div>
                @if (strtoupper(Auth::user()->role) == 'ADMIN')
                <div class="panel-body">
                  @foreach ($articles as $article)
                  <div>
                    <a href="approve/{{$article->id}}"><p class>{{$article->title}}</p></a>

                  </div>
                  @endforeach
                </div>



                @else
                <div class="panel-body">
                  <p>U heeft geen rechten hier</p>
                  <a href="home">Ga terug</a>
                </div>

                @endif
                  </div>
                </div>
                <div id="two" class="tab-pane fade">
                  <br>
                  <div class="panel-content">
                          <div class="panel-heading">Lijst van goedgekeurde GATE 15 artikels</div>
                @if (strtoupper(Auth::user()->role) == 'ADMIN')
                <div class="panel-body">
                  @foreach ($articles as $article)
                  <div>
                    @if($article->is_accepted)
                    <a href="approve/{{$article->id}}"><p class>{{$article->title}}</p></a>
                    @endif
                  </div>
                  @endforeach
                </div>



                @else
                <div class="panel-body">
                  <p>U heeft geen rechten hier</p>
                  <a href="home">Ga terug</a>
                </div>

                @endif
                  </div>

                </div>
                <div id="three" class="tab-pane fade">
                  <br>
          <div class="panel-content">
                  <div class="panel-heading">Lijst van afgekeurde GATE 15 artikels</div>
                @if (strtoupper(Auth::user()->role) == 'ADMIN')
                <div class="panel-body">
                  @foreach ($articles as $article)
                  @if(!$article->is_accepted)
                  <div>
                    <a href="approve/{{$article->id}}"><p class>{{$article->title}}</p></a>

                  </div>
                  @endif
                  @endforeach
                </div>



                @else
                <div class="panel-body">
                  <p>U heeft geen rechten hier</p>
                  <a href="home">Ga terug</a>
                </div>

                @endif
          </div>
        </div>
      </div>



      </div>
        
    </div>
    @endif
</div>

@endsection
