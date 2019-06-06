<?php

namespace App\Exports;

use App\Submission_Point;
use Maatwebsite\Excel\Concerns\FromCollection;

class Submission_PointsExport implements FromCollection
{
    public function collection()
    {
        return Submission_Point::all();
    }
}
