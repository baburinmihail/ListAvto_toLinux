<?php

namespace App\Http\Controllers;

use PDF;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function download()
    {
        $products = [
            ['title' => 'Product 1', 'price' => 10.99, 'quantity' => 1, 'totals' => 10.99],
            ['title' => 'Product 2', 'price' => 14.99, 'quantity' => 2, 'totals' => 29.98],
            ['title' => 'Product 3', 'price' => 500.00, 'quantity' => 1, 'totals' => 500.00],
            ['title' => 'Product 4', 'price' => 6.99, 'quantity' => 3, 'totals' => 20.97],
        ];

        $total = collect($products)->sum('totals');

        $pdf = PDF::loadView('pdf.invoice', compact('products', 'total'));

        return $pdf->download('invoice.pdf');
    }
}
