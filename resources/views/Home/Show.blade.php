@extends('Layouts.HomeLayout')

@section('title')
    اسم سایت
@endsection

@section('style')
    <link rel="stylesheet" href="<?= url('css/js-persian-cal.css') ?>">
    <script src="<?= url('js/js-persian-cal.min.js') ?>"></script>
@endsection

@section('content')
    <div id="full-container">

        <!-- Banner
        ============================================= -->
        <section id="banner">

            <div class="banner-parallax" data-scroll-index="0">

                <div class="banner-slider">
                    <ul class="owl-carousel slider-img-bg">
                        @foreach($slider as $record)
                            <li>
                                <div class="overlay-colored" data-bg-color="#000" data-bg-color-opacity="0.6"></div><!-- .overlay-colored end -->
                                <div class="slide">
                                    <img alt="" src="<?= Url('images/'.$record->image); ?>" >
                                    <div class="slide-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-10 col-md-offset-1">

                                                    <div class="banner-center-box text-center">
                                                        <h1>
                                                            <span class="colored">{{$record->content}}</span>
                                                        </h1>
                                                        <div class="description">{{$record->text}}</div>
                                                        <a class="btn colorful large hover-dark" href="#">اطلاعات بیششتر</a>
                                                    </div><!-- .banner-center-box end -->

                                                </div><!-- .col-md-10 end -->
                                            </div><!-- .row end -->
                                        </div><!-- .container end -->
                                    </div><!-- .slide-content end -->
                                </div><!-- .slide end -->
                            </li>
                        @endforeach
                    </ul>
                </div><!-- .banner-slider end -->

            </div><!-- .banner-parallax end -->

        </section><!-- #banner end -->

        <!-- Content
        ============================================= -->
        <section id="content">
            <div id="content-wrap">
                <div id="featured-projects" class="flat-section featured-projects" data-scroll-index="1">

                    <div class="section-content">
                        <div class="container">

                            <div class="row">
                                <div class="col-lg-12">
                                    <!--timeline start-->
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="text-center mbot30">
                                                <h3 class="timeline-title">رویداد ها</h3>
                                                <p class="t-info">رویداد های پیش رو</p>

                                            </div>

                                            <div class="timeline">

                                                <?php $i=-1 ?>
                                                @foreach($seminar->all() as $smnr)
                                                    @foreach($spech->all() as $spch)

                                                        @if($smnr->spech_id == $spch->id)
                                                            <?php $i++; ?>
                                                            <?php $date = emr(); ?>

                                                            @if( $times = compare($date,timez($smnr->date)) )

                                                                @if($i%2 == 0)
                                                                    <article class="timeline-item">
                                                                        <div class="timeline-desk">
                                                                            <div class="panel">
                                                                                <div class="panel-body">
                                                                                    <span class="arrow"></span>
                                                                                    <span class="timeline-icon red"></span>
                                                                                    <span class="timeline-date">{{$smnr->date}}</span>

                                                                                    <a href="<?= url('/seminar/'.$smnr->id) ?>"> <h1 style="color: #0e76e6">{{$smnr->title}}</h1></a>
                                                                                    <h4><a href="#">{{$spch->name}}</a></h4>
                                                                                    <div class="album">
                                                                                        <a href="#">
                                                                                            <img alt="" src="<?= Url('poster/'.$smnr->poster); ?>" width="80px" height="80px">
                                                                                        </a>

                                                                                    </div>
                                                                                    <div style="margin-top: 110px;">
                                                                                        <div class="notification">
                                                                                            <i class=" icon-exclamation-sign"></i> {{$smnr->description}} <a href="#">اطلاعات بیشتر</a>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                @else
                                                                    <article class="timeline-item alt">

                                                                        <div class="timeline-desk">
                                                                            <div class="panel">
                                                                                <div class="panel-body">
                                                                                    <span class="arrow-alt"></span>
                                                                                    <span class="timeline-icon green"></span>
                                                                                    <span class="timeline-date">{{$smnr->date}}</span>
                                                                                    <a href="<?= url('/seminar/'.$smnr->id) ?>"><h1 style="color: #0e76e6">{{$smnr->title}}</h1></a>
                                                                                    <h4><a href="#">{{$spch->name}}</a></h4>
                                                                                    <div class="album">
                                                                                        <a href="#">
                                                                                            <img alt="" src="<?= Url('poster/'.$smnr->poster); ?>" width="80px" height="80px">
                                                                                        </a>

                                                                                    </div>
                                                                                    <div style="margin-top: 110px;">
                                                                                        <div class="notification">
                                                                                            <i class=" icon-exclamation-sign"></i> {{$smnr->description}} <a href="#">اطلاعات بیشتر</a>
                                                                                        </div>
                                                                                    </div>                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                @endif
                                                            @endif

                                                        @elseif( $smnr->spech_id == -1)
                                                            <?php $i++; ?>
                                                            <?php $date = emr(); ?>
                                                            @if( $times = compare($date,timez($smnr->date)) )

                                                                @if($i%2 == 0)
                                                                    <article class="timeline-item">
                                                                        <div class="timeline-desk">
                                                                            <div class="panel">
                                                                                <div class="panel-body">
                                                                                    <span class="arrow"></span>
                                                                                    <span class="timeline-icon red"></span>
                                                                                    <span class="timeline-date">{{$smnr->date}}</span>
                                                                                    <h1 style="color: #0e76e6">{{$smnr->title}}</h1>
                                                                                    <h4><a href="#">{{$spch->name}}</a></h4>
                                                                                    <div class="album">
                                                                                        <a href="#">
                                                                                            <img alt="" src="<?= Url('poster/'.$smnr->poster); ?>" width="80px" height="80px">
                                                                                        </a>

                                                                                    </div>
                                                                                    <div style="margin-top: 110px;">
                                                                                        <div class="notification">
                                                                                            <i class=" icon-exclamation-sign"></i> {{$smnr->description}} <a href="#">اطلاعات بیشتر</a>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                @else
                                                                    <article class="timeline-item alt">

                                                                        <div class="timeline-desk">
                                                                            <div class="panel">
                                                                                <div class="panel-body">
                                                                                    <span class="arrow-alt"></span>
                                                                                    <span class="timeline-icon green"></span>
                                                                                    <span class="timeline-date">{{$smnr->date}}</span>
                                                                                    <h1 style="color: #0e76e6">{{$smnr->title}}</h1>
                                                                                    <h4><a href="#">{{$spch->name}}</a></h4>
                                                                                    <div class="album">
                                                                                        <a href="#">
                                                                                            <img alt="" src="<?= Url('poster/'.$smnr->poster); ?>" width="80px" height="80px">
                                                                                        </a>

                                                                                    </div>
                                                                                    <div style="margin-top: 110px;">
                                                                                        <div class="notification">
                                                                                            <i class=" icon-exclamation-sign"></i> {{$smnr->description}} <a href="#">اطلاعات بیشتر</a>
                                                                                        </div>
                                                                                    </div>                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                @endif
                                                            @endif
                                                            @break
                                                        @endif

                                                    @endforeach
                                                @endforeach
                                            </div>

                                            <div class="clearfix">&nbsp;</div>
                                        </div>
                                    </section>
                                    <!--timeline end-->
                                </div>
                            </div>
                        </div><!-- .container end -->

                    </div><!-- .section-content end -->

                </div><!-- .flat-section end -->

                <div id="our-services" class="flat-section our-services" data-scroll-index="2">

                    <div class="section-content">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <div class="section-title text-center">
                                        <h2>سیمینار های برگزار شده</h2>
                                        <p>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها
                                        </p>
                                    </div><!-- .section-title end -->

                                </div><!-- .col-md-8 end -->
                                <div class="col-md-12">

                                    <div class="img-preview img-bg anim-moveUp">
                                        <img src="images/files/our-services/featured-img-1.jpg" alt="">
                                    </div><!-- .img-preview end -->

                                </div><!-- .col-md-12 end -->

                                <div class="col-md-3 text-center">
                                    <div class="box-preview-1 anim-moveUp mb-md-50">
                                        <div class="box-img img-bg">
                                            <a href="#"><img src="images/files/about-us/box-preview-1/img-1.jpg" alt=""></a>
                                        </div><!-- .box-img end -->
                                        <div class="box-content">
                                            <h5><a href="#">إدارة المشروع</a></h5>
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي</p>
                                        </div><!-- .box-content end -->
                                    </div><!-- .box-preview-1 end -->

                                </div><!-- .col-md-3 end -->
                                <div class="col-md-3 text-center">

                                    <div class="box-preview-1 anim-moveUp mb-md-50">
                                        <div class="box-img img-bg">
                                            <a href="#"><img src="images/files/about-us/box-preview-1/img-2.jpg" alt=""></a>
                                        </div><!-- .box-img end -->
                                        <div class="box-content">
                                            <h5><a href="#">بلاط ودهانات</a></h5>
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي</p>
                                        </div><!-- .box-content end -->
                                    </div><!-- .box-preview-1 end -->

                                </div><!-- .col-md-3 end -->
                                <div class="col-md-3 text-center">

                                    <div class="box-preview-1 anim-moveUp mb-md-50">
                                        <div class="box-img img-bg">
                                            <a href="#"><img src="images/files/about-us/box-preview-1/img-3.jpg" alt=""></a>
                                        </div><!-- .box-img end -->
                                        <div class="box-content">
                                            <h5><a href="#">تصميم وبناء</a></h5>
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي</p>
                                        </div><!-- .box-content end -->
                                    </div><!-- .box-preview-1 end -->

                                </div><!-- .col-md-3 end -->
                                <div class="col-md-3 text-center">

                                    <div class="box-preview-1 anim-moveUp">
                                        <div class="box-img img-bg">
                                            <a href="#"><img src="images/files/about-us/box-preview-1/img-4.jpg" alt=""></a>
                                        </div><!-- .box-img end -->
                                        <div class="box-content">
                                            <h5><a href="#">إصلاحات بناء</a></h5>
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي</p>
                                        </div><!-- .box-content end -->
                                    </div><!-- .box-preview-1 end -->

                                </div><!-- .col-md-3 end -->
                            </div><!-- .row end -->
                        </div><!-- .container end -->

                    </div><!-- .section-content end -->

                </div><!-- .flat-section end -->
                <div id="our-works" class="flat-section our-works" data-scroll-index="3">

                    <div class="portfolio-top"></div>
                    <div class="section-content">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <div class="section-title text-center">
                                        <h2>گالری تصاویر</h2>
                                    </div><!-- .section-title end -->

                                </div><!-- .col-md-8 end -->
                                <div class="col-md-12">

                                    <ul class="portfolio-categories">
                                        <li><a data-filter="*" class="active" href="#">الكل</a></li>
                                        <li><a data-filter=".pi-world-tour" href="#">داخلي</a></li>
                                        <li><a data-filter=".pi-ocean-tour" href="#">المناظر الطبيعية</a></li>
                                        <li><a data-filter=".pi-summer-trip" href="#">تجديدات</a></li>
                                        <li><a data-filter=".pi-sport-tour" href="#">هندسة معمارية</a></li>
                                    </ul>

                                </div><!-- .col-md-12 end -->
                            </div><!-- .row end -->
                        </div><!-- .container end -->

                        <div class="portfolio-items-wrap">

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="portfolio-items" data-pi-load-file="loadmore-portfolio-items-rtl.html">
                                            <div class="portfolio-item pi-world-tour">
                                                <div class="preview img-bg">
                                                    <img src="images/files/portfolio/img-1.jpg" alt="">
                                                </div><!-- .preview end -->
                                                <a class="overlay" href="#">
                                                    <div class="overlay-inner">
                                                        <span class="sub-title">داخلي</span>
                                                        <h4>فن البناء</h4>
                                                    </div><!-- .overlay-inner end -->
                                                </a><!-- .overlay end -->
                                                <div class="portfolio-single-link">
                                                    <a class="open-portfolio-single" href="portfolio-single-1-rtl.html"></a>
                                                </div><!-- end portfolio-single-link -->
                                            </div><!-- .portfolio-item -->
                                            <div class="portfolio-item pi-sport-tour">
                                                <div class="preview img-bg">
                                                    <img src="images/files/portfolio/img-2.jpg" alt="">
                                                </div><!-- .preview end -->
                                                <a class="overlay" href="#">
                                                    <div class="overlay-inner">
                                                        <span class="sub-title">داخلي</span>
                                                        <h4>فن البناء</h4>
                                                    </div><!-- .overlay-inner end -->
                                                </a><!-- .overlay end -->
                                                <div class="portfolio-single-link">
                                                    <a class="open-portfolio-single" href="portfolio-single-2-rtl.html"></a>
                                                </div><!-- end portfolio-single-link -->
                                            </div><!-- .portfolio-item -->
                                            <div class="portfolio-item pi-summer-tour">
                                                <div class="preview img-bg">
                                                    <img src="images/files/portfolio/img-3.jpg" alt="">
                                                </div><!-- .preview end -->
                                                <a class="overlay" href="#">
                                                    <div class="overlay-inner">
                                                        <span class="sub-title">داخلي</span>
                                                        <h4>فن البناء</h4>
                                                    </div><!-- .overlay-inner end -->
                                                </a><!-- .overlay end -->
                                                <div class="portfolio-single-link">
                                                    <a class="open-portfolio-single" href="portfolio-single-3-rtl.html"></a>
                                                </div><!-- end portfolio-single-link -->
                                            </div><!-- .portfolio-item -->
                                            <div class="portfolio-item pi-world-tour">
                                                <div class="preview img-bg">
                                                    <img src="images/files/portfolio/img-4.jpg" alt="">
                                                </div><!-- .preview end -->
                                                <a class="overlay" href="#">
                                                    <div class="overlay-inner">
                                                        <span class="sub-title">داخلي</span>
                                                        <h4>فن البناء</h4>
                                                    </div><!-- .overlay-inner end -->
                                                </a><!-- .overlay end -->
                                                <div class="portfolio-single-link">
                                                    <a class="open-portfolio-single" href="portfolio-single-4-rtl.html"></a>
                                                </div><!-- end portfolio-single-link -->
                                            </div><!-- .portfolio-item -->
                                            <div class="portfolio-item pi-summer-tour pi-summer-trip">
                                                <div class="preview img-bg">
                                                    <img src="images/files/portfolio/img-5.jpg" alt="">
                                                </div><!-- .preview end -->
                                                <a class="overlay lightbox-gallery" href="images/files/portfolio/lightbox/img-5.jpg">
                                                    <div class="overlay-inner">
                                                        <span class="sub-title">داخلي</span>
                                                        <h4>فن البناء</h4>
                                                    </div><!-- .overlay-inner end -->
                                                </a><!-- .overlay end -->
                                            </div><!-- .portfolio-item -->
                                            <div class="portfolio-item pi-ocean-tour">
                                                <div class="preview img-bg">
                                                    <img src="images/files/portfolio/img-6.jpg" alt="">
                                                </div><!-- .preview end -->
                                                <a class="overlay lightbox-gallery" href="images/files/portfolio/lightbox/img-6.jpg">
                                                    <div class="overlay-inner">
                                                        <span class="sub-title">داخلي</span>
                                                        <h4>فن البناء</h4>
                                                    </div><!-- .overlay-inner end -->
                                                </a><!-- .overlay end -->
                                            </div><!-- .portfolio-item -->
                                            <div class="portfolio-item pi-sport-tour">
                                                <div class="preview img-bg">
                                                    <img src="images/files/portfolio/img-7.jpg" alt="">
                                                </div><!-- .preview end -->
                                                <a class="overlay lightbox-gallery" href="images/files/portfolio/lightbox/img-7.jpg">
                                                    <div class="overlay-inner">
                                                        <span class="sub-title">داخلي</span>
                                                        <h4>فن البناء</h4>
                                                    </div><!-- .overlay-inner end -->
                                                </a><!-- .overlay end -->
                                            </div><!-- .portfolio-item -->
                                            <div class="portfolio-item pi-ocean-tour">
                                                <div class="preview img-bg">
                                                    <img src="images/files/portfolio/img-8.jpg" alt="">
                                                </div><!-- .preview end -->
                                                <a class="overlay lightbox-gallery" href="images/files/portfolio/lightbox/img-8.jpg">
                                                    <div class="overlay-inner">
                                                        <span class="sub-title">داخلي</span>
                                                        <h4>فن البناء</h4>
                                                    </div><!-- .overlay-inner end -->
                                                </a><!-- .overlay end -->
                                            </div><!-- .portfolio-item -->
                                        </div><!-- .portfolio-items end -->
                                    </div><!-- .col-md-12 end -->
                                </div><!-- .row end -->
                            </div><!-- .container-fluid end -->

                            <div class="portfolio-bottom"></div>
                            <div id="portfolio-single-wrap">

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="portfolio-single-loader">
                                                <div class="loader-shape la-ball-clip-rotate la-dark">
                                                    <div></div>
                                                </div>
                                            </div><!-- end portfolio-single-loader -->
                                            <div class="clearfix"></div>
                                            <div id="portfolio-single-content"></div>

                                        </div><!-- .col-md-12 end -->
                                    </div><!-- .row end -->
                                </div><!-- .container-fluid end -->

                            </div><!-- end portfolio-single-wrap -->

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="portfolio-cta-bottom">
                                            <h4><span class="colored">أعمــال مميــزة</span> قمنــا باختيارهــا لــك كــي تــستكــشفهــا اليــوم</h4>
                                            <a href="#" class="loadmore-pi btn medium colorful hover-dark" data-text-loading="جاري التحميل" data-text-loading-finished="ليس أكثر!">
                                                <span>اكتشف المزيد</span>
                                                <div class="loader la-ball-clip-rotate la-sm">
                                                    <div></div>
                                                </div>
                                            </a>
                                        </div><!-- .portfolio-cta-bottom end -->

                                    </div><!-- .col-md-12 end -->
                                </div><!-- .row end -->
                            </div><!-- .container end -->

                        </div><!-- .portfolio-items-wrap end -->

                    </div><!-- .section-content end -->

                </div><!-- .flat-section end -->
                <div id="about-us" class="flat-section about-us" data-scroll-index="4">

                    <div class="section-content">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <div class="section-title text-center anim-fadeIn">
                                        <h2>عــن شركــة سكــور</h2>
                                        <p>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها
                                        </p>
                                    </div><!-- .section-title end -->

                                </div><!-- .col-md-8 end -->
                                <div class="col-md-3 text-center">

                                    <div class="box-preview-1 anim-fadeIn mb-md-50">
                                        <div class="box-img img-bg">
                                            <a href="#"><img src="images/files/about-us/box-preview-1/img-1.jpg" alt=""></a>
                                        </div><!-- .box-img end -->
                                        <div class="box-content">
                                            <h5><a href="#">إدارة المشروع</a></h5>
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي</p>
                                        </div><!-- .box-content end -->
                                    </div><!-- .box-preview-1 end -->

                                </div><!-- .col-md-3 end -->
                                <div class="col-md-3 text-center">

                                    <div class="box-preview-1 anim-fadeIn mb-md-50">
                                        <div class="box-img img-bg">
                                            <a href="#"><img src="images/files/about-us/box-preview-1/img-2.jpg" alt=""></a>
                                        </div><!-- .box-img end -->
                                        <div class="box-content">
                                            <h5><a href="#">بلاط ودهانات</a></h5>
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي</p>
                                        </div><!-- .box-content end -->
                                    </div><!-- .box-preview-1 end -->

                                </div><!-- .col-md-3 end -->
                                <div class="col-md-3 text-center">

                                    <div class="box-preview-1 anim-fadeIn mb-md-50">
                                        <div class="box-img img-bg">
                                            <a href="#"><img src="images/files/about-us/box-preview-1/img-3.jpg" alt=""></a>
                                        </div><!-- .box-img end -->
                                        <div class="box-content">
                                            <h5><a href="#">تصميم وبناء</a></h5>
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي</p>
                                        </div><!-- .box-content end -->
                                    </div><!-- .box-preview-1 end -->

                                </div><!-- .col-md-3 end -->
                                <div class="col-md-3 text-center">

                                    <div class="box-preview-1 anim-fadeIn">
                                        <div class="box-img img-bg">
                                            <a href="#"><img src="images/files/about-us/box-preview-1/img-4.jpg" alt=""></a>
                                        </div><!-- .box-img end -->
                                        <div class="box-content">
                                            <h5><a href="#">إصلاحات بناء</a></h5>
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي</p>
                                        </div><!-- .box-content end -->
                                    </div><!-- .box-preview-1 end -->

                                </div><!-- .col-md-3 end -->
                                <div class="col-md-12">

                                    <div class="about-us-boxes-info">
                                        <div class="box-info-1 grey-bg">
                                            <div class="box-icon"><img src="images/files/about-us/box-info-1/img-1.png" alt=""></div>
                                            <div class="box-content">
                                                <h5>أفضل ترميم للمباني</h5>
                                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي</p>
                                            </div><!-- .box-content end -->
                                        </div><!-- .box-info-1 end -->
                                        <div class="box-info-1 colorful-bg">
                                            <div class="box-icon"><img src="images/files/about-us/box-info-1/img-2.png" alt=""></div>
                                            <div class="box-content">
                                                <h5>نقل الخرسانة</h5>
                                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي</p>
                                            </div><!-- .box-content end -->
                                        </div><!-- .box-info-1 end -->
                                        <div class="box-info-1 dark-bg">
                                            <div class="box-icon"><img src="images/files/about-us/box-info-1/img-3.png" alt=""></div>
                                            <div class="box-content">
                                                <h5>تصميم وبناء</h5>
                                                <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي</p>
                                            </div><!-- .box-content end -->
                                        </div><!-- .box-info-1 end -->
                                    </div><!-- .about-us-boxes-info end -->

                                </div><!-- .col-md-12 end -->
                            </div><!-- .row end -->
                        </div><!-- .container end -->

                    </div><!-- .section-content end -->

                </div><!-- .flat-section end -->
                <div id="contact-us" class="flat-section contact-us" data-scroll-index="5">

                    <div class="section-content">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <div class="section-title text-center">
                                        <h2>اتصــل بنــا</h2>
                                        <p>
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها
                                        </p>
                                    </div><!-- .section-title end -->

                                </div><!-- .col-md-8 end -->
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="box-contact-info text-center mb-md-40">
                                                <i class="fa fa-phone"></i>
                                                <h5>أرقام الهاتف</h5>
                                                <p>
                                                    مكتب - +440 875369208
                                                    <br>
                                                    فاكس - +440 353363114
                                                </p>
                                            </div><!-- .box-contact-info end -->

                                        </div><!-- .col-md-4 end -->
                                        <div class="col-md-4">

                                            <div class="box-contact-info text-center mb-md-40">
                                                <i class="fa fa-map-marker"></i>
                                                <h5>عنوان المكتب</h5>
                                                <p>
                                                    26 ش أحمد ماهر من ش الترعة
                                                    <br>
                                                    المنصورة 35116, الدقهلية
                                                </p>
                                            </div><!-- .box-contact-info end -->

                                        </div><!-- .col-md-4 end -->
                                        <div class="col-md-4">

                                            <div class="box-contact-info text-center">
                                                <i class="fa fa-envelope"></i>
                                                <h5>البريد الإلكتروني</h5>
                                                <p>
                                                    support@sitename.com
                                                    <br>
                                                    info@sitename.com
                                                </p>
                                            </div><!-- .box-contact-info end -->

                                        </div><!-- .col-md-4 end -->
                                    </div><!-- .row end -->
                                </div><!-- .col-md-8 end -->
                                <div class="col-md-8 col-md-offset-2">

                                    <form id="contact-form">
                                        <div class="cf-notifications" data-error-msg="رجاء تتبع الرسائل الخاطئة وأكمل كما هو مطلوب" data-success-msg="شكراً على رسالتك :)">
                                            <div class="cf-notifications-cont"></div>
                                        </div><!-- end Contact Form Submit Message -->
                                        <div class="form-group">
                                            <input type="text" name="cfName" id="cfName" class="form-control" placeholder="اسمك">
                                        </div><!-- .form-group end -->
                                        <div class="form-group">
                                            <input type="text" name="cfEmail" id="cfEmail" class="form-control" placeholder="بريدك الإلكتروني">
                                        </div><!-- .form-group end -->
                                        <div class="form-group">
                                            <textarea  name="cfMessage" id="cfMessage" class="form-control" placeholder="رسالتك"></textarea>
                                        </div><!-- .form-group end -->
                                        <div class="form-group">
                                            <input type="submit" class="form-control" value="أرسل الرسالة">
                                        </div><!-- .form-group end -->
                                    </form><!-- #contact-form end -->

                                </div><!-- .col-md-8 end -->
                            </div><!-- .row end -->
                        </div><!-- .container end -->

                    </div><!-- .section-content end -->

                </div><!-- .flat-section end -->

                <!-- === Google Map =========== -->

            </div><!-- #content-wrap -->

        </section><!-- #content end -->

    </div><!-- #full-container end -->

    <script>
        var objCal5 = new AMIB.persianCalendar( 'pcal5', {
                extraInputID: 'extra',
                extraInputFormat: 'YYYY/MM/DD'
            }
        );
    </script>

    <script>
        function updatetime() {
            var price = $("#pcal5").val();
            $("#extra").val(price);
        }​
    </script>
@endsection
<?php
function timez($date){
    $month = explode('/',$date);
    return $month;
}

function comparedate($seminar_date,$roidad_date,$seminar,$roidad){
    if($seminar_date[0] > $roidad_date[0])
        if($seminar_date[1] > $roidad_date[1])
            if($seminar_date[2] > $roidad_date[2])
                return $seminar;
            else
                return $roidad;
        else
            return $roidad;
    else
        return $roidad;
}
function emr(){
    $dt = new \Datetime();
    Verta::setStringformat('Y/n/j');
    return new Verta($dt);
}
function compare($v1,$v2){
    $v2 = Verta::createJalaliDate($v2[0],$v2[1],$v2[2]);
    return $v2->gte($v1);
}
?>



