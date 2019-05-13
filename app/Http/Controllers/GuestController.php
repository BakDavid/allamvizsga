<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Page;

class GuestController extends Controller {

    public function news() {

        $pages = Page::where('pages','News')->first();

        return view('guest/news')->with('pages',$pages);
    }

    public function sections() {

        $pages = Page::where('pages','Sections')->first();

        return view('guest/sections')->with('pages',$pages);
    }

    public function documents() {

        $pages = Page::where('pages','Documents')->first();

        return view('guest/documents')->with('pages',$pages);
    }

    public function program() {

        $pages = Page::where('pages','Program')->first();

        return view('guest/program')->with('pages',$pages);
    }

    public function archive() {

        $pages = Page::where('pages','Archive')->first();

        return view('guest/archive')->with('pages',$pages);
    }
}
