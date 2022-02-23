<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Image;
use App\Models\Document;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class FrontController extends Controller
{
    public function index()
    {
        $page = Page::where('title', 'Home')->firstOrFail();
        $images = Image::orderBy('position')->get();
        return view('welcome', ['page' => $page, 'images' => $images]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        $page = Page::where('slug', 'about')->firstOrFail();
        return view('pages.about', ['page' => $page, 'title' => 'About']);
    }

    public function instructions()
    {
        $documents = Document::all();
        $page = Page::where('slug', 'instructions-for-authors')->firstOrFail();
        return view('pages.instructions', ['page' => $page, 'documents' => $documents]);
    }

    public function submit_a_paper()
    {
        $page = Page::where('slug', 'submit-a-paper')->firstOrFail();
        return view('pages.submit-paper', ['page' => $page]);
    }

    public function editorialOffice()
    {
        $page = Page::where('title', 'editorial board')->firstOrFail();
        return view('pages.about', ['page' => $page, 'title' => 'Editorial board']);
    }

    public function reviewers()
    {
        $page = Page::where('title', 'review process')->firstOrFail();
        return view('pages.about', ['page' => $page, 'title' => 'Review process']);
    }

    public function publishingCouncil()
    {
        $page = Page::where('title', 'publishing council')->firstOrFail();
        return view('pages.about', ['page' => $page, 'title' => 'Publishing council']);
    }

    public function ethicsAndPolicy()
    {
        $page = Page::where('title', 'ethics and policy')->firstOrFail();
        return view('pages.about', ['page' => $page, 'title' => 'Ethics and policy']);
    }

    public function sendmail(Request $request)
    {
        Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|recaptchav3:contactme,0.5'
        ]);
        Mail::to('')->send(new ContactMail($request->name, $request->email, $request->message));
        return back()->with(['message' => 'Message sent!']);
    }
}
