<?php

namespace App\Exports;

use App\Page;
use Maatwebsite\Excel\Concerns\FromCollection;

class PagesExport implements FromCollection
{
    public function collection()
    {
        return Page::all();
    }
}
