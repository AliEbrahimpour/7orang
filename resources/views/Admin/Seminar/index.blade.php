@extends('Layouts.AdminLayout')


@section('title')
مدیریت سمینار ها
@endsection

@section('style')
   <style>
       .post-module {
           position: relative;
           z-index: 1;
           display: block;
           background: #FFFFFF;
           min-width: 270px;
           height: 400px;
           -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
           -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
           box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
           -webkit-transition: all 0.3s linear 0s;
           -moz-transition: all 0.3s linear 0s;
           -ms-transition: all 0.3s linear 0s;
           -o-transition: all 0.3s linear 0s;
           transition: all 0.3s linear 0s;
       }
       .post-module:hover,
       .hover {
           -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
           -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
           box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
       }
       .post-module:hover .thumbnai img,
       .hover .thumbnai img {
           -webkit-transform: scale(1.1);
           -moz-transform: scale(1.1);
           transform: scale(1.1);
           opacity: .6;
       }
       .post-module .thumbnai {
           background: #000000;
           height: 180px;
           overflow: hidden;
       }
       *{
           font-family:  "B Nazanin";
       }
       .post-module .thumbnai .date {
           position: absolute;
           top: 20px;
           right: 20px;
           z-index: 1;
           background: #e74c3c;
           width: 55px;
           height: 55px;
           padding: 5px 0;
           -webkit-border-radius: 100%;
           -moz-border-radius: 100%;
           border-radius: 100%;
           color: #FFFFFF;
           text-align: center;
           -webkti-box-sizing: border-box;
           -moz-box-sizing: border-box;
           box-sizing: border-box;
       }
       .post-module .thumbnai .date .day {
           font-size: 18px;
           font-weight: 700;
       }
       .post-module .thumbnai .date .month {
           font-size: 12px;
           text-transform: uppercase;
       }
       .post-module .thumbnai img {
           display: block;
           width: 100%;
           height: 100%;
           -webkit-transition: all 0.3s linear 0s;
           -moz-transition: all 0.3s linear 0s;
           -ms-transition: all 0.3s linear 0s;
           -o-transition: all 0.3s linear 0s;
           transition: all 0.3s linear 0s;
       }
       .post-module .post-content {
           position: absolute;
           bottom: 0;
           background: #FFFFFF;
           width: 100%;
           padding: 30px 30px 0px 30px;
           -webkti-box-sizing: border-box;
           -moz-box-sizing: border-box;
           box-sizing: border-box;
           -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
           -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
           -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
           -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
           transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
       }
       .post-module .post-content .category {
           float: right;
           clear: both;
           position: absolute;
           top: -35px;
           right: 0;
           background: #e74c3c;
           padding: 10px 15px;
           color: #FFFFFF;
           font-size: 14px;
           font-weight: 600;
           text-transform: uppercase;
       }
       .post-module .post-content .title {
           margin: 0;
           padding: 0 0 10px;
           color: #333333;
           font-size: 26px;
           font-weight: 700;
       }
       .post-module .post-content .sub_title {
           margin: 0;
           padding: 0 0 20px;
           color: #e74c3c;
           font-size: 20px;
           font-weight: 400;
       }
       .post-module .post-content .description {
           display: none;
           color: #666666;
           font-size: 14px;
           line-height: 1.8em;
       }
       .post-module .post-content .description:hover {
           display: block;
       }

       .post-module .post-content .post-meta {
           margin: 30px 0 0;
           color: #999999;
       }
       .post-module .post-content .post-meta .timestamp {
           margin: 0 16px 0 0;
       }
       .post-module .post-content .post-meta a {
           color: #999999;
           text-decoration: none;
       }
       .hover .post-content .description {
           display: block !important;
           height: auto !important;
           opacity: 1 !important;
       }
       .container {
           max-width: 960px;
           min-width: 640px;
           margin: 0 auto;
       }
       .container:before,
       .container:after {
           content: '';
           display: block;
           clear: both;
       }
       .container .column {
           width: 33%;
            margin-top: 30px;
           padding: 0 25px;
           -webkti-box-sizing: border-box;
           -moz-box-sizing: border-box;
           box-sizing: border-box;
           float: right;
       }
       .container .column .demo-title {
           margin: 0 0 15px;
           color: #666666;
           font-size: 18px;
           font-weight: bold;
           text-transform: uppercase;
       }
       .container .info {
           width: 300px;
           margin: 50px auto;
           text-align: center;
       }
       .container .info h1 {
           margin: 0 0 15px;
           padding: 0;
           font-size: 24px;
           font-weight: bold;
           color: #333333;
       }
       .container .info span {
           color: #666666;
           font-size: 12px;
       }
       .container .info span a {
           color: #000000;
           text-decoration: none;
       }
       .container .info span .fa {
           color: #e74c3c;
       }

   </style>
    <script>
        $(window).load(function() {
            $('.post-module').hover(function() {
                $(this).find('.description').stop().animate({
                    height: "toggle",
                   opacity: "toggle"
                }, 300);
            });
        });
    </script>
@endsection

@section('content')



<h2  style="text-align:center;margin-bottom: 50px;font-size: 45px;">مشاهده سمینار ها</h2>

<div class="container">

    <!-- Normal Demo-->
    @foreach($seminar->all() as $smnar)

    <div class="column">
        <!-- Post-->
        <div class="post-module">
            <!-- thumbnai-->
            <div class="thumbnai">

                <div class="date">
                    <div class="day">{{timez($smnar->date)[2]}}</div>
                    <div class="month">{{monthname(timez($smnar->date)[1]-1)}}</div>
                </div><img  src="<?= url('img/'.$smnar->poster) ?> "/>

            </div>
            <!-- Post Content-->
            <div class="post-content">
                <div class="category">{{$smnar->title}}</div>
                <h1 class="title">{{ $smnar->spech_id}}</h1>
                <h2 class="sub_title">{{$smnar->description}}</h2>
                <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
                <div class="row"  style="text-align: center">
                    <div class="btn-group " style="border-radius: 0; ">
                        <a href="<?= url('/seminar/'.$smnar->id) ?>" type="button" class="btn btn-primary" style="border-radius: 0 4px 0 0 ;">مشاهده</a>
                        <a href="<?= url('/seminar/'.$smnar->id.'/edit') ?>" type="button" class="btn btn-warning">ویرایش</a>
                        <button type="button" class="btn btn-danger" style="border-radius: 4px 0 0 0 ;" data-toggle="modal" data-target="#myModal">حذف</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
        <form id="coords" class="coords" action="<?= url('/jayegah') ?>" method="POST">
            <div class="modal-body">
                <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> حذف سیمنار {{$smnar->title}}</h4>
                    </div>
                    <div class="modal-body">
                        <p>برای انتقال به زباله دان سیمنار  {{$smnar->title}}  بر روی حذف کلیک کنید</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">حذف</button>
                    </div>
                </div>

            </div>
        </div>
            </div>
        </form>

    @endforeach
</div>


@endsection

<?php
    function timez($date){
        $day = explode('/',$date);
        return $day;
    }
    function speechname($id){
        $name = \App\SpechModel::find($id)->get();
        return $name;
    }
    function monthname($date){
    $month = ['فروردین','اردیبهشت','خرداد','تیر','مرداد','شهریور','مهر','آبان','آذر','دی','بهمن','اسفند'];
    return $month[$date];
    }


    ?>