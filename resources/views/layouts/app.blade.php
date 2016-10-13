@yield('header')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
<meta name="keywords" content="株式会社ジェイセカンド" />
<meta name="description" content="北海道札幌・帯広で財務を中心とした経営支援事業とＦＣ契約で札幌でたいやき工房事業を展開して愛情一杯に働いています。" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">


<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">
    window.onload=function slider(){
    setTimeout("slider()", 5000);
    }

    var dem=1;
    var sosanh=3;
    function slider(){
        dem++;
        document.images['anh'].src='/images/'+dem+'.jpg';
        if (dem < sosanh) {
            setTimeout("slider()", 5000);
        }
        if (dem >= sosanh) {
            dem=0;  
            setTimeout("slider()", 5000);
        }
    }

</script>

</head>
<body>
<header class="header">
<nav class=" container navbar navbar-default " role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

</div>

<div class="collapse navbar-collapse navbar-ex1-collapse">
<ul class="nav navbar-nav">
<li><a style="color:#e74c3c !important;" href="/">ホーム</a></li>
<li><a href="#">ニュース</a></li>
<li><a href="#">ギャラリー</a></li>
<li><a href="#">サービス一覧</a></li>
<li><a href="#">企業情報</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">お問い合わせ・見積<b class="caret"></b></a>
<ul class="dropdown-menu">

@if (Auth::guest())
<li><a href ="{{ url('/login') }}">LOGIN</a></li>

@else   
<li><a href ="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>LOGOUT</a></li>

<li><a href="{{url('/admin')}}">ADMINCP</a></li>
@endif
</ul>
</li>

<li>
<form class="navbar-form navbar-left" role="search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search">
</div>
<button type="submit" class="btn btn-default">Search</button>
</form>
</li>

</ul>
</div><!-- /.navbar-collapse -->
</div>
</nav>
<div class="container sideshow">
    <img src="{{ asset('images/1.jpg')}}" alt="" width="100%" height="350px" class="anhanh" name="anh">
    
</div>
</header>

@yield('content')
@yield('footer')
    <script type="text/javascript">
    
    $(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});
</script>
<style type="text/css">
    .scrollup {
    width: 50px;
    height: 50px;
    position: fixed;
    bottom: 50px;
    right: 14px;
    display: none;
    text-indent: -9999px;
    background: url('/images/icontop.png') no-repeat;
    
    color:red;
}
</style>
@yield('footer')
 <a href="#" class="scrollup">Scroll</a>
    <div class="row">

        <div class="footer col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <dd>北海道札幌・帯広で財務を中心とした経営支援事業なら株式会社ジェイセカンドへ <br>
            株式会社ジェイセカンド <br>
            【本社】北海道帯広市西4条南15丁目9番地　共栄ビル1Ｆ <br>
            TEL:0155-24-7737 FAX:0155-28-4480 <br>
            Copyright (C) 2016 株式会社ジェイセカンド, All Rights Reserved.Produced by J-second</dd>
        </div>
    </div>
