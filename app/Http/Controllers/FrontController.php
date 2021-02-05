<?php

namespace App\Http\Controllers;

use App\Models\Page;
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
        $page=Page::where('title','about')->firstOrFail();
        return view('pages.about',['page'=>$page]);
    }

    public function manual() {
        return view('pages.manual');
    }
}
