<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\Redirect;
use App\Models\Berita;

class LayoutController extends Controller
{
    public function contact() {
        return view('public.contact.index');
    }
    public function about() {
        return view('public.about.index');
    }
    public function filosofi() {
        return view('public.filosofi.index');
    }
    public function visi() {
        return view('public.visi.index');
    }
    public function divisi() {
        return view('public.divisi.index');
    }
    public function activityDoc() {
        return view('public.galery.index');
    }
    public function content() {
        return view('public.konten.index');
    }
    public function sentimeter() {
        return Redirect::away('https://sentimeter.nusaputra.ac.id/');
    }
    public function hmtiEsport() {
        return Redirect::away('https://www.instagram.com/p/CabkQD9BDSZ/?igshid=YmMyMTA2M2Y=');
    }
    public function techFest() {
        return Redirect::away('https://techfest.org/');
    }
    public function danus() {
        return Redirect::away('https://lummoshop.com/hmtistore');
    }
    // public function news() {
    //     $latestNews = Berita::latest()->first();
    //     $otherNews  = Berita::whereNot('id', $latestNews->id)->latest()->paginate(10);
    //     return view('public.berita.index')->with('latestNews', $latestNews)->with('otherNews', $otherNews);
    // }
    public function info() {
        return view('public.informasi.index');
    }
    public function activity() {
        $collection = Activity::latest()->paginate(5);
        return view('public.kegiatan.index', compact('collection'));
    }
    public function activityDetails($id) {
        $collection = Activity::findOrFail($id);
        return view('public.kegiatan.details', compact('collection'));
    }
    public function contest() {
        $competitions = Content::where('category', 'lomba')->paginate(10);
        return view('public.lomba.index')->with('competetions', $competitions);
    }
    public function internship() {
        return view('public.magang.index');
    }
    public function achievement() {
        return view('public.prestasi.index');
    }
    public function bph() {
        return view('public.divisi.bph.index');
    }
    public function kominfo() {
        return view('public.divisi.kominfo.index');
    }
    public function danuss() {
        return view('public.divisi.danus.index');
    }
    public function hukam() {
        return view('public.divisi.hukam.index');
    }
    public function kaderisasi() {
        return view('public.divisi.kaderisasi.index');
    }
    public function minatbakat() {
        return view('public.divisi.minatbakat.index');
    }
    public function psdm() {
        return view('public.divisi.psdm.index');
    }
    public function humas() {
        return view('public.divisi.humas.index');
    }
}
