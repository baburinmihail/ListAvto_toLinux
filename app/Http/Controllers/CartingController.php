<?php

namespace App\Http\Controllers;

use App\Models\Karting;
use Illuminate\Http\Request;

class CartingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karting = Karting::orderBy('created_at','desc')->get();

        return view('car.index',[
            'karting' =>$karting
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_karting = new Karting();
        $new_karting -> nameC = $request -> nameC;
        $new_karting -> state_number_car = $request -> state_number_car;
        $new_karting -> consumption_rate_car = $request -> consumption_rate_car;

        $new_karting -> save();

        return redirect()->back()->withSuccess('Запись добавленна');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karting  $karting
     * @return \Illuminate\Http\Response
     */
    public function show(Karting $karting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karting  $karting
     * @return \Illuminate\Http\Response
     */
    public function edit(Karting $karting)
    {
        return view('car.kartingEdit',[
            "karting" => $karting
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karting  $karting
     * @return \Illuminate\Http\Response
     */
    public function update( Karting $karting, Request $request)
    {
        $karting -> nameC = $request -> nameC;

        $karting -> save();

        return redirect()->back()->withSuccess('Запись изменина');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karting  $karting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karting $karting)
    {
        $karting -> delete();

        return redirect()->back()->withSuccess('Запись удалена');
    }
}
