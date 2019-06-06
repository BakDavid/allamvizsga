<?php

namespace App\Exports;

use App\Conference;
use Maatwebsite\Excel\Concerns\FromCollection;

class ConferencesExport implements FromCollection
{
    public function collection()
    {
        return Conference::all();
    }
}
