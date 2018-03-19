@extends('Layouts.AdminLayout')


@section('title')

    مشاهده سمینار جدید

@endsection


@section('style')

    <link rel="stylesheet" href="<?= url('css/bootstrap-fileupload.min.css') ?>" />
    <style>
        .thmnl{
            font-family: "B Yekan";
            padding: 25px;
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

            {!! Form::model($seminar,['method'=>'PATCH','url'=>['seminar/update',$seminar->id] , 'files'=>true]) !!}

            <div class="container">
                <div style="border-radius: 0px;border: 1px solid #faebcc;" class=" panel panel-warning">
                    <div style="font-size: 25px; padding: 10px;" class="panel-heading">اطلاعات سمینار</div>
                    <div style="padding: 25px;" class="panel-body">
                        <div class="form-group">
                            {{Form::label('title','عنوان سمینار',['class'=>'lbel control-label col-sm-3'])}}
                            <div class="col-sm-7">
                                {{ Form::text('title',null,['class'=>'form-control','placeholder'=>'عنوان را وارد کنید' ]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('date','تاریخ برگزاری',['class'=>'control-label col-sm-3'])}}
                            <div class="col-sm-7">
                                <input name="date" type="text" id="pcal1" class="pdate">
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('description','توضیحات سمینار',['class'=>'control-label col-sm-3'])}}
                            <div class="col-sm-7">
                                {{ Form::textarea('description',null,['class'=>'form-control','style'=>'height:150px;','maxlength'=>'150','placeholder'=>'حداکثر 150 کاراکتر' ]) }}
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
                                {{ Form::textarea('s_description',null,['class'=>'form-control','style'=>'height:150px;','maxlength'=>'150','placeholder'=>'حداکثر 150 کاراکتر' ]) }}
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
        var objCal1 = new AMIB.persianCalendar( 'pcal1' , {
            initialDate: '1396/1/1',
        });
    </script>
    <script src="<?= Url('js/bootstrap-fileupload.js'); ?>"></script>
@endsection
