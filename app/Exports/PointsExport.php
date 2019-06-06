<?php

namespace App\Exports;

use App\Point;
use Maatwebsite\Excel\Concerns\FromCollection;

class PointsExport implements FromCollection
{
    public function collection()
    {
        return Point::all();
    }
}
