@extends('Layouts.AdminLayout')


@section('title')

    ایجاد اسلایدر

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
@endsection

@section('content')
    <div class="container">

        <div class="thmnl">

            {!! Form::open(['url'=>'/slider','class'=>'form-horizontal','method'=>'post', 'files' => true]) !!}

            <div class="container">
                <div style="border-radius: 0px;border: 1px solid #faebcc;" class=" panel panel-warning">
                    <div style="font-size: 25px; padding: 10px;" class="panel-heading">اطلاعات اسلایدر</div>
                    <div style="padding: 25px;" class="panel-body">
                        <div class="form-group">
                            {{Form::label('title','متن اصلی',['class'=>'lbel control-label col-sm-3'])}}
                            <div class="col-sm-7">
                                {{ Form::text('content',null,['class'=>'form-control','placeholder'=>'متن اصلی که روی عکس قرار گیرد' ]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('description','متن فرعی',['class'=>'control-label col-sm-3'])}}
                            <div class="col-sm-7">
                                {{ Form::textarea('text',null,['class'=>'form-control','style'=>'height:150px;width:570px;','maxlength'=>'150','placeholder'=>'توضیحات خود را در این قسمت وارد نمایید' ]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">پوستر</label>
                            <div class="col-sm-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-success">
                                            <span class="fileupload-new">انتخاب عکس</span>
                                            <input type="file" name="image" /></span>
                                        <span class="fileupload-exists">تغییر </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">حذف</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="form-actions" style="text-align: center;">
                {{Form::submit('ذخیره اسلایدر جدید',['class'=>'btn btn-primary btn-lg'])}}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('script')

@endsection
