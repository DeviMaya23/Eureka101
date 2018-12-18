@extends('layout')
@section('documentReady')
@stop
@section('content')
  <div class="container">
    <h1>Eureka Skywatcher</h1>
  </div>

  <div class="container">
    <p>
      Current Eorzea Time is :</p>
    <p id="eorzeaTime"></p>
    <br />
    <p id="currentWeatherWindow"></p>
    <p id="nextWeatherWindow"></p>
    <p>Window Change in :</p>
    <p id="windowchange"></p>

    <script>
      var eStart = getWeatherInterval();
      var lWeatherStart = eorzeaToLocal(eStart);
      var eEnd = new Date(eStart);
      eEnd.setUTCHours(eEnd.getUTCHours() + 8);
      var lWeatherEnd = eorzeaToLocal(eEnd);
      var now = new Date();
      var difference;
      if (now < lWeatherEnd)
      {
        difference = lWeatherEnd.getTime() - now.getTime();
        difference = millisToMinutesAndSeconds(difference);
      }
      document.getElementById("windowchange").innerHTML = difference;
    </script>
      {{-- <script type="text/javascript">

      var eStart;
      var lWeatherStart;
      var eEnd;
      eEnd.setUTCHours(eEnd.getUTCHours() + 8);
      var lWeatherEnd;

      eStart = getWeatherInterval();
      lWeatherStart = eorzeaToLocal(eStart);
      eEnd = new Date(eStart);
      eEnd.setUTCHours(eEnd.getUTCHours() + 8);
      lWeatherEnd = eorzeaToLocal(eEnd);

      var now = new Date();
      var difference;
      if (now < lWeatherEnd)
      {
        difference = lWeatherEnd.getTime() - now.getTime();
        difference = millisToMinutesAndSeconds(difference);
      }
      document.getElementById("windowchange").innerHTML = difference;

          function getWeatherWindows() {
            eStart = getWeatherInterval();
            lWeatherStart = eorzeaToLocal(eStart);
            eEnd = new Date(eStart);
            eEnd.setUTCHours(eEnd.getUTCHours() + 8);
            lWeatherEnd = eorzeaToLocal(eEnd);

          }
          function getWeatherInterval(eDate) {
                var eWeather = new Date(eDate ? eDate : eorzeaCurrentTime());
                eWeather.setUTCHours(parseInt(eWeather.getUTCHours() / 8) * 8);
                eWeather.setUTCMinutes(0);
                eWeather.setUTCSeconds(0);
                return eWeather;
          }
          function weatherWindowChange() {

            }

          }


      </script> --}}


  </div>

@stop

{{-- <script>
  //60 * 24 Eorzean minutes (one day) per 70 real-world minutes.
  var epochTimeFactor = 20.571428571428573;
  function localToEorzea(date) {
    return new Date(date.getTime()*epochTimeFactor);
  }
  function eorzeaToLocal(date) {
    return new Date(date.getTime()/epochTimeFactor);
  }
  function eorzeaCurrentTime() {
    return localToEorzea(new Date());
  }
  function getWeatherInterval(eDate) {
        var eWeather = new Date(eDate ? eDate : eorzeaCurrentTime());
        eWeather.setUTCHours(parseInt(eWeather.getUTCHours() / 8) * 8);
        eWeather.setUTCMinutes(0);
        eWeather.setUTCSeconds(0);
        return eWeather;
  }
  function millisToMinutesAndSeconds(millis) {
    var minutes = Math.floor(millis / 60000);
    var seconds = ((millis % 60000) / 1000).toFixed(0);
    return minutes + ":" + (seconds < 10 ? '0' : '') + seconds;
  }


</script>

<script>
    $(document).ready(function(){
      $("#currentEorzeaTime").text("test");

    });
</script>--}}
