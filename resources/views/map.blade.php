@extends('layouts.app')


@section('content')



@if (Auth::guest())
<iframe class="viewMap" src="https://www.scribblemaps.com/maps/view/Antwerpen_studentenstad/htkri2ix9v" height="1000" width="100%"></iframe>
@else
<iframe class="createMap" src="https://www.scribblemaps.com/create/#id=htkri2ix9v"  height="1000" width="100%"></iframe>
@endif

<iframe class="createMap" src="https://uebermaps.com/maps/4215-antwerp-student&startpage=cover"  height="1000" width="100%"></iframe>

<div class='ue-widget-wrapper' style="position:relative; padding-bottom: 66.67%; height:0; overflow:hidden; min-height:260px;"><iframe frameborder='0' src='https://uebermaps.com/embed?map_id=4215-antwerp-student&map_token=7606-L7Vha6Dz5BfBSs8QTjyu&spot_id=22338' style='position:absolute; top:0; left:0; right:0; bottom:0; width:100%; height:100%; box-sizing:border-box; border-radius:0px;'></iframe></div>
