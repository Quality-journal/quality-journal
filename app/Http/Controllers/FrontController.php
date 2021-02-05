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
        return view('pages.about',['page'=>$page,'title'=>'About']);
    }

    public function manual() {
        return view('pages.manual');
    }

    public function editorialOffice() {
        $page=Page::where('title','editorial office')->firstOrFail();
        return view('pages.about',['page'=>$page,'title'=>'Editorial office']);
    }

    public function reviewers() {
        $page=Page::where('title','reviewers')->firstOrFail();
        return view('pages.about',['page'=>$page,'title'=>'Reviewers']);
    }

    public function publishingCouncil() {
        $page=Page::where('title','publishing council')->firstOrFail();
        return view('pages.about',['page'=>$page,'title'=>'Publishing council']);
    }

    public function ethicsAndPolicy() {
        $page=Page::where('title','ethics and policy')->firstOrFail();
        return view('pages.about',['page'=>$page,'title'=>'Ethics and policy']);
    }
}
