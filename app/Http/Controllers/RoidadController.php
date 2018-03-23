<?php

namespace App\Http\Controllers;


use App\SalonModel;
use App\SeminarModel;
use App\SpechModel;
use Illuminate\Http\Request;

class RoidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roidad = SeminarModel::orderBy('id', 'DESC')->get();
        $spech=SpechModel::orderBy('id', 'DESC')->get();
        return view('Admin.Roidad.index',compact(['roidad','spech']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salon=SalonModel::all()->pluck('name','id');
        return view('Admin.Roidad.Create',['salon'=>$salon]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $record = new SeminarModel();

        $record->title = $request->input('title');
        $record->date = $request->input('date');
        $record->description = $request->input('description');
        $record->poster='0';
        $record->hour = $request->input('hour');
        $record->time = 0;
        $record->status=0;
        $record->timestamp=$request->input('timestamp');;
        $record->salon_id = 0;
        $record->Spech_id=-1;
        if($record->save()) {
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Request  $Request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $Request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Request  $Request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roidad = SeminarModel::findOrFail($id);
        return view('Admin.Roidad.edit',compact(['roidad']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Request  $Request
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $record = SeminarModel::find($id);
        $record->title = $request->input('title');
        $record->date = $request->input('date');
        $record->description = $request->input('description');
        $record->poster='0';
        $record->hour = $request->input('hour');
        $record->time = 0;
        $record->status=0;
        $record->timestamp=$request->input('timestamp');;
        $record->salon_id = 0;
        $record->Spech_id=-1;
        if($record->update()) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Request  $Request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = SeminarModel::find($id);
        $record->delete();
    }
}
