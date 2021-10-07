<?php

namespace App\Exports;
use DB;
use App\Registro;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;


class RegistroExport implements FromCollection, WithHeadings, WithTitle
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {     //
        // $registro = Registro::get();
         $QUERY = $users = DB::table('registros')->select('id', 'venta_id','monto','cuenta','beneficiario','referencia','clave','banco')->get();
           return  $QUERY;
    }
    public function headings(): array
    {
        return [
            'Id',
            'venta_id',
            'monto',
            'cuenta',
            'beneficiario',
            'referencia',
            'clave',
            'banco',
            
        ];
    }
    public function title(): string
    {
        return 'Devoluciones';
    }
}
