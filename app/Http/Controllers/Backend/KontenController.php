<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use App\Models\Content;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contents = Content::orderBy('created_at', 'desc')->paginate(10);

        return view('backend.content.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // @dd($request->all());
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|file|mimes:jpg,png,jpeg,gif,svg,gif,webp|max:2048',
            'category' => 'nullable|string|max:255',
            'content' => 'required', // Memastikan content tidak boleh null
        ]);

        $file = $request->file('thumbnail');
        $fileLoc  = 'contents/';
        $fileName = $file->hashName();

        $image = Image::make($file);
        $image->resize(700, 700, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        //tes
        Storage::put('public/' . $fileLoc . $fileName, $image->stream());

        $content = Content::create(array_merge($data, [
            'thumbnail' => $fileLoc . '/' . $fileName,
            'date' => Carbon::now(),
        ]));

        return redirect()->route('contents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('', compact(''));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        return view('backend.content.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'date' => 'required|date',
            'category' => 'nullable|string|max:255',
            'content' => 'required', // Memastikan content tidak boleh null
        ]);

        if ($request->has('thumbnail')) {
            $path = $content->thumbnail;
            Storage::delete('public/' . $path);
            $file = $request->file('thumbnail');
            $fileLoc  = 'contents/';
            $fileName = $file->hashName();
            $image = Image::make($file);
            $image->resize(700, 700, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            //tes
            Storage::put('public/' . $fileLoc . $fileName, $image->stream());
            $data['thumbnail'] = $fileLoc . '/' . $fileName;
        } else {
            $data['thumbnail'] = $content->thumbnail;
        }

        $content->update($data);

        return redirect()->route('content.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $thumbnail = $content->thumbnail;
        Storage::delete('public/' . $thumbnail);
        $content->delete();

        return redirect()->route('contents.index');
    }
}
