<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="token" id="token" value="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
  <script src="/js/vendor/vue.min.js"></script>
  @stack('scripts')
</body>
</html>