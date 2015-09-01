<html lang="eng">
<head>
    <title>Citygate Polytechnics and University</title>
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="../image/LOGO.JPG" />
    <link rel="stylesheet" href="/slid/poke.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="/css/messi.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="/css/simple_menu.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="/css/carousel.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" />
    <!--<link rel="stylesheet" href="/css/examples.css" type="text/css" />-->


    <script type="text/javascript" src="/slid/jquery-1.7.2.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.js"></script>
    <script type="text/javascript" src="/slid/slide_setup.js"></script>
    <script src="/slid/validate.js"></script>
    <script src="/slid/messi.js"></script>
    <script src="/js/carousel.js"></script>
    <script src="/js/boostrap.mini.js"></script>
    <script src="/js/jquery.slides.min.js"></script>
    <script>
        $(function() {
            $('#slides').slidesjs({
                width: 940,
                height: 528,
                play: {
                    active: true,
                    auto: true,
                    interval: 4000,
                    swap: true
                }
            });
        });
    </script>


</head>
<body id="body">

        @yield('contents');
</body>
</html>