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

    public function instructions() {
        $page = Page::where('slug', 'instructions-for-authors')->firstOrFail();
        return view('pages.instructions', ['page' => $page]);
    }

    public function submit_a_paper() {
        $page = Page::where('slug', 'submit-a-paper')->firstOrFail();
        return view('pages.instructions', ['page' => $page]);
    }
}
