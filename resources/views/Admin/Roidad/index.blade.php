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
                        @if($roidd->spech_id == -1)
                                <?php $i++; ?>
                            @if($i%2 == 0)
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="panel-body">
                                                        <span class="arrow-alt"></span>
                                                        <span class="timeline-icon purple"></span>
                                                        <span class="timeline-date">{{$roidd->hour}}</span>
                                                        <h2 style="color: #00A000">{{$roidd->title}}</h2>
                                                        <h1 class="purple">{{$roidd->date}}</h1>
                                                        <p> {{$roidd->description}}</p>
                                                        <div class="notification">
                                                            <h4><i class=" icon-exclamation-sign"></i> برای مشاهده اطلاعات بیشتر و ویرایش <a href="<?= url('/roidad/'.$roidd->id.'/edit') ?>">بر روی این گزینه کلیک کنید</a></h4>
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
                                                        <span class="timeline-icon purple"></span>
                                                        <span class="timeline-date">{{$roidd->hour}}</span>
                                                        <h2 style="color: #00A000">{{$roidd->title}}</h2>
                                                        <h1 class="purple">{{$roidd->date}}</h1>
                                                        <p> {{$roidd->description}}</p>
                                                        <div class="notification">
                                                            <h4><i class=" icon-exclamation-sign"></i> برای مشاهده اطلاعات بیشتر و ویرایش <a href="<?= url('/roidad/'.$roidd->id.'/edit') ?>">بر روی این گزینه کلیک کنید</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    @endif
                            @endif
                @endforeach





                </div>

                <div class="clearfix">&nbsp;</div>
            </div>
        </section>
        <!--timeline end-->
    </div>
</div>

@endsection