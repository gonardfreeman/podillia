<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("/css/vendor/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("/css/app.css")}}">
</head>
<body>
    @include ('layouts.includes.header')
    <div class="wrapper">
        @yield ('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script async src="{{asset("/js/index.js")}}"></script>
    <script async src="{{asset("/js/vendor/bootstrap.min.js")}}"></script>
    <script async src="{{asset("/js/vendor/ie10-viewport-bug-workaround.js")}}"></script>
</body>
</html>