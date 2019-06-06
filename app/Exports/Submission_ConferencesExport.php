<?php

namespace App\Exports;

use App\Submission_Conference;
use Maatwebsite\Excel\Concerns\FromCollection;

class Submission_ConferencesExport implements FromCollection
{
    public function collection()
    {
        return Submission_Conference::all();
    }
}
