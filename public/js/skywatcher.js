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

function millisToMinutesAndSeconds(millis) {
  var minutes = Math.floor(millis / 60000);
  var seconds = ((millis % 60000) / 1000).toFixed(0);
  return minutes + ":" + (seconds < 10 ? '0' : '') + seconds;
}
function getWeatherInterval(eDate) {
      var eWeather = new Date(eDate ? eDate : eorzeaCurrentTime());
      eWeather.setUTCHours(parseInt(eWeather.getUTCHours() / 8) * 8);
      eWeather.setUTCMinutes(0);
      eWeather.setUTCSeconds(0);
      return eWeather;
}

// UI updates
function navbarEorzeaTimeUpdate() {
  var eCurrTime = eorzeaCurrentTime().toLocaleTimeString([], {hour: '2-digit', minute: '2-digit', timeZone: 'UTC'});
  $('#testp').html(eCurrTime + "(ET)");
}
