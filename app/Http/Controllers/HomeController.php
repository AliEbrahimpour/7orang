<?php

namespace App\Http\Controllers;

use App\RoidadModel;
use App\SeminarModel;
use App\SliderModel;
use App\SpechModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $seminar=SeminarModel::orderBy('id', 'DESC')->get();
        $roidad = RoidadModel::orderBy('id', 'DESC')->get();
        $spech=SpechModel::orderBy('id', 'DESC')->get();
        $slider=SliderModel::all();
        return view('Home.Show',compact(['roidad','spech','seminar','slider']));
    }

    public function store(Request $request)
    {
    }
}
