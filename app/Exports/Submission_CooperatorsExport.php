<?php

namespace App\Exports;

use App\Submission_Cooperator;
use Maatwebsite\Excel\Concerns\FromCollection;

class Submission_CooperatorsExport implements FromCollection
{
    public function collection()
    {
        return Submission_Cooperator::all();
    }
}
