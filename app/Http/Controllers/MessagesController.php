<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Message;
use App\Mail\ContactMail;
use Config;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $message = new Message();
        return view('contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $data = $request->validate(
            [
                'email' => 'required|email',
                'subject' => 'required',
                'description' => 'required|max:200',
            ],
            [ // Messages de validation personnalisés
                'email.required' => 'L\'email est obligatoire.',
                'email.email' => 'L\'adresse email doit être valide. Ex: monadresse@domaine.com',
                'subject.required' => 'Le sujet email est obligatoire.',
                'description.required' => 'La description est obligatoire.',
                'description.max' => 'La description ne doit pas dépasser 200 caractères au max.',
            ]
        );

        Message::create($data);
        Mail::to(env("MAIL_TO_ADDRESS", "olivia.declerck@dkgroup.fr"))
                ->send(new ContactMail($data));

        return redirect('/')->with('success', 'Votre message a bien été envoyé');

        // $message = new Message;

        // $message->subject = $request->input('subject');
        // $message->email = $request->input('email');
        // $message->description = $request->input('description');
        // $message->save();

        return 1;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
