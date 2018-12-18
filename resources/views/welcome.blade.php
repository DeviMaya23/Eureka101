@extends('layout')

@section('documentReady')
@stop

@section('title')
  <style>
  body, html {
      height: 100%;
      margin: 0;
      background-image: url("/images/pagos2.png");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
  }
  .bg {
      background-image: url("/images/pagos2.png");
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
  }
  .siteintro{
    position: absolute;
    bottom: 0;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.8);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
  }
  .siteintro-eurekatext{
    letter-spacing: 5px;
  }
  </style>
  <title>Eureka 101</title>
@stop

@section('content')
  <div class="siteintro">
    <h1 class="text-left">And we shall call it
      <span class="float-right siteintro-eurekatext"> <b>Eureka</b></span>
    </h1>
  </div>
  {{-- <div class="bg">
  @include('navbar')
    <div class="siteintro">
      <h1 class="text-left">And we shall call it
        <span class="float-right siteintro-eurekatext"> <b>Eureka</b></span>
      </h1>
    </div>
  </div> --}}
@stop
{{-- <html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    body, html {
        height: 100%;
        margin: 0;
    }
    .bg {
        background-image: url("/images/pagos2.png");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
    .siteintro{
      position: absolute;
      bottom: 0;
      background: rgb(0, 0, 0);
      background: rgba(0, 0, 0, 0.8);
      color: #f1f1f1;
      width: 100%;
      padding: 20px;
    }
    .siteintro-eurekatext{
      letter-spacing: 5px;
    }
    </style>
    <title>Eureka 101</title>
</head>
<body>

  <div class="bg">
    @include('navbar')
    <div class="siteintro">
      <h1 class="text-left">And we shall call it
        <span class="float-right siteintro-eurekatext"> <b>Eureka</b></span>
      </h1>
    </div>
  </div>
</body>
</html> --}}

{{--
background-image: url("https://assets.rpgsite.net/images/images/000/064/651/original/final_fantasy_xiv_eureka.jpg");
background-position: center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed; --}}
{{-- https://assets.rpgsite.net/images/images/000/064/651/original/final_fantasy_xiv_eureka.jpg
<div class="bg">
<h1 class="py-5 text-center">And We Shall Call It : <b>Eureka</b></h1>
<p class="py-5 text-center"> eu·​re·​ka | \yu̇-ˈrē-kə\ <br>
  1. (geographical name) a mysterious island that appeared in the Glass Ocean, to the southeast of Kugane.
  2. (geographical name) FFXIV player's very rich salt mine.
</p>
</div> --}}
