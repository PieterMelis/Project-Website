@extends('layouts.app')


@section('content')



@if (Auth::guest())
<iframe class="viewMap" src="https://www.scribblemaps.com/maps/view/Antwerpen_studentenstad/htkri2ix9v" height="1000" width="100%"></iframe>
@else
<iframe class="createMap" src="https://www.scribblemaps.com/create/#id=htkri2ix9v"  height="1000" width="100%"></iframe>

@endif
@stop
