<?php

namespace App\Http\Controllers;

use App\Models\SifBiodata;
use Illuminate\Http\Request;

class SifBiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('biodata.index');
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
     * @param  \App\Models\SifBiodata  $sifBiodata
     * @return \Illuminate\Http\Response
     */
    public function show(SifBiodata $sifBiodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SifBiodata  $sifBiodata
     * @return \Illuminate\Http\Response
     */
    public function edit(SifBiodata $sifBiodata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SifBiodata  $sifBiodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SifBiodata $sifBiodata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SifBiodata  $sifBiodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(SifBiodata $sifBiodata)
    {
        //
    }
}
