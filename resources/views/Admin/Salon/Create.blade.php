@extends('Layouts.AdminLayout')


@section('title')

    افزودن سالن جدید

@endsection


@section('style')

    <link rel="stylesheet" href="<?= url('css/bootstrap-fileupload.min.css') ?>" />
    <style>
        .thmnl{
            border: solid 1px black;
            padding: 25px;
            border-radius: 25px 25px 5px 5px;
        }
        thmnl input{
            color: black;
        }
    </style>

@endsection
@section('content')
    <div class="container">

        <div>

        </div>

        <div class="thmnl">


                {!! Form::open(['url'=>'/salon','class'=>'form-horizontal','method'=>'post', 'files' => true]) !!}
                <div class="form-group">
                    {{Form::label('title','عنوان خبر',['class'=>'control-label col-sm-3'])}}
                    <div class="col-sm-7">
                        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'عنوان را وارد کنید' ]) }}
                    </div>
                </div>

                <div class="form-group">
                    {{Form::label('short_news','خلاصه خبر',['class'=>'control-label col-sm-3'])}}
                    <div class="col-sm-7">
                        {{ Form::textarea('location',null,['class'=>'form-control','style'=>'height:150px;','maxlength'=>'150','placeholder'=>'حداکثر 150 کاراکتر' ]) }}
                    </div>
                </div>


                <div class="form-group">
                    {{Form::label('full_news','متن کامل خبر',['class'=>'control-label col-sm-3'])}}
                    <div class="col-sm-7">
                        {{ Form::textarea('map',null,['class'=>'form-control ckeditor','placeholder'=>'کتن کامل خبر را وارد کنید' ]) }}
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-lg-4">آپلود عکس</label>
                    <div class="col-lg-8">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                            <div>
                                <span class="btn btn-file btn-success"><span class="fileupload-new">انتخاب عکس</span><span class="fileupload-exists">تغییر </span><input type="file" name="img" /></span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">حذف</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-actions" style="text-align: center;">
                    {{Form::submit('ذخیره خبر جدید',['class'=>'btn btn-primary btn-lg'])}}
                </div>


                {!! Form::close() !!}

        </div>

    </div>
@endsection


@section('script')
    <script src="<?= Url('js/bootstrap-fileupload.js'); ?>"></script>
@endsection
