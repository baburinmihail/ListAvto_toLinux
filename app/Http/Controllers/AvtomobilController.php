<?php

namespace App\Http\Controllers;

use App\Models\Avtomobil;
use App\Http\Requests\StoreAvtomobilRequest;
use App\Http\Requests\UpdateAvtomobilRequest;

class AvtomobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('avtomobil.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('avtomobil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAvtomobilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAvtomobilRequest $request)
    {
        $new_avtomobil = new Avtomobil();
        $new_avtomobil -> mark = $request-> mark;
        $new_avtomobil -> gosnomer = $request-> gosnomer;
        $new_avtomobil -> normatopliva = $request-> normatopliva;

        return redirect()->back()->withSuccess('Запись добавленна');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avtomobil  $avtomobil
     * @return \Illuminate\Http\Response
     */
    public function show(Avtomobil $avtomobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avtomobil  $avtomobil
     * @return \Illuminate\Http\Response
     */
    public function edit(Avtomobil $avtomobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAvtomobilRequest  $request
     * @param  \App\Models\Avtomobil  $avtomobil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAvtomobilRequest $request, Avtomobil $avtomobil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avtomobil  $avtomobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avtomobil $avtomobil)
    {
        //
    }
}
