<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home() {
        return view('frontend.pages.home');
    }

    public function history() {
        return view('frontend.pages.history');
    }

    public function events() {
        return view('frontend.pages.events');
    }

    public function on_ground() {
        return view('frontend.pages.on_ground');
    }

    public function manuals() {
        $param = 'manuals';
        return view('frontend.pages.manuals',compact('param'));
    }
    public function contact() {
        return view('frontend.pages.contact');
    }
    public function comingSoon() {
        return view('frontend.others.coming_soon');
    }

    //manuals-tree
    public function manuals_child($param) {
        return view('frontend.pages.manuals',compact('param'));
    }

     public function test() {
        return view('frontend.pages.test');
    }
}
