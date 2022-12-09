<?php

namespace App\Http\Controllers;

use App\Models\SifAddfile;
use Illuminate\Http\Request;

class SifAddfileController extends Controller
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
        $addfiles = SifAddfile::all();
        return view('addfile.index', compact('addfiles'));
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
        $validateData = $request->validate([
            'judul_file'=> 'required',
            'foto'=> 'required',
        ]);
        if ($request->file('foto')) {
            $validateData['foto'] = $request->file('foto')->store('post-image');
        }

        SifAddfile::create($validateData);


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SifAddfile  $sifAddfile
     * @return \Illuminate\Http\Response
     */
    public function show(SifAddfile $sifAddfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SifAddfile  $sifAddfile
     * @return \Illuminate\Http\Response
     */
    public function edit(SifAddfile $sifAddfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SifAddfile  $sifAddfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SifAddfile $sifAddfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SifAddfile  $sifAddfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(SifAddfile $sifAddfile)
    {
        //
    }
}
