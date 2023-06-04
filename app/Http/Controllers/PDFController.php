<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;


class PDFController extends Controller
{
    // function to display preview
    public function preview()
    {
        return view('preview');
    }

    public function generatePDF()
    {
        $pdf = PDF::loadView('preview');    
        return $pdf->download('demo.pdf');
    }
}
