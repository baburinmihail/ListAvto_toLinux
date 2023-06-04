<?php

namespace App\Exports;

use App\Models\ListGsm;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ListExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        $gsm = ListGsm::orderBy('created_at','desc')->get();

        return view('exports.formList', [

            'gsm' => $gsm

        ]);
    }


//    public function collection()
//    {
//        return ListGsm::all();
//    }
}
