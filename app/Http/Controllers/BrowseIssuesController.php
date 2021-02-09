<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Selection;
use App\Models\Issue;
use App\Models\Article;

class BrowseIssuesController extends Controller
{
    public function index() {
        $selections = Selection::all();
        $issues = Issue::all();
        return view('pages.browse-issues', ['selections' => $selections, 'issues' => $issues, 'title' => 'Browse issues']);
    }

    public function issues() {
        $slug = last(request()->segments());
        $selection = Selection::where('slug', $slug)->firstOrFail();
        $selectedIssues = Issue::where('selection_id', $selection->id)->get();
        $selections = Selection::all();
        $issues = Issue::all();
        return view('pages.issues', ['selectedIssues' => $selectedIssues, 'issues' => $issues, 'selections' => $selections, 'currentSelection' => $selection]);
    }

    public function articles() {
        $slug = last(request()->segments());
        $selectionSlug = request()->segments()[1];
        $issueSelection = Selection::where('slug', $selectionSlug)->firstOrFail();
        $issue = Issue::where('slug', $slug)->where('selection_id', $issueSelection->id)->firstOrFail();
        $articles = Article::where('issue_id', $issue->id)->get();
        $selections = Selection::all();
        $issues = Issue::all();
        return view('pages.articles', ['articles' => $articles, 'issues' => $issues, 'selections' => $selections, 'currentIssue' => $issue]);
    }

    public function article() {
        $slug = last(request()->segments());
        $article = Article::where('slug', $slug)->firstOrFail();
        $selections = Selection::all();
        $issues = Issue::all();
        return view('pages.article', ['article' => $article, 'issues' => $issues, 'selections' => $selections]);
    }
}
