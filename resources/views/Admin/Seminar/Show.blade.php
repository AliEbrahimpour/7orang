@extends('Layouts.HomeLayout')


@section('title')
    مشاهده سمینار
@endsection


@section('style')
    <style>
        .home-intro {
            background: Url(<?= Url('poster/1520679211.jpg'); ?>);
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            margin-bottom: 65px;
            width: 100%;
            height: 100%;
            padding: 100px 0 130px;
            text-align: center;
        }
        *, :after, :before {
            box-sizing: border-box;
            outline: none!important;
        }
        user agent stylesheet
        div {
            display: block;
        }
        .thumb {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 200px;
            float: left;
            position:absolute;
            z-index:3;
            top:300px; left:50px;
        }
        .thumb:hover {
            box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
        }
    </style>
@endsection

@section('content')

    <div class="row">
        <div class="home-intro">
            <h2 >سمینار فلان</h2>
            <p>
               <br>
                در حال برگزاری
            </p>
            <img class="thumb" src="<?= Url('poster/1520678933.jpg'); ?>">
        </div>
    </div>
@endsection

@section('script')

@endsection