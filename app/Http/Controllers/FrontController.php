<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index() {
        $page = Page::where('title', 'Home')->firstOrFail();
        return view('welcome', ['page' => $page]);
    }

    public function contact() {
        return view('pages.contact');
    }

    public function about() {
        $page=Page::where('slug','about')->firstOrFail();
        return view('pages.about',['page'=>$page,'title'=>'About']);
    }

    public function instructions() {
        $page = Page::where('slug', 'instructions-for-authors')->firstOrFail();
        return view('pages.instructions', ['page' => $page]);
    }

    public function submit_a_paper() {
        $page = Page::where('slug', 'submit-a-paper')->firstOrFail();
        return view('pages.instructions', ['page' => $page]);
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

    public function sendmail(Request $request) {

        Mail::to('aleksandarmarkovic127@gmail.com')->send(new ContactMail($request->name,$request->email,$request->message));
        return back()->with(['message'=>'Message sent!']);

    }


}
