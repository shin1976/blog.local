<!DOCTYPE HTML>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>My Blog</title>
    <link rel="stylesheet" href="/css/app.css">

  </head>
  <body>
    @include('navbar')
    <div class="container py-4">
      @include('flash::message')
      <!-- @if(session('message'))
        <div class="alert alert-success">
          {{ session('message')}}
        </div>
        @endif -->
        @yield('content')
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="/js/app.js"></script>
  </body>
</html>
