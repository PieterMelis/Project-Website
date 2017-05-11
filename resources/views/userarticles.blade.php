@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Uw artikels</div>

                <div class="panel-body">
                  @foreach ($articles as $article)
                  <div>
                    <a href="article/{{$article->id}}"><p class>{{$article->title}} <a href="article/edit/{{$article->id}}" class="col-md-12">Edit</a></p></a>
                    
                  </div>
                  @endforeach
                  <a href="home">Ga terug</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
