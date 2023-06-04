<?php

namespace App\Http\Controllers;

use App\Models\Avtomobil;
use App\Models\ListGsm;
use App\Models\Peaple;
use Illuminate\Http\Request;


class ListEditCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avtomobilist = Avtomobil::orderBy('created_at','desc')->get();

        return view('listgsm.createedit',[
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avtomobil  $avtomobilist
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Avtomobil $bild , ListGsm $gsm)
    {
        //делаю попытку подключения
        $peaple = Peaple::orderBy('created_at','desc')->get();

        $connect = mysqli_connect('localhost', 'root', '', 'u119149_larabazadb2');
        if (!$connect){
            die('Ошибка подключения к БД');
        }

        //sql запрос на получения данных из таблицы с автомобилями
        $sql_avto = mysqli_query($connect, "SELECT * FROM `avtomobils` WHERE `mark`= '$bild[mark]' AND `gosnomer`= '$bild[gosnomer]' ");
        
        //$sql_avto = mysqli_fetch_assoc($sql_avto);
        
        //echo '<pre>';
        //print_r($sql_avto);
        //echo '</pre>';

        $avto_array = mysqli_fetch_row($sql_avto);

        $avtoMark = $avto_array[1];
        $avtoNomer = $avto_array[2];
        $avtoNormaSummer = $avto_array[3];
        $avtoNormaWinter = $avto_array[4];
        $avtoGsmNewDay = $avto_array[5];
        $avtoSpedomentr = $avto_array[6];

        //sql запрос на получения одного запроса отсортированного по времени создания в таблице листов гсм 
        $sql_gsm_list = mysqli_query ($connect, "SELECT * FROM `list_gsms` WHERE `car_name`= '$bild[mark]' AND `state_number`= '$bild[gosnomer]' ORDER BY `list_gsms`.`id` DESC LIMIT 1  ");
        $sql_gsm_list1 = mysqli_fetch_assoc($sql_gsm_list);

        //Проверка на null данных
        if ( $sql_gsm_list1 == null ){

            $sql_gsm_list1['title'] =  0;
            $sql_gsm_list1['speedometer_end'] = $avtoSpedomentr;
            $sql_gsm_list1['gsm_end'] = 0;
            $sql_gsm_list1['car_name'] = $avtoMark;
            $sql_gsm_list1['state_number'] = $avtoNomer;
            $sql_gsm_list1['remainder_gsm_end'] = $avtoGsmNewDay;


        }else{}

        $speedometer_origin = $sql_gsm_list1['title'];
        $speedometer_end = $sql_gsm_list1['speedometer_end'];
        $gsm_list_gsm_origin = $sql_gsm_list1['gsm_end'];
        $car_name = $sql_gsm_list1['car_name'];
        $state_number = $sql_gsm_list1['state_number'];
        $gsm_list_gsm_end = $sql_gsm_list1['remainder_gsm_end'];


        //$gsm_list_probek = $gsm_list_array[0];
        //$gsm_list_gsm = $gsm_list_array[2];

        //echo $gsm_list_probek;
        //echo '<pre>';
        //echo '</pre>';
        //echo $gsm_list_gsm;

        return view('listgsm.listcreate',[
            'peaple'=>$peaple,
            'bild' => $bild,

            'speedometer_origin' => $speedometer_origin,
            'speedometer_end' => $speedometer_end,
            'gsm_list_gsm_origin' => $gsm_list_gsm_origin,
            'car_name' => $car_name,
            'state_number' => $state_number,
            'gsm_list_gsm_end' => $gsm_list_gsm_end,

            'avtoNormaSummer' => $avtoNormaSummer,
            'avtoNormaWinter' => $avtoNormaWinter,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * * @param  \App\Models\Avtomobil  $bild
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avtomobil $bild)
    {

        $new_gsm = new ListGsm();

        //$bild -> gsm_end_new_day = $request-> gsm_end_new_day;
        //$bild -> speedometer_new_day = $request-> speedometer_new_day;

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
        $new_gsm -> fact = $request -> fact;

        

        $new_gsm -> save();
        $bild->save();
        return redirect()->back()->withSuccess('Лист принят');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
