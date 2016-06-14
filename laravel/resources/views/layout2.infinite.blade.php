<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="/css/vendor/bootstrap/css/bootstrap.min.css">
    <style>
        .container{
            margin-top:80px;
        }
    </style>
</head>
<body>
  <div class="container">
      @yield('content')
  </div>
  <script src="/js/vendor/jquery.min.js"></script>
  <script src="/js/vendor/angular.min.1.2.js"></script>
  <script src="/js/vendor/ng-infinite-scroll.min.js"></script>
  @stack('scripts')
</body>
</html>