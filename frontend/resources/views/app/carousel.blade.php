
<div class="col-xs-12">
  <div class="row">
    <div class="col-sm-offset-2 col-sm-8 carousel-custom">
      <div id="homeSlick">
        <div><img class="img img-responsive" src="{{ $app['url']->asset('img/850x450.png') }}"></div>
        <div><img class="img img-responsive" src="{{ $app['url']->asset('img/850x450.png') }}"></div>
        <div><img class="img img-responsive" src="{{ $app['url']->asset('img/850x450.png') }}"></div>
        <div><img class="img img-responsive" src="{{ $app['url']->asset('img/850x450.png') }}"></div>
        <div><img class="img img-responsive" src="{{ $app['url']->asset('img/850x450.png') }}"></div>
        <div><img class="img img-responsive" src="{{ $app['url']->asset('img/850x450.png') }}"></div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-4 home-point">
      <img class="img img-responsive" src="{{ $app['url']->asset('img/350x150.png') }}"/>
    </div>

    <div class="col-xs-12 col-sm-4 home-point">
      <img class="img img-responsive" src="{{ $app['url']->asset('img/350x150.png') }}"/>
    </div>

    <div class="col-xs-12 col-sm-4 home-point">
      <img class="img img-responsive" src="{{ $app['url']->asset('img/350x150.png') }}"/>
    </div>
  </div>

</div>

@section('custom_js')

<script type="text/javascript" src="{{ $app['url']->asset('bower_components/slick-carousel/slick/slick.min.js') }}"></script>

@stop
