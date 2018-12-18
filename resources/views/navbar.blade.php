<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Maps
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('maps/pyros')}}">Pyros</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Pagos</a>
          <a class="dropdown-item" href="#">Anemos</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logos Info</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('skywatcher')}}">Skywatcher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Relic Info</a>
      </li>
   </ul>
   <ul class="navbar-nav">
     {{-- <p id="testp">asdfhlasasdfasdfa</p> --}}
     <span class="navbar-text" id="testp"></span>

     <li class="nav-item">
       <a class="nav-link" href="{{url('skywatcher')}}">Skywatcher</a>
     </li>
   </ul>

  </div>
</nav>
