<?php

namespace App\Exports;

use App\User_Submission;
use Maatwebsite\Excel\Concerns\FromCollection;

class User_SubmissionsExport implements FromCollection
{
    public function collection()
    {
        return User_Submission::all();
    }
}
