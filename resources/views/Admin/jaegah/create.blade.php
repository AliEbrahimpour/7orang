@extends('Layouts.AdminLayout')


@section('title')
    تعیین جایگاه ها
@endsection
@section('style')
    <script src="<?= url('js/jquery.min.js') ?>"></script>
    <script src="<?= url('js/jquery.Jcrop.js') ?>"></script>
    <script type="text/javascript">

        jQuery(function($){

            var jcrop_api;

            $('#target').Jcrop({
                onChange:   showCoords,
                onSelect:   showCoords,
                onRelease:  clearCoords
            },function(){
                jcrop_api = this;
            });

            $('#coords').on('change','input',function(e){
                var x1 = $('#x1').val(),
                    x2 = $('#x2').val(),
                    y1 = $('#y1').val(),
                    y2 = $('#y2').val();
                jcrop_api.setSelect([x1,y1,x2,y2]);
            });

        });

        // Simple event handler, called from onChange and onSelect
        // event handlers, as per the Jcrop invocation above
        function showCoords(c)
        {
            $('#x1').val(c.x);
            $('#y1').val(c.y);
            $('#x2').val(c.x2);
            $('#y2').val(c.y2);
            $('#w').val(c.w);
            $('#h').val(c.h);
        };

        function clearCoords()
        {
            $('#coords input').val('');
        };



    </script>
    <style>
        .jcrop-holder{
            margin: 0 auto;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div style="padding:50px;">
            <div class="container" style="padding:30px;background-color: rgba(0,0,0,.6)">
                <div class="alert alert-info" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <P style="font-size: 20px;">
                        لطفا برای تعیین جایگاه جدید قسمت مربوطه را انتخاب نمایید و دکمه افزودن را بزنید .
                    </P>
                </div>
                <div>
                    <div class="jc-demo-box">

                        <div>
                            <div style="margin: 0 auto;">
                                <img src="<?= url('images/1519243268.jpg') ?>" style="width:350px;height: 350px;" id="target" alt="[Jcrop Example]" />
                            </div>

                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
                <div>

                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        افزودن جایگاه
                    </button>

                </div>
            </div>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">مشخصات جایگاه</h4>
                        </div>
                        <form id="coords" class="coords" action="<?= url('/rmseminar') ?>" method="POST">
                            <div class="modal-body">
                                    {{csrf_field()}}
                                <div class="inline-labels" >
                                    <label visibility: hidden>X1 <input  type="text" size="4" id="x1" name="x1" /></label>
                                    <label visibility: hidden>Y1 <input type="text" size="4" id="y1" name="y1" /></label>
                                    <label visibility: hidden>X2 <input type="text" size="4" id="x2" name="x2" /></label>
                                    <label visibility: hidden>Y2 <input type="text" size="4" id="y2" name="y2" /></label>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label style="float: left;padding-top:6px;" for="name">نام جایگاه</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control col-sm-8" name="name" placeholder="نام جایگاه را وارد نمایید">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label style="float: left;padding-top:6px;" for="capecity">ظرفیت</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control col-sm-8" name="capecity" placeholder="لطفا به عدد وارد نمایید">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label style="float: left;padding-top:6px;" for="price">قیمت بلیط </label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control col-sm-8" name="price" placeholder="لطفا به عدد وارد نمایید">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label style="float: left;padding-top:6px;" for="count_radif">تعداد ردیف</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control col-sm-8" name="count_radif" placeholder="تعداد ردیف را به عدد وارد نمایید">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label style="float: left;padding-top:6px;" for="count_sandali">تعداد صندلی</label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control col-sm-8" name="count_sandali" placeholder="تعداد صندلی در هر ردیف را وارد نمایید">
                                        </div>
                                    </div>
                                </div>


                        </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                            <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection