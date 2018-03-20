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
        $seminar=SeminarModel::orderBy('timestamp', 'INC')->paginate(5);
        $spech=SpechModel::orderBy('id', 'DESC')->paginate(5);
        $slider=SliderModel::all();
        return view('Home.Show',compact(['spech','seminar','slider']));
    }
    public function index()
    {
        $seminar=SeminarModel::orderBy('id', 'DESC')->get();
        $roidad = RoidadModel::orderBy('id', 'DESC')->get();
        $spech=SpechModel::orderBy('id', 'DESC')->get();
        $slider=SliderModel::all();
        return view('Home.index',compact(['roidad','spech','seminar','slider']));
    }
    public function store(Request $request)
    {
    }
}
