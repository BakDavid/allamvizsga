<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Conference;

class GuestController extends Controller {

    public function conferences() {

        if (Auth::check()) {

            $conferences = DB::table('conferences')->whereDate('application_start', '<', Carbon::now())->
                            whereDate('thesis_upload_deadline', '>', Carbon::now())->paginate(1000);

            return view('submitter_and_reviewer/conferences')->with('conferences', $conferences); //->with('categories',$categories)->with('conferences',$conferences);
        } else {
            $conferences = DB::table('conferences')->whereDate('application_start','<',Carbon::now())->
                whereDate('thesis_upload_deadline','>',Carbon::now())->where('public','1')->paginate(1000);
            return view('submitter_and_reviewer/conferences')->with('conferences', $conferences); //->with('categories',$categories)->with('conferences',$conferences);
        }
    }

    public function conferencedetail($id){

        $conferences = Conference::find($id);

        return view('submitter_and_reviewer/conference_detail')->with('conferences', $conferences);
    }

}
