<?php

namespace App\Http\Controllers;

use App\Exports\ListExport;
use App\Models\ListGsm;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LictochekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Excel::download(new ListExport, 'list.xlsx');
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
        return view('listgsm.edit',[
            'gsm'=>$gsm
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListGsm  $listGsm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListGsm $listGsm)
    {
        //
    }


    public function listExport(){


    }

}
