<?php

namespace App\Http\Controllers;

use App\SalonModel;
use App\SeminarModel;
use App\SpechModel;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seminar=SeminarModel::all();
        return view('Admin.Seminar.index',['seminar'=>$seminar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salon=SalonModel::all()->pluck('name','id');

        //var_dump($salon);
        return view('Admin.Seminar.Create',['salon'=>$salon]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $record = new SpechModel();
        $record->name = $request->input('name');
        if( $request->hasFile('img') ) {
            $FileName = time() . '.' . $request->file('img')->getClientOriginalExtension();
            if ($request->file('img')->move('img', $FileName)) {
                $record->img = $FileName;
            }
        }
        $record->s_description = $request->input('s_description');
        $record->save();
        $Spech_id = $record->id;


        $record = new SeminarModel();
        $record->title = $request->input('title');
        $record->date = $request->input('date');
        $record->hour = $request->input('hour');
        $record->time = $request->input('time');
        $record->timestamp = $request->input('timestamp');
        $record->description = $request->input('description');
        $record->salon_id = $request->input('salon_id');
        $record->Spech_id=$Spech_id;

        if( $request->hasFile('poster') ){
            $FileName = time().'.'.$request->file('poster')->getClientOriginalExtension();
            if($request->file('poster')->move('poster',$FileName)){
                $record->poster= $FileName;
            }
        }


        $record->status=1;
        if($record->save()) {
            return redirect()->back();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salon=SalonModel::all()->pluck('name','id');
        $spech=SpechModel::all();
        $seminar=SeminarModel::all();
        //var_dump($salon);
        return view('Admin.Seminar.Show',compact(['salon','spech','seminar']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $seminar = SeminarModel::findOrFail($id);
        $salon = SalonModel::where('id' , $seminar->salon_id)->first();
        $spech = SpechModel::where('id' , $seminar->spech_id)->first();

        return view('Admin.Seminar.edit',compact(['salon','spech','seminar']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
