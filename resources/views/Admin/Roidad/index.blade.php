@extends('Layouts.AdminLayout')

@section('title')
     مدیریت رویداد ها
@endsection

@section('content')

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
                @foreach($roidad->all() as $roidd )
                    @foreach($spech->all() as $spch)
                        @if($roidd->spech_id == $spch->id)
                                <?php $i++; ?>
                            @if($i%2 == 0)
                            <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon red"></span>
                                    <span class="timeline-date">{{$roidd->date}}</span>
                                    <h1 style="color: #0e76e6">{{$roidd->title}}</h1>
                                    <h4><a href="#">{{$spch->name}}</a></h4>
                                    <div class="album">
                                        <a href="#">
                                            <img alt="" src="<?= Url('poster/'.$roidd->poster); ?>" width="80px" height="80px">
                                        </a>

                                    </div>
                                    <div style="margin-top: 110px;">
                                    <div class="notification">
                                        <i class=" icon-exclamation-sign"></i> {{$roidd->description}} <a href="#">اطلاعات بیشتر</a>
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
                                                    <span class="timeline-date">{{$roidd->date}}</span>
                                                    <h1 style="color: #0e76e6">{{$roidd->title}}</h1>
                                                    <h4><a href="#">{{$spch->name}}</a></h4>
                                                    <div class="album">
                                                        <a href="#">
                                                            <img alt="" src="<?= Url('poster/'.$roidd->poster); ?>" width="80px" height="80px">
                                                        </a>

                                                    </div>
                                                    <div style="margin-top: 110px;">
                                                        <div class="notification">
                                                            <i class=" icon-exclamation-sign"></i> {{$roidd->description}} <a href="#">اطلاعات بیشتر</a>
                                                        </div>
                                                    </div>                                                </div>
                                            </div>
                                        </div>
                                    </article>
                            @endif

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

@endsection