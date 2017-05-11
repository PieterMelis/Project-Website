@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <a href="article/add"><h6>Artikel toevoegen</h6></a>
                  <a href="yourarticles"><h6>Uw artikels</h6></a>
                  @if (strtoupper(Auth::user()->role) == 'ADMIN')
                  <a href="users"><h6>Beheer gebruikers</h6></a>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
