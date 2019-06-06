<?php

namespace App\Exports;

use App\Cooperator;
use Maatwebsite\Excel\Concerns\FromCollection;

class CooperatorsExport implements FromCollection
{
    public function collection()
    {
        return Cooperator::all();
    }
}
