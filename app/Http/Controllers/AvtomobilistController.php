<?php

namespace App\Http\Controllers;

use App\Models\Avtomobil;
use Illuminate\Http\Request;

class AvtomobilistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avtomobilist = Avtomobil::orderBy('created_at','desc')->get();

        return view('avtomobil.index',[
            'avtomobilist' => $avtomobilist
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_avtomobil = new Avtomobil();
        $new_avtomobil -> mark = $request-> mark;
        $new_avtomobil -> gosnomer = $request-> gosnomer;
        $new_avtomobil -> normatopliva_summer = $request-> normatopliva_summer;
        $new_avtomobil -> normatopliva_winter = $request-> normatopliva_winter;
        $new_avtomobil -> gsm_end_new_day = $request-> gsm_end_new_day;
        $new_avtomobil -> speedometer_new_day = $request-> speedometer_new_day;

        $new_avtomobil -> save();

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
        return view('avtomobil.edit',[
            'avtomobil' => $avtomobil
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avtomobil  $avtomobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avtomobil $avtomobil)
    {
        $avtomobil -> mark = $request -> mark;
        $avtomobil -> gosnomer = $request -> gosnomer;
        $avtomobil -> normatopliva_summer = $request-> normatopliva_summer;
        $avtomobil -> normatopliva_winter = $request-> normatopliva_winter;
        $avtomobil -> gsm_end_new_day = $request-> gsm_end_new_day;
        $avtomobil -> speedometer_new_day = $request-> speedometer_new_day;

        $avtomobil->save();

        return redirect()->back()->withSuccess('Изменения приняты');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avtomobil  $avtomobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avtomobil $avtomobil)
    {
        $avtomobil -> delete();

        return redirect()->back()->withSuccess('Запись удалена');
    }
}
