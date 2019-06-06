<?php

namespace App\Exports;

use App\Reviewer_Point;
use Maatwebsite\Excel\Concerns\FromCollection;

class Reviewer_PointsExport implements FromCollection
{
    public function collection()
    {
        return Reviewer_Point::all();
    }
}
