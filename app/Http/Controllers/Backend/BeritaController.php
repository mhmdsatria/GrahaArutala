<?php

namespace App\Http\Controllers\Backend;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $beritas = Berita::all();
        $beritas = Berita::paginate(10);

        return view('backend.berita.index',compact('beritas') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.berita.create');
    }

    // $imageName = time().'.'.$request->thumbnail->extension();
    // $request->thumbnail->storeAs('images', $imageName);
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'category' => 'nullable|string|max:255',
            'content' => 'nullable',
        ]);

      

        // $image_name = uniqid() . '.' . $data['thumbnail']->getClientOriginalExtension();
        // $image_path = 'uploads/' . $image_name;
        // Image::make($data['thumbnail'])->resize(320, 240)->save(public_path($image_path));
        // $data['thumbnail'] = $image_path;


        $file = $request->file('thumbnail');
        $fileName = $file->hashName();
        $fileLoc  = 'contents';

        $file->storeAs('public/'.$fileLoc, $fileName);

        $berita = Berita::create(array_merge($data, [
            'thumbnail' => $fileLoc.'/'.$fileName,
            'date' => Carbon::now()
        ]));

        

        return redirect()->route('beritas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('backend.berita.edit',compact('berita') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'date' => 'required|date',
            'category' => 'nullable|string|max:255',
            'content' => 'nullable',
        ]);

        if ($request->has('thumbnail')) {
            unlink(public_path($berita->thumbnail));
            $image_name = uniqid() . '.' . $data['thumbnail']->getClientOriginalExtension();
            $image_path = 'uploads/' . $image_name;
            Image::make($data['thumbnail'])->resize(320, 240)->save(public_path($image_path));
            $data['thumbnail'] = $image_path;
        } else {
            $data['thumbnail'] = $berita->thumbnail;
        }

        $berita->update($data);

        return redirect()->route('beritas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        $thumbnail = $berita->thumbnail;
        $berita->delete();
        File::delete(public_path($thumbnail));

        return redirect()->route('beritas.index');
    }
}
