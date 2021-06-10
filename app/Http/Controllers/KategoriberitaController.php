<?php

namespace App\Http\Controllers;

use App\Models\Kategoriberita;
use Illuminate\Http\Request;

class KategoriberitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kat_berita = Kategoriberita::all();
        return view('Admin.kat-content.k_berita',['kat_berita'=>$kat_berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.kat-content.show.create_k_berita');
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
     * @param  \App\Models\Kategoriberita  $kategoriberita
     * @return \Illuminate\Http\Response
     */
    public function show(Kategoriberita $kategoriberita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategoriberita  $kategoriberita
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategoriberita $kategoriberita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategoriberita  $kategoriberita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategoriberita $kategoriberita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategoriberita  $kategoriberita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategoriberita $kategoriberita)
    {
        //
    }
}
