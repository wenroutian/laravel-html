<html>
<head>
    <title>应用程序名称 - @yield('title')</title>
    <style type="text/css">
        body {
            margin:0px;
            padding:0px;
            font-size: 100%;
        }
        .sidebar{
            width: 8%;
            height: 100%;
        }
        .topbar{
           height: 5%;
        }
        .topbarul{
           padding: 0px;
            margin: 0px;
            display: inline;
        }
        .sidebarul{
            padding: 0px;
            margin: 0px;
        }
        .side{
            display: inline;
        }
        a:link {
            text-decoration: none;
        }
    </style>
</head>
<body>

@section('topbar')
    <div style="background: darkgrey" class="topbar">
        <ul class="topbarul">
            <li class="side"><a href="#">我的导航</a></li>
            <li class="side"><a href="#">我的导航</a></li>
            <li class="side"><a href="#">我的导航</a></li>
            <li class="side"><a href="#">我的导航</a></li>
            <li class="side"><a href="#">我的导航</a></li>
            <li class="side"><a href="#">我的导航</a></li>
        </ul>
    </div>
@show
@section('sidebar')
    <div style="background: beige" class="sidebar">
      <ul class="sidebarul">
          <li><a href="#">我的导航</a></li>
          <li><a href="#">我的导航</a></li>
          <li><a href="#">我的导航</a></li>
          <li><a href="#">我的导航</a></li>
          <li><a href="#">我的导航</a></li>
          <li><a href="#">我的导航</a></li>
      </ul>
    </div>
@show


<div class="container" style="background: red">
    @yield('content')
</div>
</body>
</html>