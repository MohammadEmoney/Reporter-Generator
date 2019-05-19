<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Collection;
use App\Student;
use PdfReport;
use PDF;


class ReportGenerateController extends Controller
{
	public function showDocument(Request $request) {


        $items = Student::all();
        view()->share('items',$items);


        $pdf = PDF::loadView('pdf.students');
        return $pdf->stream('students.pdf');

	}

}
