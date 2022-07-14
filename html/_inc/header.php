<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWJ Portfolio <?php if($arrRoute[1]){echo "> ".$arrRoute[1];}?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="KWJ Portfolio" />
    <meta property="og:image" content="http://kwjportfolio.com/_img/logo.png" />
    <meta property="og:url" content="http://kwjportfolio.com.org/" />
    <meta name="google" content="notranslate"> 

    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="/_js/cursor.js"></script>
    <script src="/_js/script.js"></script>
    <script src="/_js/easescroll.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.12.2/paper-full.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/simplex-noise/2.4.0/simplex-noise.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/_css/reset.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <!-- 스크린 사이즈별 미디어 쿼리 분리 -->
    <style>
    @import url('/_css/header_mobile.css') screen and (max-width:767px);
    @import url('/_css/header_pad.css') screen and (min-width:768px) and (max-width:1299px);
    @import url('/_css/header_pc.css') screen and (min-width:1300px);

    @import url('/_css/main_mobile.css') screen and (max-width:767px);
    @import url('/_css/main_pad.css') screen and (min-width:768px) and (max-width:1299px);
    @import url('/_css/main_pc.css') screen and (min-width:1300px);

    @import url('/_css/footer_mobile.css') screen and (max-width:767px);
    @import url('/_css/footer_pad.css') screen and (min-width:768px) and (max-width:1299px);
    @import url('/_css/footer_pc.css') screen and (min-width:1300px);

    @import url('/_css/about_mobile.css') screen and (max-width:767px);
    @import url('/_css/about_pad.css') screen and (min-width:768px) and (max-width:1299px);
    @import url('/_css/about_pc.css') screen and (min-width:1300px);

    @import url('/_css/work_mobile.css') screen and (max-width:767px);
    @import url('/_css/work_pad.css') screen and (min-width:768px) and (max-width:1299px);
    @import url('/_css/work_pc.css') screen and (min-width:1300px);
    </style>
</head>
<body>
    <script>
    $("html").easeScroll({
        frameRate: 60,
        animationTime: 1000,
        stepSize: 120,
        pulseAlgorithm: !0,
        pulseScale: 8,
        pulseNormalize: 1,
        accelerationDelta: 20,
        accelerationMax: 1,
    });
    </script>
    <div class="cursor cursor--small"></div>
    <canvas class="cursor cursor--canvas" resize></canvas>
    <?php include($_SERVER['DOCUMENT_ROOT']."/_inc/menu.php")?>


