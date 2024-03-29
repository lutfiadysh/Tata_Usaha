<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tunggakan;
use App\Imports\SiswaImport;
use App\Imports\TunggakanImport;
use App\Imports\RayonImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function import_excel() 
	{
		Excel::import(new SiswaImport, request()->file('file'));

		return back()->withStatus('Data succesfully imported.');
	}

	public function data()
    {
        $total = Tunggakan::whereYear('created_at' ,'=' , now())
                ->get()
                ->sum("total");

        return view('admin.data',compact('total'));
    }

	public function tunggakan_import(){
		$s = Tunggakan::all();
		$s->each->delete();
		
		Excel::import(new TunggakanImport, request()->file('file'));
 
		return back()->withStatus('Data succesfully imported.');
	}



	public function rayon_import(){
		Excel::import(new RayonImport, request()->file('file'));
 
		return back()->withStatus('Data succesfully imported.');
	}
}
