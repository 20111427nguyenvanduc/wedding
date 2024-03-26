@extends('layout.index')

@section('content')
    @include('header.index')
    <!-- BEGIN HERO SECTION -->
    <section id="hero" class="bg-slideshow section-divider-bottom-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="hero-wrapper v-center">
                        <h2 data-animation-direction="fade" data-animation-delay="600">Save the Date</h2>

                        <h1 class="hero-title light ">
                            <span class="d-block d-sm-inline" data-animation-direction="from-right"
                                  data-animation-delay="300">Quang Hưng</span>
                            <br>
                            <img height="100" src="https://andu-ducduy.iwedding.info/album/heart.gif">
                            <br>
                            <span class="d-block d-sm-inline" data-animation-direction="from-left"
                                  data-animation-delay="300">Linh Chi</span>
                        </h1>

                        <div class="hero-subtitle light" data-animation-direction="fade"
                             data-animation-delay="1000">31 Tháng 03 2024
                        </div>

                        <div data-animation-direction="fade" data-animation-delay="1000">
                            <a href="#rsvp" class="btn btn-light scrollto">Gửi Lời Chúc</a>
                        </div>
                        <h1 class="hero-title light ">
                            <small class="d-block d-sm-inline" data-animation-direction="from-top"
                                   data-animation-delay="300">Count Down
                            </small>
                            <div class="count-down-clock">
                                <div id="clock" data-date="2024-03-31" data-text-day="Ngày" data-text-hour="Giờ"
                                     data-text-minute="Phút" data-text-second="Giây"></div>
                            </div>
                        </h1>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END HERO SECTION -->

    <!-- BEGIN ABOUT US SECTION -->
    <section id="couple">
        <div class="container">
            <div class="row about-elems-wrapper">
                <div class="element col-md-6 col-xl-4 offset-xl-2" data-animation-direction="from-left"
                     data-animation-delay="300">
                    <div class="image">
                        <img
                            src="/hungchi/3.jpeg"
                            alt="" style="width: 100%"/>
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>Quang Hưng
                                    <small>The Groom</small>
                                </h3>
                                <p>Đẹp trai</p>
                                <ul class="sn-icons">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider-about-us" data-animation-direction="fade" data-animation-delay="500">
                    <i class="icon-two-hearts"></i>
                </div>

                <div class="element col-md-6 col-xl-4" data-animation-direction="from-right"
                     data-animation-delay="400">
                    <div class="image">
                        <img
                            src="/hungchi/7.jpeg"
                            alt="" style="width: 100%"/>
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>Linh Chi
                                    <small>The Bride</small>
                                </h3>
                                <p>Xinh gái</p>
                                <ul class="sn-icons">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="about-us-desc col-lg-8 offset-lg-2" data-animation-direction="from-bottom"
                     data-animation-delay="300">
                    <h3>We are Getting Married</h3>
                    <p>Thật vui vì được gặp và đón tiếp các bạn trong một dịp đặc biệt như đám cưới của chúng tôi. Chúng
                        tôi muốn gửi đến bạn những lời cảm ơn sâu sắc nhất và để bạn biết chúng tôi rất hạnh phúc khi
                        thấy bạn ở đó. Cảm ơn các bạn rất nhiều vì sự hiện diện cùng những lời chúc tốt đẹp mà bạn đã
                        dành cho chúng tôi!</p>
                    <p class="groom-bride-signature"><span>Quang Hưng</span> & <span>Linh Chi</span></p>
                    <!--<img src="./templates/template/images/signature-2.png" alt="Andrew and Isabella"> -->
                    <div class="parent-info-group">
                        <div class="parent-infos">
                            <div class="parent-info"><span class="parent-title">Con ông:</span> <span
                                    class="parent-name">Nguyễn Văn Hiệp</span></div>

                            <div class="parent-info"><span class="parent-title">Con bà:</span> <span
                                    class="parent-name">Nguyễn Thị Hằng</span></div>
                        </div>

                        <div class="parent-infos">
                            <div class="parent-info"><span class="parent-title">Con bà:</span> <span
                                    class="parent-name">Vũ Thị Định</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT US SECTION -->

    <!-- BEGIN OUR STORY TITLE SECTION -->
    {{--<section id="our-story-title"--}}
             {{--class="parallax-background bg-color-overlay section-divider-bottom-2 padding-divider-top"--}}

             {{--style="background-image: url(/hungchi/1.jpeg);background-position: center center;">--}}
        {{--<div class="section-divider-top-1 off-section"></div>--}}
        {{--<!-- The class "section-divider-top-1" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-12">--}}
                    {{--<h1 class="section-title light">Chuyện Tình Yêu</h1>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- END OUR STORY TITLE SECTION -->

    <!-- BEGIN TIMELINE SECTION -->
    {{--<section id="story">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">--}}
                    {{--<div class="timeline">--}}
                        {{--<div class="year" data-animation-direction="from-top" data-animation-delay="250">--}}
                            {{--<span class="neela-style">06/2014</span>--}}
                        {{--</div>--}}
                        {{--<div class="gallery-container">--}}
                            {{--<div class="timeline-gallery-wrapper" data-animation-direction="from-left"--}}
                                 {{--data-animation-delay="250">--}}
                                {{--<div class="timeline-gallery-del">--}}
                                    {{--<div class="item text-center">--}}
                                        {{--<!--<a class="hover-img" href="./templates/template/images/timeline-slider-img1.jpg" data-lightbox="gallery-timeline" title="Our Vacations"><span class="btn btn-light btn-sm">+</span></a>-->--}}
                                        {{--<img--}}
                                            {{--src="/hungchi/anh3.jpg"--}}
                                            {{--alt="" class="w-100 h-auto"--}}
                                            {{--style="max-width:500px;"/>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="description-wrapper" data-animation-direction="from-bottom"--}}
                                 {{--data-animation-delay="250">--}}
                                {{--<div class="description">--}}
                                    {{--<div class="neela-style">--}}
                                        {{--<h4>Em có tin tình yêu từ cái nhìn đầu tiên không?</h4>--}}
                                        {{--<p>Anh đã từng không tin vào "tình yêu sét đánh". Làm sao có thể thích một người--}}
                                            {{--không quen biết ngay từ ánh nhìn đầu tiên? Cho đến khi gặp em tại trường--}}
                                            {{--THPT chuyên Bắc Ninh, vẻ đẹp tươi sáng trong đôi mắt đã khiến tim anh rung--}}
                                            {{--động. Mọi thứ xung quanh dường như chậm lại, chỉ để anh có thể ngắm nhìn đôi--}}
                                            {{--mắt ấy và cảm nhận sự đặc biệt ngay từ cái nhìn đầu tiên.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="year" data-animation-direction="from-top" data-animation-delay="250">--}}
                            {{--<span class="neela-style">06/2016</span>--}}
                        {{--</div>--}}
                        {{--<div class="gallery-container">--}}
                            {{--<div class="timeline-gallery-wrapper" data-animation-direction="from-left"--}}
                                 {{--data-animation-delay="250">--}}
                                {{--<div class="timeline-gallery-del">--}}
                                    {{--<div class="item text-center">--}}
                                        {{--<!--<a class="hover-img" href="./templates/template/images/timeline-slider-img1.jpg" data-lightbox="gallery-timeline" title="Our Vacations"><span class="btn btn-light btn-sm">+</span></a>-->--}}
                                        {{--<img--}}
                                            {{--src="/hungchi/anh1.jpg"--}}
                                            {{--alt="" class="w-100 h-auto"--}}
                                            {{--style="max-width:500px;"/>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="description-wrapper" data-animation-direction="from-bottom"--}}
                                 {{--data-animation-delay="250">--}}
                                {{--<div class="description">--}}
                                    {{--<div class="neela-style">--}}
                                        {{--<h4>Làm người yêu anh nhé!</h4>--}}
                                        {{--<p>Bằng một cách vô tư và nhẹ nhàng nhất, chúng ta bước vào cuộc đời nhau, cùng--}}
                                            {{--nhau trải qua khoảng thời gian đẹp nhất của tuổi học trò. Anh nghĩ rằng câu--}}
                                            {{--chuyện của chúng ta sẽ trở nên đặc biệt hơn, không chỉ là bạn bè, mà là--}}
                                            {{--người yêu của nhau. Đồng ý làm người yêu anh nhé!?--}}
                                            {{--<br/>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="year" data-animation-direction="from-top" data-animation-delay="250">--}}
                            {{--<span class="neela-style">10/2023</span>--}}
                        {{--</div>--}}
                        {{--<div class="gallery-container">--}}
                            {{--<div class="timeline-gallery-wrapper" data-animation-direction="from-left"--}}
                                 {{--data-animation-delay="250">--}}
                                {{--<div class="timeline-gallery-del">--}}
                                    {{--<div class="item text-center">--}}
                                        {{--<!--<a class="hover-img" href="./templates/template/images/timeline-slider-img1.jpg" data-lightbox="gallery-timeline" title="Our Vacations"><span class="btn btn-light btn-sm">+</span></a>-->--}}
                                        {{--<img--}}
                                            {{--src="/hungchi/anh2.jpg"--}}
                                            {{--alt="" class="w-100 h-auto"--}}
                                            {{--style="max-width:500px;"/>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="description-wrapper" data-animation-direction="from-bottom"--}}
                                 {{--data-animation-delay="250">--}}
                                {{--<div class="description">--}}
                                    {{--<div class="neela-style">--}}
                                        {{--<h4>Em sẽ mãi đi cùng anh được chứ?</h4>--}}
                                        {{--<p>7 năm bên nhau không phải là quãng thời gian quá dài, nhưng đủ cho chúng ta--}}
                                            {{--nhận ra được mình cần có nhau. Anh muốn bắt đầu một hành trình mới của chúng--}}
                                            {{--ta, được làm người đồng hành trọn đời của em, từ nay về sau đi đâu cũng--}}
                                            {{--được, miễn là đi cùng nhau.--}}
                                            {{--<br/>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="timeline_footer">--}}
                        {{--<div data-animation-direction="from-top" data-animation-delay="250"><i--}}
                                {{--class="icon-diamond-ring"></i></div>--}}
                        {{--<div class="punchline" data-animation-direction="from-bottom" data-animation-delay="250">--}}
                            {{--<small>This is where our FOREVER BEGINS!</small>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- END TIMELINE SECTION -->

    <!-- BEGIN THE WEDDING SECTION -->
    <section id="invitation" class="parallax-background bg-color-overlay padding-divider-top section-divider-bottom-1"
             style="background-image: url(/hungchi/10.jpeg);background-position: center center;">
        <div class="section-divider-top-1 off-section"></div>
        <!-- The class "section-divider-top-1" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title light">The Big Day!</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 center">
                    <div class="invite neela-style" data-animation-direction="from-left" data-animation-delay="100">
                        <div class="invite_title">
                            <div class="text">
                                Save
                                <small>the</small>
                                Date
                            </div>
                        </div>

                        <div class="invite_info px-2 px-lg-4">
                            <h2 class="fs-1">Quang Hưng <br>
                                <img height="50" src="https://andu-ducduy.iwedding.info/album/heart.gif">
                                <br>
                                Linh Chi
                            </h2>

                            <div>Một lời chúc của bạn chắc chắn sẽ làm cho đám cưới của chúng tôi có thêm một niềm hạnh
                                phúc!
                            </div>
                            <div class="center m-0 mt-2">
                                <a href="#rsvp" class="btn btn-primary reverse scrollto text-white px-2"
                                   style="min-width:240px;max-width:240px;">Gửi lời chúc</a>
                            </div>

                            <div class="date">31 Tháng 3 2024</div>
                            <div class="count-down-clock">
                                <div id="clock" data-date="2024-03-31" data-text-day="Ngày" data-text-hour="Giờ"
                                     data-text-minute="Phút" data-text-second="Giây"></div>
                            </div>
                            <!-- <div class="uppercase">At Birchwood Church<br>4181 Birchwood Ave Seal Beach, CA</div>
                            <h5>Reception to follow</h5> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END THE WEDDING SECTION -->

    <!-- BEGIN GALLERY SECTION -->
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title" style="margin-bottom: 30px">Album Hình Cưới</h1>
                    <div class="center m-0 mb-5"><a href="/photo-album" target="_blank" class="btn btn-primary px-2"
                                                    style="min-width:240px;max-width:240px;">Xem album</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="gallery-container gallery-fancybox masonry-gallery">
                        <div class="grid grid-item">
                            <a href="/hungchi/1.jpeg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img
                                    src="/hungchi/1.jpeg"
                                    alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="/hungchi/2.jpeg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img
                                    src="/hungchi/2.jpeg"
                                    alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="/hungchi/3.jpeg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img
                                    src="/hungchi/3.jpeg"
                                    alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="/hungchi/4.jpeg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img
                                    src="/hungchi/4.jpeg"
                                    alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="/hungchi/5.jpeg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img
                                    src="/hungchi/5.jpeg"
                                    alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="/hungchi/6.jpeg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img
                                    src="/hungchi/6.jpeg"
                                    alt class="img img-responsive">
                            </a>
                        </div>
                        @for($i = 1; $i < 14 ;$i++)
                            <div class="grid grid-item" style="display: none">
                                <a href="/hungchi/{{$i}}.jpeg"
                                   class="fancybox" data-fancybox-group="gall-1">
                                    <img
                                        src="/hungchi/{{$i}}.jpeg"
                                        alt class="img img-responsive">
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END GALLERY SECTION -->

    {{--<section id="invitation" class="parallax-background bg-color-overlay padding-divider-top"--}}
    {{--style="background-image: url(https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/templates/644000ba4f8e0c7ddf09c709/8d48609ea73a7ec0e74392df8deeddcb.jpeg);">--}}
    {{--<div class="section-divider-top-1 off-section"></div>--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-12">--}}
    {{--<h1 class="section-title light">Xem video cưới của chúng tôi!</h1>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="invite neela-style" data-animation-direction="from-left" data-animation-delay="100">--}}
    {{--<div class="ratio ratio-16x9">--}}
    {{--<!--<iframe class="border border-5 border-white w-100 h-100" style="border-width: 10px!important;"-->--}}
    {{--<!--src="https://www.youtube.com/embed/XT6Cyc3WJQ0?si=80fwRgY6rqm7kOPq"-->--}}
    {{--<!--allowfullscreen></iframe>-->--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}

    <!-- BEGIN WEDDING GIFTS SECTION -->
    <div id="events"></div>
    <section id="giftregistry" class="parallax-background section-bg-color"
             style="padding:135px 0; background-image: url(/hungchi/12.jpeg);background-position: center center;">
        <div class="section-divider-top-4 off-section"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-6 events-boxs py-5">
                    <h2 class="section-title-lg desc text-white">Sự Kiện Cưới</h2>
                    <div class="section-desc mb-5 px-5 text-center">Tình yêu đích thực đứng về phía nhau trong những
                        ngày tốt đẹp và sát cánh hơn trong những ngày tồi tệ.
                    </div>

                    <ul class="wedding-gifts">

                        <li data-animation-direction="from-bottom" data-animation-delay="300">
                            <div class="neela-style">
                                <div class="d-flex align-items-center event-item-content">
                                    <img
                                        src="/hungchi/3.jpeg"
                                        alt="LỄ CƯỚI NHÀ NAM" width="100" height="100"
                                        class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0"/>
                                    <div class="d-inline-block">
                                        <h3 class="w-100">LỄ THÀNH HÔN TẠI NHÀ TRAI</h3>
                                        <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i>
                                            <strong>15:30 31/03/2024</strong></p>
                                        <p class="w-100 mb-0 mt-1"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <strong>Nhà Văn Hóa Khu Quế Sơn, Phường Khắc Niệm, TP Bắc Ninh, Bắc Ninh</strong></p>
                                    </div>
                                </div>

                                <div class="info">
                                    <div class="calendar-button" style="visibility: hidden;height: 0;overflow: hidden;">
                                        <div class="atcb" style="display:none;">
                                            {
                                            "name":"LỄ VU QUY TẠI NHÀ TRAI (Đám cưới Quang Hưng và Linh Chi)",
                                            "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!.
                                            Thông tin chi tiết xem tại website:<br>[url]./[/url]",
                                            "startDate":"2024-03-31",
                                            "endDate":"2024-03-31",
                                            "startTime":"15:30",
                                            "endTime":"16:00",
                                            "location":"Khu Quế Sơn, Phường Khắc Niệm, TP Bắc Ninh, Bắc Ninh",
                                            "options":["Apple","Google","iCal","Microsoft365","MicrosoftTeams","Outlook.com","Yahoo"],
                                            "timeZone":"Asia/Ho_Chi_Minh",
                                            "iCalFileName":"Reminder-Event",
                                            "listStyle":"modal",
                                            "label":"Thêm vào lịch",
                                            "trigger":"click"
                                            }
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" id="otheramount"
                                       class="btn btn-primary reverse calendar-button-custom-click">Thêm vào lịch</a>
                                    <a href="https://www.google.com/maps/@21.1303458,106.057918,20.24z?hl=vi-VN&entry=ttu"
                                       target="_blank" id="otheramount"
                                       class="btn btn-primary reverse">Xem bản đồ <i class="fa fa-angle-right me-0"></i></a>
                                </div>
                            </div>
                        </li>


                        <li data-animation-direction="from-bottom" data-animation-delay="300">
                            <div class="neela-style">
                                <div class="d-flex align-items-center event-item-content">
                                    <img
                                        src="/hungchi/8.jpeg"
                                        alt="LỄ CƯỚI NHÀ NAM" width="100" height="100"
                                        class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0"/>
                                    <div class="d-inline-block">
                                        <h3 class="w-100">LỄ VU QUY TẠI NHÀ GÁI</h3>
                                        <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i>
                                            <strong>14:00 31/03/2024</strong></p>
                                        <p class="w-100 mb-0 mt-1"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <strong>Khu 1 Hoàng Quốc Việt, Thị Cầu, Bắc Ninh</strong></p>
                                    </div>
                                </div>

                                <div class="info">
                                    <div class="calendar-button" style="visibility: hidden;height: 0;overflow: hidden;">
                                        <div class="atcb" style="display:none;">
                                            {
                                            "name":"LỄ VU QUY TẠI NHÀ GÁI (Đám cưới Quang Hưng và Linh Chi)",
                                            "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!.
                                            Thông tin chi tiết xem tại website:<br>[url]./[/url]",
                                            "startDate":"2024-03-31",
                                            "endDate":"2024-03-31",
                                            "startTime":"10:00",
                                            "endTime":"16:00",
                                            "location":"Khu 1 Hoàng Quốc Việt, Thị Cầu, Bắc Ninh",
                                            "options":["Apple","Google","iCal","Microsoft365","MicrosoftTeams","Outlook.com","Yahoo"],
                                            "timeZone":"Asia/Ho_Chi_Minh",
                                            "iCalFileName":"Reminder-Event",
                                            "listStyle":"modal",
                                            "label":"Thêm vào lịch",
                                            "trigger":"click"
                                            }
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" id="otheramount"
                                       class="btn btn-primary reverse calendar-button-custom-click">Thêm vào lịch</a>
                                    <a href="https://www.google.com/maps/@21.1303458,106.057918,20.24z?hl=vi-VN&entry=ttu"
                                       target="_blank" id="otheramount"
                                       class="btn btn-primary reverse">Xem bản đồ <i class="fa fa-angle-right me-0"></i></a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END WEDDING GIFTS SECTION -->


    <!-- BEGIN CONTACTS SECTION -->
    <section id="rsvp" class="section-bg-color extra-padding-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3">
                    <div class="form-wrapper flowers neela-style">
                        <h1 class="section-title">Sổ Lưu Bút</h1>
                        <form id="wish-form" class="form validate-rsvp-form row" method="post">
                            <div>
                                <input type="text" name="name" placeholder="Tên của bạn*" class="form-control">
                            </div>

                            <div>
                                <input type="text" name="email" placeholder="Số điện thoại" class="form-control">
                            </div>
                            <div>
                                <textarea rows='3' class="form-control" name="content"
                                          placeholder="Nhập lời chúc của bạn*"></textarea>
                            </div>

                            <div class="center">
                                <button type="submit" class="btn btn-primary submit_form">Gửi lời chúc</button>
                            </div>
                        </form>
                        <div class="wish-box">
                            @foreach($wishs as $item)
                                <div class="wish-box-item ">
                                    <strong>{{$item->name}}</strong>
                                    <p>{{$item->body}}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACTS SECTION -->

    <section id="donate">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">Hộp mừng cưới</h2>
                </div>
            </div>
        </div>

        <div class="container donate-box">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4 donate-card">
                    <div class="map-info-container">
                        <div class="info-wrapper animate-from-bottom animation-from-bottom mt-0"
                             data-animation-direction="from-bottom" data-animation-delay="100">
                            <div class="location-info">
                                <div class="neela-style"><span class="h-lines"></span><span class="v-lines"></span>
                                    <h4 class="fs-5">Mừng cưới đến chú rể</h4>
                                    <img class="m-auto mb-2" style="max-height: 400px"
                                         src="/hungchi/QRchure.jpeg">
                                    <p>Ngân hàng: <strong>VIETCOMBANK</strong></p>
                                    <p>Tên tài khoản: <strong>Nguyễn Quang Hưng</strong></p>
                                    <p>Số tài khoản: <strong>1037072995</strong></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 donate-card">
                    <div class="map-info-container">
                        <div class="info-wrapper animate-from-bottom animation-from-bottom mt-0"
                             data-animation-direction="from-bottom" data-animation-delay="100">
                            <div class="location-info">
                                <div class="neela-style"><span class="h-lines"></span><span class="v-lines"></span>
                                    <h4 class="fs-5">Mừng cưới đến cô dâu</h4>
                                    <img class=" m-auto mb-2" style="max-height: 400px"
                                         src="/hungchi/QRcodau.jpeg">
                                    <p>Ngân hàng: <strong>TECKCOMBANK</strong></p>
                                    <p>Tên tài khoản: <strong>Nguyễn Linh Chi</strong></p>
                                    <p>Số tài khoản: <strong>1312240827</strong></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
