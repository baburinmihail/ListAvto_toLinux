<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('created_at','desc')->get();

        return view('car.index',[
            'cars' =>$cars
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
        $new_cars = new Car();
        $new_cars -> nameC = $request -> nameC;
        $new_cars -> state_number_car = $request -> state_number_car;
        $new_cars -> consumption_rate_car = $request -> consumption_rate_car;

        $new_cars -> save();

        return redirect()->back()->withSuccess('Запись добавленна');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('car.edit',[
            "car" =>$car
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $car -> nameC = $request -> nameC;
        $car -> state_number_car = $request -> state_number_car;
        $car -> consumption_rate_car = $request -> consumption_rate_car;

        $car -> save();

        return redirect()->back()->withSuccess('Запись изменина');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car -> delete();

        return redirect()->back()->withSuccess('Запись удалена');
    }
}
