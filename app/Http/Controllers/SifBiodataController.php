<?php

namespace App\Http\Controllers;

use App\Models\SifBiodata;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class SifBiodataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodatas = SifBiodata::all();
        return view('biodata.index', compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request, [
            'nama',
            'tempat',
            'tanggal_lahir',
            'no_telfon',
            'daftar_suara'
        ]);

        $biodata = new SifBiodata();
        $biodata->user_id = Auth::user()->id;
        $biodata->nama = $request->nama;
        $biodata->tempat = $request->tempat;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->no_telfon = $request->no_telfon;
        $biodata->daftar_suara = $request->daftar_suara;
        $biodata->save();

        // dd($biodata);

        return redirect()->back();
        
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
