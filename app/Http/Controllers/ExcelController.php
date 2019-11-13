<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\SiswaImport;
use App\Imports\TunggakanImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function import_excel() 
	{
		Excel::import(new SiswaImport, request()->file('file'));
 
		return back()->withStatus('Data succesfully imported.');
	}
	public function tunggakan_import(){
		Excel::import(new TunggakanImport, request()->file('file'));
 
		return back()->withStatus('Data succesfully imported.');
	}
}
