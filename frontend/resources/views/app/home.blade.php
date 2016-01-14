@extends('Layouts.master')

@section('custom_css')
  <link rel="stylesheet" type="text/css"
  href="{{ $app['url']->asset('bower_components/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" type="text/css"
  href="{{ $app['url']->asset('bower_components/slick-carousel/slick/slick-theme.css') }}">
@stop

@section('content')

<!--Home page content goes here-->

<div class="row">
  @include('app.carousel')
</div>
@include('app.briefs')

@stop
