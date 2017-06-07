@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class=" ">
              <div class="breadcrumb">
                 <a href="{{ url('/home') }}">← Terug naar overzicht</a>
              </div>
                <div class="panel-heading">Uw artikels</div>

                <div class="panel-body">
                  @foreach ($articles as $article)
                  <div>
                    <div class="col-xs-10">
                      <a href="article/{{$article->id}}" class="col"><h3 class>{{$article->title}}
                    </div>
                    <div class="col-xs-2">
                      <a href="article/edit/{{$article->id}}" class="col btn btn-primary">Edit</a></h3></a>
                    </div>


                  </div>
                  @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
