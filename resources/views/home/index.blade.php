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
                                  data-animation-delay="300">Xuân Duyệt</span>
                            <br>
                            <img height="100" src="https://andu-ducduy.iwedding.info/album/heart.gif">
                            <br>
                            <span class="d-block d-sm-inline" data-animation-direction="from-left"
                                  data-animation-delay="300">Trịnh Phương</span>
                        </h1>

                        <div class="hero-subtitle light" data-animation-direction="fade"
                             data-animation-delay="1000">02 Tháng 05 2024
                        </div>

                        <div data-animation-direction="fade" data-animation-delay="1000">
                            <a href="#rsvp" class="btn btn-light scrollto">Gửi Lời Chúc</a>
                        </div>
                        <h1 class="hero-title light ">
                            <small class="d-block d-sm-inline" data-animation-direction="from-top"
                                   data-animation-delay="300">Count Down
                            </small>
                            <div class="count-down-clock">
                                <div id="clock" data-date="2024-05-02" data-text-day="Ngày" data-text-hour="Giờ"
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
                            src="/duyetphuong/21.jpg"
                            alt="" style="width: 100%"/>
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>Nguyễn Xuân Duyệt
                                    <small>The Groom</small>
                                </h3>
                                <p>Đẹp trai</p>
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
                            src="/duyetphuong/24.jpg"
                            alt="" style="width: 100%"/>
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>Trịnh Phương
                                    <small>The Bride</small>
                                </h3>
                                <p>Xinh gái</p>

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
                    <p class="groom-bride-signature"><span>Xuân Duyệt</span> & <span>Trịnh Phương</span></p>
                    <!--<img src="./templates/template/images/signature-2.png" alt="Andrew and Isabella"> -->
                    <div class="parent-info-group">
                        <div class="parent-infos">
                            <div class="parent-info"><span class="parent-title">Con ông:</span> <span
                                    class="parent-name">Nguyễn Xuân Bộ</span></div>

                            <div class="parent-info"><span class="parent-title">Con bà:</span> <span
                                    class="parent-name">Nguyễn Thị Giang</span></div>
                        </div>

                        <div class="parent-infos">
                            <div class="parent-info"><span class="parent-title">Con ông:</span> <span
                                    class="parent-name">Trịnh Đăng Bộ</span></div>

                            <div class="parent-info"><span class="parent-title">Con bà:</span> <span
                                    class="parent-name">Nguyễn Thị Hạnh</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT US SECTION -->

    <!-- BEGIN OUR STORY TITLE SECTION -->
    <section id="our-story-title"
             class="parallax-background bg-color-overlay section-divider-bottom-2 padding-divider-top"

             style="background-image: url(/duyetphuong/3.jpg);background-position: center center;">
        <div class="section-divider-top-1 off-section"></div>
        <!-- The class "section-divider-top-1" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title light">Chuyện Tình Yêu</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END OUR STORY TITLE SECTION -->

    <!-- BEGIN TIMELINE SECTION -->
    <section id="story">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <div class="timeline">
                        <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                            <span class="neela-style">09/2023</span>
                        </div>
                        <div class="gallery-container">
                            <div class="timeline-gallery-wrapper" data-animation-direction="from-left"
                                 data-animation-delay="250">
                                <div class="timeline-gallery-del">
                                    <div class="item text-center">
                                        <!--<a class="hover-img" href="./templates/template/images/timeline-slider-img1.jpg" data-lightbox="gallery-timeline" title="Our Vacations"><span class="btn btn-light btn-sm">+</span></a>-->
                                        <img
                                            src="/duyetphuong/chuyen1.jpg"
                                            alt="" class="w-100 h-auto"
                                            style="max-width:500px;"/>
                                    </div>
                                </div>
                            </div>

                            <div class="description-wrapper" data-animation-direction="from-bottom"
                                 data-animation-delay="250">
                                <div class="description">
                                    <div class="neela-style">
                                        <h4>Trên đời này có thực sự tồn tại tình bạn khác giới không nhỉ? </h4>
                                        <p>Anh và em đã từng tự hào mà khoe với mọi người về tình bạn giữa hai chúng ta
                                            . Nhưng rồi chính anh lại tham lam ,muốn biến em thành người bạn đời của
                                            mình.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                            <span class="neela-style">10/2/2024</span>
                        </div>
                        <div class="gallery-container">
                            <div class="timeline-gallery-wrapper" data-animation-direction="from-left"
                                 data-animation-delay="250">
                                <div class="timeline-gallery-del">
                                    <div class="item text-center">
                                        <!--<a class="hover-img" href="./templates/template/images/timeline-slider-img1.jpg" data-lightbox="gallery-timeline" title="Our Vacations"><span class="btn btn-light btn-sm">+</span></a>-->
                                        <img
                                            src="/duyetphuong/chuyen2.jpg"
                                            alt="" class="w-100 h-auto"
                                            style="max-width:500px;"/>
                                    </div>
                                </div>
                            </div>

                            <div class="description-wrapper" data-animation-direction="from-bottom"
                                 data-animation-delay="250">
                                <div class="description">
                                    <div class="neela-style">
                                        <h4>Làm người yêu anh nhé!</h4>
                                        <p>Chúng ta đã đi gần 1 vòng trái đất để mong muốn tìm thấy 1 nửa của mình.
                                            Nhưng cuối cùng mới nhận ra , 1 nửa phù hợp đó đã luôn ở bên mình bấy lâu
                                            nay. Làm người yêu anh nhé!
                                            <br/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                            <span class="neela-style">9/4/2024</span>
                        </div>
                        <div class="gallery-container">
                            <div class="timeline-gallery-wrapper" data-animation-direction="from-left"
                                 data-animation-delay="250">
                                <div class="timeline-gallery-del">
                                    <div class="item text-center">
                                        <!--<a class="hover-img" href="./templates/template/images/timeline-slider-img1.jpg" data-lightbox="gallery-timeline" title="Our Vacations"><span class="btn btn-light btn-sm">+</span></a>-->
                                        <img
                                            src="/duyetphuong/chuyen3.jpg"
                                            alt="" class="w-100 h-auto"
                                            style="max-width:500px;"/>
                                    </div>
                                </div>
                            </div>

                            <div class="description-wrapper" data-animation-direction="from-bottom"
                                 data-animation-delay="250">
                                <div class="description">
                                    <div class="neela-style">
                                        <h4>Chúng ta hãy đi đến cuối con đường em nhé!
                                        </h4>
                                        <p>Hơn 16 năm cho 1 tình bạn. 2 tháng yêu xa là quãng thời gian thử thách cho cả
                                            2 đứa. Khi a đã sẵn sàng và e đủ tin tưởng, sẽ thật tuyệt nếu chúng ta về
                                            chung một nhà. Làm vợ anh nhé!
                                            <br/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline_footer">
                        <div data-animation-direction="from-top" data-animation-delay="250"><i
                                class="icon-diamond-ring"></i></div>
                        <div class="punchline" data-animation-direction="from-bottom" data-animation-delay="250">
                            <small>This is where our FOREVER BEGINS!</small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END TIMELINE SECTION -->

    <!-- BEGIN THE WEDDING SECTION -->
    <section id="invitation" class="parallax-background bg-color-overlay padding-divider-top section-divider-bottom-1"
             style="background-image: url(/duyetphuong/10.jpg);background-position: center center;">
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
                            <h2 class="fs-1">Xuân Duyệt <br>
                                <img height="50" src="https://andu-ducduy.iwedding.info/album/heart.gif">
                                <br>
                                Trịnh Phương
                            </h2>

                            <div>Một lời chúc của bạn chắc chắn sẽ làm cho đám cưới của chúng tôi có thêm một niềm hạnh
                                phúc!
                            </div>
                            <div class="center m-0 mt-2">
                                <a href="#rsvp" class="btn btn-primary reverse scrollto text-white px-2"
                                   style="min-width:240px;max-width:240px;">Gửi lời chúc</a>
                            </div>

                            <div class="date">02 Tháng 05 2024</div>
                            <div class="count-down-clock">
                                <div id="clock" data-date="2024-05-02" data-text-day="Ngày" data-text-hour="Giờ"
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
                            <a href="/duyetphuong/51.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img
                                    src="/duyetphuong/51.jpg"
                                    alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="/duyetphuong/52.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img
                                    src="/duyetphuong/52.jpg"
                                    alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="/duyetphuong/54.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img
                                    src="/duyetphuong/54.jpg"
                                    alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="/duyetphuong/55.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img
                                    src="/duyetphuong/55.jpg"
                                    alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="/duyetphuong/56.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img
                                    src="/duyetphuong/56.jpg"
                                    alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="/duyetphuong/57.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img
                                    src="/duyetphuong/57.jpg"
                                    alt class="img img-responsive">
                            </a>
                        </div>
                        @for($i = 67; $i < 68 ;$i--)
                            <div class="grid grid-item" style="display: none">
                                <a href="/duyetphuong/{{$i}}.jpg"
                                   class="fancybox" data-fancybox-group="gall-1">
                                    <img
                                        src="/duyetphuong/{{$i}}.jpg"
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
    {{--style="background-image: url(https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/templates/644000ba4f8e0c7ddf09c709/8d48609ea73a7ec0e74392df8deeddcb.jpg);">--}}
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
             style="padding:135px 0; background-image: url(/duyetphuong/12.jpg);background-position: center center;">
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
                                        src="/duyetphuong/12.jpg"
                                        alt="TIỆC CƯỚI NHÀ TRAI" width="100" height="100"
                                        class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0"/>
                                    <div class="d-inline-block">
                                        <h3 class="w-100">LỄ THÀNH HÔN TẠI NHÀ TRAI</h3>
                                        <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i>
                                            <strong>15:00 2024-05-02 Dương lịch</strong></p>
                                        <p class="w-100 mb-0 mt-1"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <strong>Xóm Chùa, thôn Hộ Vệ , xã Lạc vệ , huyện Tiên Du, Bắc Ninh
                                            </strong></p>
                                    </div>
                                </div>

                                <div class="info">
                                    <div class="calendar-button" style="visibility: hidden;height: 0;overflow: hidden;">
                                        <div class="atcb" style="display:none;">
                                            {
                                            "name":"LỄ THÀNH HÔN TẠI NHÀ TRAI (Đám cưới Xuân Duyệt và Trịnh Phương)",
                                            "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!.
                                            Thông tin chi tiết xem tại website:<br>[url]./[/url]",
                                            "startDate":"2024-05-02",
                                            "endDate":"2024-05-02",
                                            "startTime":"15:00",
                                            "endTime":"17:00",
                                            "location":"Xóm Chùa, thôn Hộ Vệ , xã Lạc vệ , huyện Tiên Du, Bắc Ninh",
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
                                    <a href="https://www.google.com/maps/search/?api=1&query=21.1218625,106.0742656"
                                       target="_blank" id="otheramount"
                                       class="btn btn-primary reverse">Xem bản đồ <i class="fa fa-angle-right me-0"></i></a>
                                </div>
                            </div>
                        </li>


                        <li data-animation-direction="from-bottom" data-animation-delay="300">
                            <div class="neela-style">
                                <div class="d-flex align-items-center event-item-content">
                                    <img
                                        src="/duyetphuong/12.jpg"
                                        alt="LỄ CƯỚI NHÀ NAM" width="100" height="100"
                                        class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0"/>
                                    <div class="d-inline-block">
                                        <h3 class="w-100">LỄ VU QUY TẠI NHÀ GÁI</h3>
                                        <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i>
                                            <strong>Tức 13h:00 02/05/2024 Dương lịch</strong></p>
                                        <p class="w-100 mb-0 mt-1"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <strong>Đội 1 ,thôn An Động , xã Lạc vệ , huyện Tiên Du, Bắc Ninh
                                            </strong></p>
                                    </div>
                                </div>

                                <div class="info">
                                    <div class="calendar-button" style="visibility: hidden;height: 0;overflow: hidden;">
                                        <div class="atcb" style="display:none;">
                                            {
                                            "name":"LỄ VU QUY TẠI NHÀ GÁI (Đám cưới Xuân Duyệt và Trịnh Phương)",
                                            "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!.
                                            Thông tin chi tiết xem tại website:<br>[url]./[/url]",
                                            "startDate":"2024-05-02",
                                            "endDate":"2024-05-02",
                                            "startTime":"13:00",
                                            "endTime":"16:00",
                                            "location":"Đội 1 ,thôn An Động , xã Lạc vệ , huyện Tiên Du, Bắc Ninh ",
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
                                    <a href="https://www.google.com/maps/place/21%C2%B006'54.6%22N+106%C2%B006'23.9%22E/@21.1151778,106.1066112,20.99z/data=!4m4!3m3!8m2!3d21.1151625!4d106.1066406?entry=ttu"
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
                                    <img class="m-auto mb-2"
                                         src="/duyetphuong/qrchure.jpg" style="max-height: 550px">
                                    <p>Ngân hàng: <strong>Ngân hàng VietinBank</strong></p>
                                    <p>Tên tài khoản: <strong>Nguyễn Xuân Duyệt</strong></p>
                                    <p>Số tài khoản: <strong>0868089396</strong></p>
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
                                    <img class=" m-auto mb-2"
                                         src="/duyetphuong/qrcodau.jpg" style="max-height: 550px">
                                    <p>Ngân hàng: <strong>Ngân hàng MSB</strong></p>
                                    <p>Tên tài khoản: <strong>Trịnh Thị Phương</strong></p>
                                    <p>Số tài khoản: <strong>19001012494889</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


