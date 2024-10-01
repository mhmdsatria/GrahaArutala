<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageMailable;
use Mockery\Generator\Method;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Message::all();

        return view('Messages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function page()
    {
        return view('public.contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|indisposable',
            'message' => 'required',
            'g-recaptcha-response' => 'required'
        ],[
            'g-recaptcha-response.required' => 'Silakan centang kotak reCAPTCHA sebelum mengirimkan formulir.',
        ]);

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        $mailData = [
            'title' => 'Mail from '.$request->email,
            'body' => $request->message
        ];
        
        // try {
        //     // Mail::to('your_email@gmail.com')->send(new MessageMailable($mailData));
        //     //code...
        // } catch (\Throwable $th) {
        //     $echo '$th'
        //     //throw $th;
        // }
        
        return redirect()->back()->with('success', 'Message sent successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Message::find($id);

        if (!$data) {
            abort(404, 'Message not found');
        }

        return view('Messages.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();

        return redirect('messages')->with('success', 'Pesan berhasil dihapus.');
    }
}
