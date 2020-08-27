<?php

namespace App\Exports;

use App\Exports\RegistroExport;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;


class SheetsExport implements  WithMultipleSheets
{

    

    public function sheets(): array
    {
        $sheets = [
            'Registros' => new RegistroExport()
        ];

        return $sheets;
    }
    
}