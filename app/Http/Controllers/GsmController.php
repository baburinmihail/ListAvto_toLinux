<?php

/**
 Если кто нибудь, будет делать контролеры , выбирай простые имена, для моделей,
 * название в url и т.д так как могут возникнуть проблемы с редактурой данных
 * из базы.
 */
namespace App\Http\Controllers;

use App\Filters\ListGsmFilter;
use App\Models\Avtomobil;
use App\Models\ListGsm;
use App\Models\Peaple;
use Illuminate\Http\Request;

use App\Exports\GsmExport;
use App\Exports\ListExport;

use Maatwebsite\Excel\Facades\Excel;
use PDF;


class GsmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ListGsmFilter $request)
    {
        $gsm = ListGsm::filter($request)->paginate(10);
        //$gsm = ListGsm::orderBy('created_at','desc')->get();
        $categories = Avtomobil::all();


        return view('listgsm.index',[
            'gsm' => $gsm,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
        $peaple = Peaple::orderBy('created_at','desc')->get();
        $avtomobilist = Avtomobil::orderBy('created_at','desc')->get();


        return view('listgsm.create',[
            'peaple'=>$peaple,
            'avtomobilist' => $avtomobilist
        ]);
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Models\Avtomobil  $avtomobil
     * @param  \App\Models\Peaple  $peaple
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Peaple $peaple, Avtomobil  $avtomobil)
    {
        /**
        $new_gsm = new ListGsm();

        $avtomobil -> gsm_end_new_day = $request-> gsm_end_new_day;
        $avtomobil -> speedometer_new_day = $request-> speedometer_new_day;

        $new_gsm -> title = $request -> title;
        $new_gsm -> speedometer_end = $request -> speedometer_end;
        $new_gsm -> gsm_end = $request -> gsm_end;
        $new_gsm -> car_name = $request -> car_name;

        $new_gsm -> state_number = $request -> state_number;
        $new_gsm -> consumption_rate = $request -> consumption_rate;
        $new_gsm -> mileage = $request -> mileage;
        $new_gsm -> received_gsm_initially = $request -> received_gsm_initially;

        $new_gsm -> gsm_consumption = $request -> gsm_consumption;
        $new_gsm -> economy = $request -> economy;
        $new_gsm -> remainder_gsm_end = $request -> remainder_gsm_end;
        $new_gsm -> added_at = $request -> added_at;

        $new_gsm -> drivers_fio = $request -> drivers_fio;
        $new_gsm -> season = $request -> season;

        $new_gsm -> save();

        return redirect()->back()->withSuccess('Запись добавленна');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListGsm  $listGsm
     * @return \Illuminate\Http\Response
     */
    public function show(ListGsm $listGsm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListGsm  $gsm
     * @return \Illuminate\Http\Response
     */
    public function edit(ListGsm $gsm)
    {



        return view('listgsm.edit',[
            'gsm'=>$gsm
        ]);




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListGsm  $gsm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListGsm $gsm)
    {

        $gsm -> title = $request -> title;
        $gsm -> speedometer_end = $request -> speedometer_end;
        $gsm -> gsm_end = $request -> gsm_end;
        $gsm -> car_name = $request -> car_name;

        $gsm -> state_number = $request -> state_number;
        $gsm -> consumption_rate = $request -> consumption_rate;
        $gsm -> mileage = $request -> mileage;
        $gsm -> received_gsm_initially = $request -> received_gsm_initially;

        $gsm -> gsm_consumption = $request -> gsm_consumption;
        $gsm -> economy = $request -> economy;
        $gsm -> remainder_gsm_end = $request -> remainder_gsm_end;
        $gsm -> added_at = $request -> added_at;

        $gsm -> drivers_fio = $request -> drivers_fio;
        $gsm -> season = $request -> season;

        $gsm -> save();

        return redirect()->back()->withSuccess('Запись обновленна');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListGsm  $gsm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListGsm $gsm)
    {
        $connect = mysqli_connect('localhost', 'root', '', 'u119149_larabazadb2');
        if (!$connect){
            die('Ошибка подключения к БД');
        }


        $gsm -> delete();

        return redirect()->back()->withSuccess('Запись удалена');
    }

    public function gsmExport(){

        return Excel::download(new GsmExport, 'Gsm.xlsx');
    }

    public function listExport(){

        return Excel::download(new ListExport, 'list.xlsx');
    }

    public function listExport2(){

        return view('exports.formList2');
    }

}
