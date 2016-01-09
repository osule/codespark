<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CodeSpark NG - Home</title>
<!--Stylesheets start here-->
  <link rel="stylesheet" type="text/css"
    href="{{ $app['url']->asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css"
    href="{{ $app['url']->asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
<!--Stylesheets end here-->
</head>
<body>
<!--Master Template Goes here-->
  <div class="container">
    <div class="row">
      @include('Layouts.navigation')
    </div>
    <div class="row">
      @yield('content')
    </div>

  </div>


<!--Scripts start here-->
  <script type="text/javascript" src="{{ $app['url']->asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ $app['url']->asset('bower_components/bootstrap/dist/css/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ $app['url']->asset('js/codespark.js') }}"></script>
<!--Scripts end here-->

</body>
</html>
