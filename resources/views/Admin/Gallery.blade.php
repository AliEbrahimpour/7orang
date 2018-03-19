@extends('Layouts.AdminLayout')

@section('title')
    گالری
@endsection

@section('style')

    <link rel="stylesheet" href="<?= url('css/magnific-popup.css') ?>">
    <script src="<?= url('js/jquery.min.js') ?>"></script>
    <script src="<?= url('js/jquery.magnific-popup.min.js') ?>"></script>

    <link rel="stylesheet" href="<?= url('css/slideshow.css') ?>" />
    <script src="<?= url('js/slideshow.js') ?>"></script>
@endsection

@section('content')
    <div class="zoom-gallery">
        <!--

        Width/height ratio of thumbnail and the main image must match to avoid glitches.

        If ratios are different, you may add CSS3 opacity transition to the main image to make the change less noticable.

         -->
        <a href="<?= url('images/bg-01.jpg') ?>"  title="Into The Blue" style="width:193px;height:125px;">
            <img src="<?= url('images/bg-01.jpg') ?>" width="193" height="125">
        </a>
        <a href="http://farm3.staticflickr.com/2856/9207329420_7f2a668b06_o.jpg" data-source="http://500px.com/photo/32554131" title="Light Sabre" style="width:82px;height:125px;">
            <img src="http://farm3.staticflickr.com/2856/9207329420_e485948b01_t.jpg" width="82px" height="125">
        </a>
    </div>


@endsection