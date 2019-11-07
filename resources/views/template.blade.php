<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <!-- <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/blog-home.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @include('part.nav')

  <!-- Page Content -->
  @yield('index')
  <!-- /.container -->

  <!-- Footer -->
  @include('part.footer')

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 -->
 <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>

</html>

