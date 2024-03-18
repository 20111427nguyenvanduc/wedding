<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>@yield('title','Ngọc Hiếu & Phùng Phương')</title>
    <meta name="description"
          content="@yield('description', 'Ngọc Hiếu & Phùng Phương - Our wedding date: 2024-03-28 | Điều tuyệt vời nhất mà bạn từng học là yêu và được yêu để đáp lại')">
    <meta name="keywords"
          content="Wedding, Wedding website, Website đám cưới">
    <meta property="og:site_name" content="Ngọc Hiếu & Phùng Phương">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title','Ngọc Hiếu & Phùng Phương')">
    <meta property="og:description"
          content="@yield('description', 'Ngọc Hiếu & Phùng Phương - Our wedding date: 2024-03-28 | Điều tuyệt vời nhất mà bạn từng học là yêu và được yêu để đáp lại')">
    <meta property="og:image"
          content="@yield('image','/thiepcuoi1.png')">
    <meta property="og:url" content={{URL::current()}}>
    <!-- Fav and touch icons -->
    <link rel="icon" type="image/png" sizes="32x32"
          href="/thiepcuoi1.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="manifest"
          href="/template/images/fav_touch_icons/manifest.json">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Marmelad&amp;family=Oooh+Baby&amp;family=Bellota+Text&amp;display=swap"
        rel="stylesheet">

    <link href="/template/css/bootstrap.min.css?v=202311195"
          rel="stylesheet"/>
    <link href="/template/css/libs.css?v=202311195" rel="stylesheet">
    <link href="/template/css/fontawesome-all.min.css?v=202311195"
          rel="stylesheet"/>
    <link href="/template/css/neela-icon-set.css?v=202311195"
          rel="stylesheet"/>
    <link href="/template/css/owl.carousel.min.css?v=202311195"
          rel="stylesheet"/>
    <link href="/template/css/style.css?v=202311195"
          rel="stylesheet"/>
    <link href="/common/calendar.css?v=202311195" rel="stylesheet">
    @yield("header")
</head>

<body>

<!-- BEGIN PRELOADER -->
<div id="preloader">
    <div class="loading-heart">
        <svg viewBox="0 0 512 512" width="100">
            <path
                d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"/>
        </svg>
        <div class="preloader-title">
            Hiếu<br>
            <small>&</small>
            <br>
            Phương
        </div>
    </div>
</div>
<!-- END PRELOADER -->


<!-- BEGIN WRAPPER -->
<div id="wrapper">

    <!-- BEGIN HEADER -->
<!-- END HEADER -->
@yield('content')

<!-- BEGIN FOOTER -->
@include("footer.index")
<!-- END FOOTER -->

</div>
<!-- END WRAPPER -->

@yield('script')

@include("footer.script")

</body>

</html>
