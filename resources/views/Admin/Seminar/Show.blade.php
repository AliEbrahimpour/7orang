@extends('Layouts.HomeLayout')


@section('title')
    مشاهده سمینار
@endsection


@section('style')
    <style>
    .blur {-webkit-filter: blur(4px);
        filter: blur(4px);
        position:absolute;
        z-index:2;
        top:0; left:0;
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
    .back {
        position:relative;
    }
    .centered {
        position: absolute;
        top: 200px;
        left: 50%;
        transform: translate(-80%, -50%);
        color: #6ccac9;
        z-index:1;
    }
    </style>
@endsection

@section('content')

    <div class="back">
    <img class="blur" src="<?= Url('poster/1520108429.jpg'); ?>" alt="Pineapple" width="1800px" height="500px">
    <img class="thumb" src="<?= Url('poster/1520678933.jpg'); ?>">
    <div class="centered">Centered</div>
    </div>

@endsection

@section('script')

@endsection