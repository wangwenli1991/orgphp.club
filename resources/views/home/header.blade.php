<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></head><body><nav class="navbar navbar-default" role="navigation">

    <title>Document</title>
</head>
<body>

<div class="navbar-header">
    <a class="navbar-brand" href="#">W3Cschool</a>
</div>
<div>
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">提交按钮</button>
    </form>
    <button type="button" class="btn btn-default navbar-btn">
        导航栏按钮      </button>
</div></nav>



@yield('content')
</body>
</html>