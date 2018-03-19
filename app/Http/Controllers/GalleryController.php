<?php

namespace App\Http\Controllers;

use App\GalleryModel;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Gallery');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GalleryModel  $galleryModel
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryModel $galleryModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GalleryModel  $galleryModel
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleryModel $galleryModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GalleryModel  $galleryModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GalleryModel $galleryModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GalleryModel  $galleryModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryModel $galleryModel)
    {
        //
    }
}
