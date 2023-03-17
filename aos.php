<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>jQuery picZoomer Plugin Demo</title>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="zoom/css/reset.css">
    <link rel="stylesheet" type="text/css" href="zoom/css/jquery-picZoomer.css">
    <style type="text/css">
        html {
            background-color: #D3CEC0;
        }

        body {
            margin: 0 auto;
        }

        .piclist {
            margin-top: 30px;
        }

        .piclist li {
            display: inline-block;
            width: 50px;
            height: 50px;
        }

        .piclist li img {
            width: 100%;
            height: auto;
        }

        /* custom style */
        .picZoomer-pic-wp,
        .picZoomer-zoom-wp {
            border: 1px solid #fff;
        }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="zoom/src/jquery.picZoomer.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.picZoomer').picZoomer();


            //切换图片
            $('.piclist li').on('click', function (event) {
                var $pic = $(this).find('img');
                $('.picZoomer-pic').attr('src', $pic.attr('src'));
            });
        });
    </script>
</head>

<body>
    <h1 style="margin-top:150px;">jQuery picZoomer Plugin Demo</h1>
    <div class="picZoomer">
        <img src="images/0.jpg" height="320" width="320" alt="">
    </div>

    <ul class="piclist">
        <li><img src="zoom/images/0.jpg" alt=""></li>
        <li><img src="zoom/images/1.jpg" alt=""></li>
        <li><img src="zoom/images/2.jpg" alt=""></li>
        <li><img src="zoom/images/3.jpg" alt=""></li>
        <li><img src="zoom/images/4.jpg" alt=""></li>
        <li><img src="zoom/images/5.jpg" alt=""></li>
        <li><img src="zoom/images/6.jpg" alt=""></li>
        <li><img src="zoom/images/7.jpg" alt=""></li>
        <li><img src="zoom/images/8.jpg" alt=""></li>
    </ul>
</body>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

</html>