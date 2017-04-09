<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
  <!-- mystyle -->
  <link rel="stylesheet" href="{{ URL::asset('css/nekastyle.css') }}" />
  <!-- font-awesome -->
  <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" />
  <!-- css coba -->
    <!-- App CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <script src="assets/js/modernizr.min.js"></script>

	@section('css')
    @show

@section('header')
    @include('layouts.header')
@show

  <div class="container">
  	@yield('content')
  </div>

<!-- </body> -->
@section('footer')
  @include('layouts.footer')
@show


</html>
