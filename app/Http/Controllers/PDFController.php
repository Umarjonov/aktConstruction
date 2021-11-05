<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PDFController extends Controller
{
    public function generatePDF(): \Illuminate\Http\Response
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('itsolutionstuff.pdf');
    }
}
