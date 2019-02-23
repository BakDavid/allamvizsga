<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class GuestController extends Controller {

    public function conferences() {

        if (Auth::check()) {
            $conferences = DB::table('conferences')->whereDate('submission_send_start', '<', Carbon::now())->
                            whereDate('submission_send_end', '>', Carbon::now())->paginate(1000);

            return view('submitter_and_reviewer/conferences')->with('conferences', $conferences); //->with('categories',$categories)->with('conferences',$conferences);
        } else {
            
            $conferences = DB::table('conferences')->whereDate('submission_send_start','<',Carbon::now())->
                whereDate('submission_send_end','>',Carbon::now())->where('public','1')->paginate(1000);
            return view('submitter_and_reviewer/conferences')->with('conferences', $conferences); //->with('categories',$categories)->with('conferences',$conferences);
        }
    }

}
