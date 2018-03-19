@extends('Layouts.AdminLayout')

@section('title')
    پنل مدیریت
@endsection

@section('content')


        <!--state overview start-->
        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="icon-user"></i>
                    </div>
                    <div class="value">
                        <h1>22</h1>
                        <p>کاربر جدید</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol red">
                        <i class="icon-tags"></i>
                    </div>
                    <div class="value">
                        <h1>140</h1>
                        <p>فروش</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="icon-shopping-cart"></i>
                    </div>
                    <div class="value">
                        <h1>345</h1>
                        <p>سفارش جدید</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol blue">
                        <i class="icon-bar-chart"></i>
                    </div>
                    <div class="value">
                        <h1>34,500</h1>
                        <p>سود خالص</p>
                    </div>
                </section>
            </div>
        </div>
        <!--state overview end-->

        <div class="row">
            <div class="col-lg-8">
                <!--custom chart start-->
                <div class="border-head">
                    <h3>چارت ورودی</h3>
                </div>
                <div class="custom-bar-chart">
                    <div class="bar">
                        <div class="title">فروردین</div>
                        <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">80%</div>
                    </div>
                    <div class="bar doted">
                        <div class="title">اردیبهشت</div>
                        <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                    </div>
                    <div class="bar ">
                        <div class="title">خرداد</div>
                        <div class="value tooltips" data-original-title="10%" data-toggle="tooltip" data-placement="top">100%</div>
                    </div>
                    <div class="bar doted">
                        <div class="title">تیر</div>
                        <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
                    </div>
                    <div class="bar">
                        <div class="title">مرداد</div>
                        <div class="value tooltips" data-original-title="20%" data-toggle="tooltip" data-placement="top">20%</div>
                    </div>
                    <div class="bar doted">
                        <div class="title">شهریور</div>
                        <div class="value tooltips" data-original-title="39%" data-toggle="tooltip" data-placement="top">39%</div>
                    </div>
                    <div class="bar">
                        <div class="title">مهر</div>
                        <div class="value tooltips" data-original-title="75%" data-toggle="tooltip" data-placement="top">75%</div>
                    </div>
                    <div class="bar doted">
                        <div class="title">آبان</div>
                        <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
                    </div>
                    <div class="bar ">
                        <div class="title">آذر</div>
                        <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                    </div>
                    <div class="bar doted">
                        <div class="title">دی</div>
                        <div class="value tooltips" data-original-title="42%" data-toggle="tooltip" data-placement="top">42%</div>
                    </div>
                    <div class="bar ">
                        <div class="title">بهمن</div>
                        <div class="value tooltips" data-original-title="60%" data-toggle="tooltip" data-placement="top">60%</div>
                    </div>
                    <div class="bar doted">
                        <div class="title">اسفند</div>
                        <div class="value tooltips" data-original-title="90%" data-toggle="tooltip" data-placement="top">90%</div>
                    </div>
                </div>
                <!--custom chart end-->
            </div>
            <div class="col-lg-4">
                <!--new earning start-->
                <div class="panel terques-chart">
                    <div class="panel-body chart-texture">
                        <div class="chart">
                            <div class="heading">
                                <span>جمعه</span>
                                <strong>ريال 570000 | 15%</strong>
                            </div>
                            <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                        </div>
                    </div>
                    <div class="chart-tittle">
                        <span class="title">ورودی ها</span>
                        <span class="value">
                                  <a href="#" class="active">فروش</a>
                                  |
                                  <a href="#">بازگشتی</a>
                                  |
                                  <a href="#">آنلاین</a>
                              </span>
                    </div>
                </div>
                <!--new earning end-->

                <!--total earning start-->
                <div class="panel green-chart">
                    <div class="panel-body">
                        <div class="chart">
                            <div class="heading">
                                <span>مهر</span>
                                <strong>23 روز | 65%</strong>
                            </div>
                            <div id="barchart"></div>
                        </div>
                    </div>
                    <div class="chart-tittle">
                        <span class="title">درآمد کل</span>
                        <span class="value">ريال, 76،54،678</span>
                    </div>
                </div>
                <!--total earning end-->
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <!--timeline start-->
                <section class="panel">
                    <div class="panel-body">
                        <div class="text-center mbot30">
                            <h3 class="timeline-title">Timeline</h3>
                            <p class="t-info">This is a project timeline</p>
                        </div>

                        <div class="timeline">

                            <article class="timeline-item">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <span class="arrow"></span>
                                            <span class="timeline-icon red"></span>
                                            <span class="timeline-date">08:25 am</span>
                                            <h1 class="red">12 July | Sunday</h1>
                                            <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="timeline-item alt">

                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <span class="arrow-alt"></span>
                                            <span class="timeline-icon green"></span>
                                            <span class="timeline-date">10:00 am</span>
                                            <h1 class="green">10 July | Wednesday</h1>
                                            <p><a href="#">Jonathan Smith</a> added new milestone <span><a href="#" class="green">ERP</a></span></p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="timeline-item">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <span class="arrow"></span>
                                            <span class="timeline-icon blue"></span>
                                            <span class="timeline-date">11:35 am</span>
                                            <h1 class="blue">05 July | Monday</h1>
                                            <p><a href="#">Anjelina Joli</a> added new album <span><a href="#" class="blue">PARTY TIME</a></span></p>
                                            <div class="album">
                                                <a href="#">
                                                    <img alt="" src="img/sm-img-1.jpg">
                                                </a>
                                                <a href="#">
                                                    <img alt="" src="img/sm-img-2.jpg">
                                                </a>
                                                <a href="#">
                                                    <img alt="" src="img/sm-img-3.jpg">
                                                </a>
                                                <a href="#">
                                                    <img alt="" src="img/sm-img-1.jpg">
                                                </a>
                                                <a href="#">
                                                    <img alt="" src="img/sm-img-2.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-item alt">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <span class="arrow-alt"></span>
                                            <span class="timeline-icon purple"></span>
                                            <span class="timeline-date">3:20 pm</span>
                                            <h1 class="purple">29 June | Saturday</h1>
                                            <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                            <div class="notification">
                                                <i class=" icon-exclamation-sign"></i> New task added for <a href="#">Denial Collins</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-item">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <span class="arrow"></span>
                                            <span class="timeline-icon light-green"></span>
                                            <span class="timeline-date">07:49 pm</span>
                                            <h1 class="light-green">10 June | Friday</h1>
                                            <p><a href="#">Jonatha Smith</a> added new milestone <span><a href="#" class="light-green">prank</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="clearfix">&nbsp;</div>
                    </div>
                </section>
                <!--timeline end-->
            </div>
        </div>


@endsection