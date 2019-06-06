<?php

namespace App\Exports;

use App\Reviewer_Submission;
use Maatwebsite\Excel\Concerns\FromCollection;

class Reviewer_SubmissionsExport implements FromCollection
{
    public function collection()
    {
        return Reviewer_Submission::all();
    }
}
