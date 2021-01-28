<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontController extends Controller
{
    public function index() {
        if(!session()->has('locale')){
            session(['locale' => 'sr']);
        }
        return view('welcome');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function about() {
        return view('pages.about');
    }

    public function manual() {
        return view('pages.manual');
    }

    public function lang($lang)
    {
        session(['locale' => $lang]);
        return back();
    }
}
