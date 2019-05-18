<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use PdfReport;

class ReportGenerateController extends Controller
{
    

	public function generatePDF() {

		$title = 'Student Information Report'; // Report title

		$queryBuilder = Student::all();

	    $columns = [
	        'Student Name' 	=> "fullname",
	        'Country'		=> "country",
	        'Detail'		=> "detail"
	    ];

	    return PdfReport::of($title, array(), $queryBuilder, $columns)->stream();


	}

}
