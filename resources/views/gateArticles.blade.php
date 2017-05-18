@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Lijst van GATE 15 artikels</div>
                @if (strtoupper(Auth::user()->role) == 'ADMIN')
                <div class="panel-body">
                  @foreach ($articles as $article)
                  <div>
                    <a href="approve/{{$article->id}}"><p class>{{$article->title}}</p></a>
                    
                  </div>
                  @endforeach
                  <a href="home">Ga terug</a>
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
@endsection
