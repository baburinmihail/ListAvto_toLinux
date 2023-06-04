<?php
/**
Если в краце, тут расположенна основная логика
 * index основная страница с филтрацией, $peapls рандомная, в которую присваиваю модель Peaple
 * create и store отвечают за форму новых записей
 * edit и update отвечают за редактру , $peaple создалась при создании Ресурс контролера с парметром --model=Peaple
 * что дало автоматическую привязку к этой модели
 */
namespace App\Http\Controllers;

use App\Models\Peaple;
use Illuminate\Http\Request;

class PeapleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peapls = Peaple::orderBy('created_at','desc')->get();

        return view('vodila.index',[
            'peapls' =>$peapls
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vodila.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_peaple = new Peaple();
        $new_peaple -> nameD = $request -> nameD;
        $new_peaple -> surnameD = $request -> surnameD;
        $new_peaple -> atronymicD = $request -> atronymicD;
        $new_peaple -> fullname = $request -> fullname;

        $new_peaple -> save();

        return redirect()->back()->withSuccess('Запись добавленна');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peaple  $peaple
     * @return \Illuminate\Http\Response
     */
    public function show(Peaple $peaple)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peaple  $peaple
     * @return \Illuminate\Http\Response
     */
    public function edit(Peaple $peaple)
    {
        return view('vodila.edit',[
            "peaple" =>$peaple
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peaple  $peaple
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peaple $peaple)
    {
        $peaple -> nameD = $request -> nameD;
        $peaple -> surnameD = $request -> surnameD;
        $peaple -> atronymicD = $request -> atronymicD;
        $peaple -> fullname = $request -> fullname;

        $peaple -> save();

        return redirect()->back()->withSuccess('Запись изменина');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peaple  $peaple
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peaple $peaple)
    {
        $peaple -> delete();

        return redirect()->back()->withSuccess('Запись удалена');
    }
}
