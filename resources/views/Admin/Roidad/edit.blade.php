@extends('Layouts.AdminLayout')


@section('title')

    ویرایش رویداد

@endsection


@section('style')

    <link rel="stylesheet" href="<?= url('css/bootstrap-fileupload.min.css') ?>" />
    <style>
        .thmnl{
            font-family: "B Yekan";
            border: solid 1px black;
            padding: 25px;
            border-radius: 25px 25px 5px 5px;
        }
        .thmnl input{
            color: black;
        }
        label{
            text-align: left !important;
        }
    </style>
    <link rel="stylesheet" href="<?= url('css/js-persian-cal.css') ?>">
    <script src="<?= url('js/js-persian-cal.min.js') ?>"></script>

@endsection
@section('content')
    <div class="container">

        <div class="thmnl">

            {!! Form::open(['url'=>'/roidad/'.$roidad->id.'/edit','class'=>'form-horizontal','method'=>'POST', 'files' => true]) !!}
            {{method_field('PATCH')}}
            <div class="container">
                <div style="border-radius: 0px;border: 1px solid #faebcc;" class=" panel panel-warning">
                    <div style="font-size: 25px; padding: 10px;" class="panel-heading">اطلاعات رویداد</div>
                    <div style="padding: 25px;" class="panel-body">
                        <div class="form-group">
                            {{Form::label('titles','عنوان رویداد',['class'=>'lbel control-label col-sm-3'])}}
                            <div class="col-sm-7">
                                {{ Form::text('title',$roidad->title,['class'=>'form-control','placeholder'=>'عنوانی برای رویداد' ]) }}
                            </div>
                        </div>

                        <div class="form-group" onload="startTime()">
                            {{Form::label('date3','تاریخ برگزاری',['class'=>'control-label col-sm-3'])}}
                            <div class="col-sm-7" id="txt">
                                {{Form::input('text', 'date',$roidad->date , ['class' => 'pdate','id' => 'pcal5'])  }}
                                {{Form::input('time', 'hour', $roidad->hour, ['id' => 'myTime','placeholder' => 'ساعت شروع'])  }}
                                {{Form::input('int', 'timestamp', null, ['class' => 'pdate wide','id' => 'extra','style' => 'visibility: hidden'])  }}

                            </div>
                        </div>


                        <div class="form-group">
                            {{Form::label('description','توضیحات رویداد',['class'=>'control-label col-sm-3'])}}
                            <div class="col-sm-7">
                                {{ Form::textarea('description',$roidad->description,['class'=>'form-control','style'=>'height:150px;','maxlength'=>'150','placeholder'=>'توضیحات خود را در این قسمت وارد نمایید' ]) }}
                            </div>
                        </div>

                    </div>
                </div>
                <div class="form-actions" style="text-align: center;">
                    {{Form::submit('ویرایش رویداد ',['class'=>'btn btn-primary btn-lg'])}}
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection


@section('script')
    <script>
        function myFunction() {
            var x = document.getElementById("myTime").value;
            document.getElementById("demo").innerHTML = x;
        }
    </script>

    <script>
        var objCal5 = new AMIB.persianCalendar( 'pcal5', {

                extraInputID: 'extra',
                extraInputFormat: 'JD'
            }
        );
    </script>
    <script src="<?= Url('js/bootstrap-fileupload.js'); ?>"></script>
@endsection
