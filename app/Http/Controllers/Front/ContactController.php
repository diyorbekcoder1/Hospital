<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Validator;
use Redirect;

class ContactController extends Controller
{

    protected $contact;

    public function __construct(Contact $contact)
    {
        $this->contact=$contact;
    }

    public function getContact()
    {
        return view('front.contact.form');
    }

    public function postContact(Request $request)
    {
        $formData = [
            'sender_name_surname' => $request->get('sender_name_surname'),
            'sender_email'        => $request->get('sender_email'),
            'sender_phone_number' => $request->get('sender_phone_number'),
            'subject'             => $request->get('subject'),
            'post'                => $request->get('message'),
        ];

        $rules = [
            'sender_name_surname' => 'required',
            'sender_email'        => 'required|email',
            'sender_phone_number' => 'required',
            'subject'             => 'required',
            'post'                => 'required',
        ];

        $validation = Validator::make($formData, $rules);

        if($validation->fails())
        {
            return Redirect::action('App\Http\Controllers\Front\ContactController@getContact')->withErrors($validation)->withInput();
        }

        /*
        Mail::send('emails.contact-form.form', $formData, function ($message) {
            $message->from($request->get('sender_email'), $request->get('sender_name_surname'));
            $message->to('noreply@fullycms.com', 'Lorem Lipsum')->subject($request->get('subject'));
        });
        */

        /*
        $mailer = new Mailer;
        $mailer->send('emails.contact-form.form', 'admin@fullycms.com', $request->get('subject'), $formData);
        */

        $formPost = new Contact();
        $formPost->sender_name_surname = $formData['sender_name_surname'];
        $formPost->sender_email = $formData['sender_email'];
        $formPost->sender_phone_number = $formData['sender_phone_number'];
        $formPost->subject = $formData['subject'];
        $formPost->message = $formData['post'];
        $formPost->created_ip=$_SERVER['REMOTE_ADDR'];
        $formPost->lang = getLang();

        $formPost->save();

        return Redirect::action('App\Http\Controllers\Front\ContactController@getContact')->with('message', 'Success');
    }
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
