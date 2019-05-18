<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use PdfReport;

class ReportGenerateController extends Controller
{
    

	public function generatePDF() {

		$title = 'Student Information Report'; // Report title

		$queryBuilder = Student::select(['fullname', 'country', 'detail']);

		    $meta = [ // For displaying filters description on header
		        'Registered on' => $fromDate . ' To ' . $toDate,
		        'Sort By' => $sortBy
		    ];

	    $columns = [
	        'Student Name',
	        'Country',
	        'Detail'
	    ];

	    return PdfReport::of($title, array(), $queryBuilder, $columns)->stream();


	}


	public function showDocument() {

		$snappy = App::make($this->generatePDF());
		//To file
		$html = '<h1>Bill</h1><p>You owe me money, dude.</p>';
		//Or output:
		return new Response(
		    $snappy->getOutputFromHtml($html),
		    200,
		    array(
		        'Content-Type'          => 'application/pdf',
		        'Content-Disposition'   => 'attachment; filename="file.pdf"'
		    )
		);

	}

}
