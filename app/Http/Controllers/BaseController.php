<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Sponsor;

class BaseController extends Controller {

    public function __construct() {

        $allSponsor = Sponsor::where('deleted','0')->get();

        // Sharing is caring
        \View::share('allSponsor', $allSponsor);
    }
}
