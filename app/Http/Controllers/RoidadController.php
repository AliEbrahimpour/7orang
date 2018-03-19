<?php

namespace App\Http\Controllers;

use App\RoidadModel;

use App\SalonModel;
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
        $roidad = RoidadModel::orderBy('id', 'DESC')->get();
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

        $record = new SpechModel();
        $record->name = $request->input('img');
        if( $request->hasFile('img') ) {
            $FileName = time() . '.' . $request->file('img')->getClientOriginalExtension();
            if ($request->file('img')->move('img', $FileName)) {
                $record->img = $FileName;
            }
        }
        $record->s_description = $request->input('s_description');
        $record->save();
        $Spech_id = $record->id;


        $record = new RoidadModel();

        $record->title = $request->input('title');
        $record->description = $request->input('description');
        $record->salon_id = $request->input('salon_id');
        $record->date = $request->input('date');
        $record->Spech_id=$Spech_id;
        $record->hour = $request->input('hour');
        $record->time = $request->input('time');
        if( $request->hasFile('poster') ){
            $FileName = time().'.'.$request->file('poster')->getClientOriginalExtension();
            if($request->file('poster')->move('poster',$FileName)){
                $record->poster= $FileName;
                if($record->save()) {
                    return redirect()->back();
                }
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoidadModel  $roidadModel
     * @return \Illuminate\Http\Response
     */
    public function show(RoidadModel $roidadModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoidadModel  $roidadModel
     * @return \Illuminate\Http\Response
     */
    public function edit(RoidadModel $roidadModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoidadModel  $roidadModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoidadModel $roidadModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoidadModel  $roidadModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoidadModel $roidadModel)
    {
        //
    }
}
