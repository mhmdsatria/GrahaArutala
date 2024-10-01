<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $articles = Content::where('category', "Berita")->orderBy('created_at', 'desc')->paginate(10);
        $latestNews = Content::where('category', "Berita")->orderBy('created_at', 'desc')->first();
        // $otherNews = $latestNews->pluck('id')->pagination(10);
    
        return view('public.berita.index', compact('articles', 'latestNews'));
    }
}
