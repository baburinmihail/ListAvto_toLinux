<?php

namespace App\Exports;

use App\Models\ListGsm;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class GsmExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        $gsm = ListGsm::all();

        return view('exports.avtoList', [
            'gsm' => $gsm
        ]);
    }
//    public function collection()
//    {
//        return ListGsm::all();
//    }
}
