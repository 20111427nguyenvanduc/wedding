@extends('layout.index')

@section('content')
    <!-- BEGIN HERO SECTION -->
    <section id="hero" class="bg-slideshow section-divider-bottom-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="hero-wrapper v-center">
                        <h2 data-animation-direction="fade" data-animation-delay="600">Save the Date</h2>

                        <h1 class="hero-title light ">
                            <span class="d-block d-sm-inline" data-animation-direction="from-right"
                                  data-animation-delay="300">Thái Sơn</span>
                            <br>
                            <i class="fa fa-heart" style="color: #e67e7e; font-size: 50px; margin-bottom:16px"></i>
                            <br>
                            <span class="d-block d-sm-inline" data-animation-direction="from-left"
                                  data-animation-delay="300">Khánh Huyền</span>
                        </h1>

                        <div class="hero-subtitle light" data-animation-direction="fade"
                             data-animation-delay="1000">14 Tháng 01 2024
                        </div>

                        <div data-animation-direction="fade" data-animation-delay="1000">
                            <a href="#rsvp" class="btn btn-light scrollto">Gửi Lời Chúc</a>
                        </div>
                        <h1 class="hero-title light ">
                            <small class="d-block d-sm-inline" data-animation-direction="from-top"
                                   data-animation-delay="300">Count Down
                            </small>
                            <div class="count-down-clock">
                                <div id="clock" data-date="2024-01-14" data-text-day="Ngày" data-text-hour="Giờ"
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
                        <img src="https://scontent.fhan19-1.fna.fbcdn.net/v/t39.30808-6/311149113_485920020231564_3469123922645748464_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=8LOo3xw6-88AX_QljBc&_nc_ht=scontent.fhan19-1.fna&oh=00_AfAhuVBJr10WsbeJYP4HZtSPlC364QHYKzE7ZuO874qwUw&oe=6572C4A1"
                             alt="" style="height: 550px; width: 100%"/>
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>Ngô Thái Sơn
                                    <small>The Groom</small>
                                </h3>
                                <p>Đẹp trai</p>
                                <ul class="sn-icons">
                                    <li><a href="https://www.facebook.com/sonnt612"><i
                                                class="fab fa-facebook-square"></i></a></li>
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
                        <img src="https://scontent.fhan19-1.fna.fbcdn.net/v/t39.30808-6/278709710_1929532747249122_86234615299042643_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=VkcbFxLMEY4AX85cyIT&_nc_ht=scontent.fhan19-1.fna&oh=00_AfAzJdcV2kMJxRbB3ieIylIgdwo2mIbWYvRkqQENIV_-GA&oe=656DE191"
                             alt="" style="height: 550px; width: 100%"/>
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>Nguyễn Thị Khánh Huyền
                                    <small>The Bride</small>
                                </h3>
                                <p>Xinh gái</p>
                                <ul class="sn-icons">
                                    <li><a href="https://www.facebook.com/profile.php?id=100005772450292"><i
                                                class="fab fa-facebook-square"></i></a></li>
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
                    <p class="groom-bride-signature"><span>Thái Sơn</span> & <span>Khánh Huyền</span></p>
                    <!--<img src="./templates/template/images/signature-2.png" alt="Andrew and Isabella"> -->
                    <div class="parent-info-group">
                        <div class="parent-infos">
                            <div class="parent-info"><span class="parent-title">Con ông:</span> <span
                                    class="parent-name">Ngô Văn Dương</span></div>

                            <div class="parent-info"><span class="parent-title">Con bà:</span> <span
                                    class="parent-name">Lại Thị Hằng</span></div>
                        </div>

                        <div class="parent-infos">
                            <div class="parent-info"><span class="parent-title">Con ông:</span> <span
                                    class="parent-name">Nguyễn Quang Hiệp</span></div>

                            <div class="parent-info"><span class="parent-title">Con bà:</span> <span
                                    class="parent-name">Nguyễn Thị Hằng</span></div>
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

             style="background-image: url(https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/templates/644000ba4f8e0c7ddf09c709/425658690e91ce418d704fe070a1f864.jpg)">
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
                            <span class="neela-style">04/2022</span>
                        </div>
                        <div class="gallery-container">
                            <div class="timeline-gallery-wrapper" data-animation-direction="from-left"
                                 data-animation-delay="250">
                                <div class="timeline-gallery-del">
                                    <div class="item text-center">
                                        <!--<a class="hover-img" href="./templates/template/images/timeline-slider-img1.jpg" data-lightbox="gallery-timeline" title="Our Vacations"><span class="btn btn-light btn-sm">+</span></a>-->
                                        <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/48643727997222f70fef6e7a11ecc08b.jpeg"
                                             alt="Bắt đầu từ câu chuyện phá rank liên quân" class="w-100 h-auto"
                                             style="max-width:500px;"/>
                                    </div>
                                </div>
                            </div>

                            <div class="description-wrapper" data-animation-direction="from-bottom"
                                 data-animation-delay="250">
                                <div class="description">
                                    <div class="neela-style">
                                        <h4>Bắt đầu từ câu chuyện phá rank liên quân</h4>
                                        <p>Chàng và nàng gặp nhau khi thời điểm nàng mới ra trường và tham gia vào dự án
                                            do chàng quản lý. Rồi thời covid diễn ra khiến chàng và nàng chưa kịp ấn
                                            tượng gì về nhau.<br/>
                                            Đến khi hết covid đi làm trở lại, chàng và nàng phát hiện ra đối phương cùng
                                            sở thích phá rank liên quân.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                            <span class="neela-style">15/05/2022</span>
                        </div>
                        <div class="gallery-container">
                            <div class="timeline-gallery-wrapper" data-animation-direction="from-left"
                                 data-animation-delay="250">
                                <div class="timeline-gallery-del">
                                    <div class="item text-center">
                                        <!--<a class="hover-img" href="./templates/template/images/timeline-slider-img1.jpg" data-lightbox="gallery-timeline" title="Our Vacations"><span class="btn btn-light btn-sm">+</span></a>-->
                                        <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/18cf27f0aabf83361b8edc11bc45fe74.jpeg"
                                             alt="Câu chuyện con gà và hạt đỗ xanh" class="w-100 h-auto"
                                             style="max-width:500px;"/>
                                    </div>
                                </div>
                            </div>

                            <div class="description-wrapper" data-animation-direction="from-bottom"
                                 data-animation-delay="250">
                                <div class="description">
                                    <div class="neela-style">
                                        <h4>Câu chuyện con gà và hạt đỗ xanh</h4>
                                        <p>Chàng là người thấm nhuần bí kíp tán gái của Châu Tinh Trì nên đã khiến nàng
                                            say nắng. Khi nàng có ý định vào Sài Gòn, Nàng kể cho chàng 1 câu chuyện
                                            nhưng chàng cố tình giả vờ không hiểu với 1 thái độ &quot;thờ ơ cool ngầu&quot;<br/>
                                            Và rồi khi câu chuyện lên đến mức cao trào, chàng và nàng chính thức hẹn hò
                                            với nhau.<br/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                            <span class="neela-style">04/09/2023</span>
                        </div>
                        <div class="gallery-container">
                            <div class="timeline-gallery-wrapper" data-animation-direction="from-left"
                                 data-animation-delay="250">
                                <div class="timeline-gallery-del">
                                    <div class="item text-center">
                                        <!--<a class="hover-img" href="./templates/template/images/timeline-slider-img1.jpg" data-lightbox="gallery-timeline" title="Our Vacations"><span class="btn btn-light btn-sm">+</span></a>-->
                                        <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/0856788ffb58b29ffaf38b8dbca9b59f.jpeg"
                                             alt="Phút giây cầu hôn bí mật bất ngờ" class="w-100 h-auto"
                                             style="max-width:500px;"/>
                                    </div>
                                </div>
                            </div>

                            <div class="description-wrapper" data-animation-direction="from-bottom"
                                 data-animation-delay="250">
                                <div class="description">
                                    <div class="neela-style">
                                        <h4>Phút giây cầu hôn bí mật bất ngờ</h4>
                                        <p>Ngày ấy, chàng rủ nàng đi xem film và cafe nhưng nàng không chịu.<br/>
                                            Thế rồi chàng phải giả vờ đau bụng để lừa nàng vào 1 quán cafe &quot;đặc
                                            biệt&quot;<br/>
                                            Khi được hướng dẫn lên phòng setup nàng vẫn ngơ ngác tưởng nhầm lẫn của nhân
                                            viên.<br/>
                                            Chỉ đến khi những hình ảnh kỷ niệm được chiếu lên nàng mới vỡ òa những giọt
                                            nước mắt.<br/>
                                            Và màn cầu hôn lãn mạn diễn ra cùng cái gật đầu đồng ý của nàng.</p>
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
             style="background-image: url(https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/templates/644000ba4f8e0c7ddf09c709/304468944f60bdc15b813714c651f37c.jpg);">
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
                            <h2 class="fs-1">Thái Sơn <br>
                                <small>&</small><br>
                                Khánh Huyền
                            </h2>

                            <div>Một lời chúc của bạn chắc chắn sẽ làm cho đám cưới của chúng tôi có thêm một niềm hạnh
                                phúc!
                            </div>
                            <div class="center m-0 mt-2">
                                <a href="#rsvp" class="btn btn-primary reverse scrollto text-white px-2"
                                   style="min-width:240px;max-width:240px;">Gửi lời chúc</a>
                            </div>
                            <div class="center m-0">
                                <a href="https://forms.office.com/r/6ctcyU421L" target="_blank"
                                   class="btn btn-primary reverse text-white px-2 mt-2"
                                   style="min-width:240px;max-width:240px;">Xác nhận tham dự</a>
                            </div>
                            <div class="date">14 Tháng 1 2024</div>
                            <div class="count-down-clock">
                                <div id="clock" data-date="2024-01-14" data-text-day="Ngày" data-text-hour="Giờ"
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
                    <div class="center m-0 mb-5"><a href="/photo-album" target="_blank" class="btn btn-primary px-2" style="min-width:240px;max-width:240px;">Xem album</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="gallery-container gallery-fancybox masonry-gallery">
                        <div class="grid grid-item">
                            <a href="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/656740ae69d47b8ea009b67e/large.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/656740ae69d47b8ea009b67e/small.jpg"
                                     alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/656740a18f3b80c4f90f96b4/large.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/656740a18f3b80c4f90f96b4/small.jpg"
                                     alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/656740973a72193cbe0e87bd/large.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/656740973a72193cbe0e87bd/small.jpg"
                                     alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/6567408fe8de17ed5b03db89/large.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/6567408fe8de17ed5b03db89/small.jpg"
                                     alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/65674086295184c3840ea371/large.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/65674086295184c3840ea371/small.jpg"
                                     alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/656740829c2b2b2e4800ca16/large.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/656740829c2b2b2e4800ca16/small.jpg"
                                     alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/656740740d48f1a8570a8ee6/large.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/656740740d48f1a8570a8ee6/small.jpg"
                                     alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/656740633a72193cbe0e87bc/large.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/656740633a72193cbe0e87bc/small.jpg"
                                     alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/6567405c7b159de54901a626/large.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/6567405c7b159de54901a626/small.jpg"
                                     alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid grid-item">
                            <a href="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/65674033304eb753b30a5417/large.jpg"
                               class="fancybox" data-fancybox-group="gall-1">
                                <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/galleries/65674033304eb753b30a5417/small.jpg"
                                     alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END GALLERY SECTION -->

    <section id="invitation" class="parallax-background bg-color-overlay padding-divider-top"
             style="background-image: url(https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/templates/644000ba4f8e0c7ddf09c709/8d48609ea73a7ec0e74392df8deeddcb.jpg);">
        <div class="section-divider-top-1 off-section"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title light">Xem video cưới của chúng tôi!</h1>
                </div>
            </div>

            <div class="invite neela-style" data-animation-direction="from-left" data-animation-delay="100">
                <div class="ratio ratio-16x9">
                    <!--<iframe class="border border-5 border-white w-100 h-100" style="border-width: 10px!important;"-->
                    <!--src="https://www.youtube.com/embed/XT6Cyc3WJQ0?si=80fwRgY6rqm7kOPq"-->
                    <!--allowfullscreen></iframe>-->
                </div>
            </div>
        </div>
    </section>

    <!-- BEGIN WEDDING GIFTS SECTION -->
    <div id="events"></div>
    <section id="giftregistry" class="parallax-background section-bg-color"
             style="padding:135px 0; background-image: url(https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/templates/644000ba4f8e0c7ddf09c709/d2c1a0a9de2773a853210776e49d97d6.jpg);">
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
                                    <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/54e5ba25092c799cb7c8d5dc34a3e5ca.jpeg"
                                         alt="TIỆC CƯỚI NHÀ TRAI" width="100" height="100"
                                         class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0"/>
                                    <div class="d-inline-block">
                                        <h3 class="w-100">TIỆC CƯỚI NHÀ TRAI</h3>
                                        <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i>
                                            <strong>10:00 14/01/2024</strong></p>
                                        <p class="w-100 mb-0 mt-1"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <strong>Thôn Chi Trung, Xã Tân Chi, Huyện Tiên Du, Bắc Ninh</strong></p>
                                    </div>
                                </div>

                                <div class="info">
                                    <div class="calendar-button" style="visibility: hidden;height: 0;overflow: hidden;">
                                        <div class="atcb" style="display:none;">
                                            {
                                            "name":"TIỆC CƯỚI NHÀ TRAI (Đám cưới Thái Sơn và Khánh Huyền)",
                                            "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!.
                                            Thông tin chi tiết xem tại website:<br>[url]./[/url]",
                                            "startDate":"2024-01-14",
                                            "endDate":"2024-01-14",
                                            "startTime":"10:00",
                                            "endTime":"10:00",
                                            "location":"Thôn Chi Trung, Xã Tân Chi, Huyện Tiên Du, Bắc Ninh",
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
                                    <a href="https://www.google.com/maps/place/C%E1%BB%ADa+H%C3%A0ng+S%E1%BB%AFa+B%E1%BB%89m+H%E1%BA%B1ng+D%C6%B0%C6%A1ng/@21.0760803,106.0895632,17z/data=!3m1!4b1!4m6!3m5!1s0x3135a09e49fd6251:0xebccf6ffd3f5d8a6!8m2!3d21.0760803!4d106.0921381!16s%2Fg%2F11g9nlkrlw?hl=vi-VN&entry=ttu" target="_blank" id="otheramount"
                                       class="btn btn-primary reverse">Xem bản đồ <i class="fa fa-angle-right me-0"></i></a>
                                </div>
                            </div>
                        </li>


                        <li data-animation-direction="from-bottom" data-animation-delay="300">
                            <div class="neela-style">
                                <div class="d-flex align-items-center event-item-content">
                                    <img src="https://cdn.biihappy.com/ziiweb/website/6567375dfe5105115a07a128/35e3a9e6af4c0f1742ab16a94cd141fa.jpeg"
                                         alt="LỄ CƯỚI NHÀ NAM" width="100" height="100"
                                         class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0"/>
                                    <div class="d-inline-block">
                                        <h3 class="w-100">LỄ CƯỚI NHÀ GÁI</h3>
                                        <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i>
                                            <strong>10:00 14/01/2024</strong></p>
                                        <p class="w-100 mb-0 mt-1"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <strong>Khu Quế Sơn, Phường Khắc Niệm, TP Bắc Ninh, Bắc Ninh</strong></p>
                                    </div>
                                </div>

                                <div class="info">
                                    <div class="calendar-button" style="visibility: hidden;height: 0;overflow: hidden;">
                                        <div class="atcb" style="display:none;">
                                            {
                                            "name":"LỄ CƯỚI NHÀ GÁI (Đám cưới Thái Sơn và Khánh Huyền)",
                                            "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!.
                                            Thông tin chi tiết xem tại website:<br>[url]./[/url]",
                                            "startDate":"2024-01-14",
                                            "endDate":"2024-01-14",
                                            "startTime":"11:00",
                                            "endTime":"11:00",
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
                                    <a href="https://www.google.com/maps/@21.1303458,106.057918,20.24z?hl=vi-VN&entry=ttu" target="_blank" id="otheramount"
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
                                         src="/template/images/thaisonbank.jpg">
                                    <p>Ngân hàng: <strong>CAKE BY VPBANK</strong></p>
                                    <p>Tên tài khoản: <strong>Ngô Thái Sơn</strong></p>
                                    <p>Số tài khoản: <strong>0966717874</strong></p>
                                    <p>Chi nhánh: <strong>Hà Nội</strong></p>

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
                                         src="/template/images/thaisonbank.jpg">
                                    <p>Ngân hàng: <strong>CAKE BY VPBANK</strong></p>
                                    <p>Tên tài khoản: <strong>Nguyễn Thị Khánh Huyền</strong></p>
                                    <p>Số tài khoản: <strong>0989978608</strong></p>
                                    <p>Chi nhánh: <strong>Hà Nội</strong></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
