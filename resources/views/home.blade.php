@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="user/{{ Auth::user()->id}}"><button type="button" class="btn btn-primary btn-block">Uw gegevens</button></a>
                  <br>
                  @if (strtoupper(Auth::user()->role) == 'ADMIN')
                  <a href="article/add"><button type="button" class="btn btn-primary btn-block">Artikel toevoegen</button></a>
                  <br>
                  <a href="yourarticles"><button type="button" class="btn btn-primary btn-block">Alle artikels</button></a>
                  <br>


                  <a href="users"><button type="button" class="btn btn-primary btn-block">Beheer gebruikers</button></a>
                  <br>
                  <a href="gateArticles"><button type="button" class="btn btn-primary btn-block">Beheer GATE 15 artikels</button></a>

                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
