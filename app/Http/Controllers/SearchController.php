<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Issue;
use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller 
{
    public function index(){
        return view('pages.search');
    }

    public function searching(){
        
        $search=request()->search;
        if($search=="")return view('pages.search',['results'=>[]]);
        $pages=Page::query()
        ->where('title', 'LIKE', "%{$search}%") 
        ->orWhere('slug', 'LIKE', "%{$search}%")
        ->orWhere('description', 'LIKE', "%{$search}%")
        ->orWhere('keywords', 'LIKE', "%{$search}%")
        ->orWhere('content', 'LIKE', "%{$search}%") 
        ->get();
        $articles=Article::query()
        ->where('title', 'LIKE', "%{$search}%") 
        ->orWhere('slug', 'LIKE', "%{$search}%")
        ->orWhere('description', 'LIKE', "%{$search}%")
        ->orWhere('keywords', 'LIKE', "%{$search}%")
        ->orWhere('content', 'LIKE', "%{$search}%") 
        ->orWhere('info', 'LIKE', "%{$search}%") 
        ->orWhere('authors', 'LIKE', "%{$search}%") 
        ->orWhere('authors_names', 'LIKE', "%{$search}%")
        ->orWhere('abstract', 'LIKE', "%{$search}%") 
        ->orWhere('recognitions', 'LIKE', "%{$search}%")
        ->orWhere('reference', 'LIKE', "%{$search}%")  
        ->get();
        $issues=Issue::query()
        ->where('title', 'LIKE', "%{$search}%") 
        ->orWhere('slug', 'LIKE', "%{$search}%")
        ->orWhere('description', 'LIKE', "%{$search}%")
        ->orWhere('keywords', 'LIKE', "%{$search}%")
        ->orWhere('content', 'LIKE', "%{$search}%") 
        ->orWhere('info', 'LIKE', "%{$search}%") 
        ->get();
        $merged = $pages->concat($articles)->concat($issues);
        return view('pages.search',['results'=>$merged]);
    }
}
