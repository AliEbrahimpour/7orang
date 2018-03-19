@extends('Layouts.AdminLayout')


@section('title')

    ایجاد سمینار جدید

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

            {!! Form::open(['url'=>'/seminar','class'=>'form-horizontal','method'=>'post', 'files' => true]) !!}

            <div class="container">
                <div style="border-radius: 0px;border: 1px solid #faebcc;" class=" panel panel-warning">
                    <div style="font-size: 25px; padding: 10px;" class="panel-heading">اطلاعات سمینار</div>
                         <div style="padding: 25px;" class="panel-body">
                <div class="form-group">
                    {{Form::label('title','عنوان سمینار',['class'=>'lbel control-label col-sm-3'])}}
                    <div class="col-sm-7">
                        {{ Form::text('title',null,['class'=>'form-control','placeholder'=>'عنوانی برای سمینار' ]) }}
                    </div>
                </div>

                <div class="form-group" onload="startTime()">
                    {{Form::label('date3','تاریخ برگزاری',['class'=>'control-label col-sm-3'])}}
                    <div class="col-sm-7" id="txt">
                        <input name="date" type="text" id="pcal1" class="pdate">
                        <input name="hour"  value="16:32" id="myTime" type="time"  placeholder="ساعت شروع">
                    </div>
                </div>
                 <div class="form-group">
                     {{Form::label('time','مدت زمان برگزاری (دقیقه)',['class'=>'lbel control-label col-sm-3'])}}
                     <div class="col-sm-7">
                         {{ Form::text('title',null,['class'=>'form-control','placeholder'=>'لطفا زمان به دقیقه و فقط میزان عدد آن را وارد نمایید' ]) }}
                     </div>
                 </div>

            <div class="form-group">
                {{Form::label('description','توضیحات سمینار',['class'=>'control-label col-sm-3'])}}
                <div class="col-sm-7">
                    {{ Form::textarea('description',null,['class'=>'form-control','style'=>'height:150px;','maxlength'=>'150','placeholder'=>'توضیحات خود را در این قسمت وارد نمایید' ]) }}
                </div>
            </div>

            <div class="form-group">
                    <label class="control-label col-sm-3">پوستر</label>
                    <div class="col-sm-9">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                            <div>
                                <span class="btn btn-file btn-success"><span class="fileupload-new">انتخاب عکس</span><span class="fileupload-exists">تغییر </span><input type="file" name="poster" /></span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">حذف</a>
                            </div>
                        </div>
                    </div>
                </div>


            <div class="form-group">
                {{Form::label('salon_id','سالن محل برگزاری',['class'=>'control-label col-sm-3'])}}
                <div class="col-sm-7">
                {{Form::select('salon_id',$salon,['class'=>'form-control','style'=>'width:100%;']) }}
                </div>
            </div>



        </div>
                 </div>
            </div>

            <div class="container">
                <div style="border-radius: 0px;border: 1px solid #faebcc;" class=" panel panel-warning">
                <div style="font-size: 25px; padding: 10px;" class="panel-heading">اطلاعات سخنران</div>
                    <div style="padding: 25px;" class="panel-body">
                    <div class="form-group">
                    {{Form::label('name','نام سخنران',['class'=>'control-label col-sm-3'])}}
                    <div class="col-sm-7">
                        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'نام سخنران را وارد کنید' ]) }}
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">تصویر سخنران</label>
                    <div class="col-sm-9">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                            <div>
                                <span class="btn btn-file btn-success"><span class="fileupload-new">انتخاب عکس</span><span class="fileupload-exists">تغییر </span><input type="file" name="img" /></span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">حذف</a>
                            </div>
                        </div>
                    </div>
                </div>


                        <div class="form-group">
                            {{Form::label('s_description','اطلاعات سخنران',['class'=>'control-label col-sm-3'])}}
                            <div class="col-sm-7">
                                {{ Form::textarea('s_description',null,['class'=>'form-control','style'=>'height:150px;','maxlength'=>'150','placeholder'=>'شرح اطلاعات سخنران' ]) }}
                            </div>
                        </div>

                    </div>
                    <div class="form-actions" style="text-align: center;">
                {{Form::submit('ذخیره سمینار جدید',['class'=>'btn btn-primary btn-lg'])}}
            </div>
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
        var objCal1 = new AMIB.persianCalendar( 'pcal1' , {
            initialDate: '1396/1/1',
        });
    </script>
    <script src="<?= Url('js/bootstrap-fileupload.js'); ?>"></script>
@endsection
