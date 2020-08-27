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
         $QUERY = $users = DB::table('registros')->select('id', 'nombre','apellidos','celular','correo','telefono','empresa','puesto')->get();
           return  $QUERY;
    }
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Apellidos',
            'Celular / Whatsapp',
            'Correo',
            'Telefono',
            'Empresa',
            'Puesto',
            
        ];
    }
    public function title(): string
    {
        return 'Registros_webinar';
    }
}
