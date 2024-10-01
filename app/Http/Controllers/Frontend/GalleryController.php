<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {

        $today = Carbon::now()->format('Y');
        $year = $request->query('year', $today);


        $articles = Content::where('category', "Kegiatan")
            ->whereYear('date', $year)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $latestNews = Content::where('category', "Kegiatan")
            ->whereYear('date', $year)
            ->orderBy('created_at', 'desc')
            ->first();

        return view('public.galery.index', compact('articles', 'latestNews'));
    }

    public function show($id)
    {
        $article = Content::where('id', $id)->get();
        return view('public.galery.details', compact('article'));
    }


}
