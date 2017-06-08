@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="breadcrumb">
             <a href="{{ url('/home') }}">← Terug naar overzicht</a>
          </div>
            <div class="panel panel-default">
                <div class="panel-heading">Beheer gebruikers</div>
                @if (strtoupper(Auth::user()->role) == 'ADMIN')
                <div class="panel-body">
                  @foreach ($users as $user)

                  <div class="col-xs-10">
                    <a href="user/{{$user->id}}" class="col"><h4>{{$user->name}} </h4></a>
                  </div>
                  <div class="col-xs-2">
                    <h4>Rol: {{$user->role}}</h4>
                  </div>

                  @endforeach
                </div>



                @else
                <div class="panel-body">
                  <p>U heeft geen rechten hier</p>
                </div>

                @endif
            </div>
        </div>
    </div>
</div>
@endsection
