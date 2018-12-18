@extends('layout')

@section('documentReady')
@stop

@section('title')
  <style media="screen">
    .map-container
    {
      position: relative;
    }
    .map-main
    {
      position: absolute;
      z-index: 1;
    }
    .map-NM
    {
      position: absolute;
      z-index: 2;
    }
    .map-other
    {
      position: absolute;
      z-index: 3;
    }
  </style>
  <title>Pyros Map</title>

@stop

@section('content')
  
  <div class="container" class="margin-top-10 margin-bottom-10">
<h1>Pyros Map</h1>
      <div class="row">
        <div class="col-sm-9">
          <div class="container">
            <div class="map-container">
              <img src="/images/pyros_map.png" class="img-fluid map-main img-thumbnail" id ="map_main">
              <img src="/images/pyros_NM.png"  class="img-fluid map-NM" id ="map_NM">
              <img src="/images/pyros_coffer.png"  class="img-fluid map-other" id ="map_coffer">
              <img src="/images/pyros_elemental.png"  class="img-fluid map-other" id ="map_elemental">
              <img src="/images/pyros_sprite.png"  class="img-fluid map-other" id ="map_sprite">
              <img src="/images/pyros_info.png"  class="img-fluid map-other" id ="map_info">
            </div>
          </div>
        </div>

        <div class="col-sm-3 ">
          <form role="form">
  <div class="form-check abc-checkbox">
    <input class="form-check-input" id="checkbox1" type="checkbox">
    <label class="form-check-label" for="checkbox1">
      Check me out
    </label>
  </div>
</form>
        </div>

      </div>



  </div>
@stop
