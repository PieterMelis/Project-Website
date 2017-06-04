@extends('layouts.app')
@section('content')

  @if (Auth::guest())
  <iframe class="viewMap" src="https://www.scribblemaps.com/maps/view/Antwerpen_studentenstad/htkri2ix9v" height="1000" width="100%"></iframe>
  @else
  <iframe class="createMap" src="https://www.scribblemaps.com/create/#id=htkri2ix9v"  height="1000" width="100%"></iframe>
  @endif

  <!--
  <iframe class="createMap" src="https://uebermaps.com/maps/4215-antwerp-student&startpage=cover"  height="1000" width="100%"></iframe>

  <iframe class="createMap" src="https://uebermaps.com/embed?map_id=4215-antwerp-student&map_token=7606-L7Vha6Dz5BfBSs8QTjyu&startpage=map" src="https://google.be"   height="1000" width="100%"></iframe>

  -->
@endsection
