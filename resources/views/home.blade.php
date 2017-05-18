@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <a href="article/add"><button type="button" class="btn btn-primary btn-block">Artikel toevoegen</button><h6></h6></a>
                  <a href="yourarticles"><button type="button" class="btn btn-primary btn-block">Uw artikels</button><h6></h6></a>
                  @if (strtoupper(Auth::user()->role) == 'ADMIN')
                  <a href="users"><button type="button" class="btn btn-primary btn-block">Beheer gebruikers</button><h6></h6></a>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
