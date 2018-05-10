<!DOCTYPE html>
<html dir="ltr" lang="vi">
<head>
<meta name="description" content="Công ty cổ phần Bạch Minh - Vega Corporation" />
<meta name="keywords" content="vega, bạch minh, bach minh, clip.vn, chacha.vn, ringring.vn, imuzik, alome, anybook, vclip, mobiclip, ilive" />
<meta property="og:title" content="Vega Corporation" />
<meta property="og:description" content="Công ty cổ phần Bạch Minh - Vega Corporation" />
<title>@yield('title')</title>
<base href="{{asset('')}}">
        <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content='Vega Corporation' name='copyright'/>
        <meta content='Vega Corporation' name='author'/>
        <meta content='index,follow' name='robots'/>
        <meta content='VI' name='language'/>
        <link href="asset/css/bootstrap.min.css?v=0.002" rel="stylesheet">
        <link href="asset/css/ekko-lightbox.min.css?v=0.002" rel="stylesheet">
        <link href="asset/css/style.css?v=0.002" rel="stylesheet">
        <link href="asset/css/slick.css?v=0.002" rel="stylesheet">
        <script src="asset/js/html5shiv.min.js"></script>
        <script src="asset/js/respond.min.js"></script>
    </head>
    <body>
@include('fontend.layout.menu')
     
    @yield('content')
    
@include('fontend.layout.footer')


            <script src="asset/js/jquery-1.11.3.min.js"></script>
            <script src="asset/js/bootstrap.min.js"></script>
                <script src="asset/js/slick.min.js"></script>
            <script src="asset/js/canvas-drawing.js"></script>
            <script src="asset/js/common.js"></script>
        <script src="asset/js/ekko-lightbox.min.js"></script>
    <script type="text/javascript">
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>

    @yield('script')
    </body>
</html>