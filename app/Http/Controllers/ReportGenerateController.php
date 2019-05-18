<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use PDF;
use PdfReport;

class ReportGenerateController extends Controller
{
    

	public function generatePDF() {

		$title = 'Student Information Report'; // Report title

		$students = Student::all();

	    $columns = [
	        'Student Name' 	=> 	function($student) {
        		return $student->fullname;
	        },
	        'Country'  		=>	function($student) {
        		return $student->country;
	        },
	        'Detail'		=> 	function($student) {
        		return $student->detail;
	        }
	    ];

	    return PdfReport::of($title, array(), $students, $columns)->stream();


	}


	public function showDocument() {

		$data = Student::all();
		$pdf = PDF::loadView('myPDF', $data);
		
		return $pdf->download('doc.pdf');

	}

}
