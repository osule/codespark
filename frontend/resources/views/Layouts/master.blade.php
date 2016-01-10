<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    @yield('content')

</body>
</html>
