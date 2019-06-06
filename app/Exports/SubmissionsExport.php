<?php

namespace App\Exports;

use App\Submission;
use Maatwebsite\Excel\Concerns\FromCollection;

class SubmissionsExport implements FromCollection
{
    public function collection()
    {
        return Submission::all();
    }
}
