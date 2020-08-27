<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
use  App\Exports\RegistroExport;
use App\Exports\SheetsExport;
use Maatwebsite\Excel\Facades\Excel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $registro = Registro::get();
        return view('registro.index',compact('registro'));
    }

    public function exportExcel(){

        return Excel::download(new RegistroExport,'registros.xlsx');
    }

    public function export2(){
        return Excel::download(new SheetsExport, 'registros.xlsx');
    }
}
