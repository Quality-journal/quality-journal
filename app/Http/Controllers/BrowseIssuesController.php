<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Selection;

class BrowseIssuesController extends Controller
{
    public function index() {
        $selections = Selection::all();
        return view('pages.browse-issues', ['selections' => $selections, 'title' => 'Browse issues']);
    }
}
