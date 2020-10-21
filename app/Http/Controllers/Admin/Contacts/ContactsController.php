<?php

namespace App\Http\Controllers\Admin\Contacts;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Contacts\StoreRequest;
use App\Http\Requests\Mail\SendRequest;
use App\Mail\ComplaintReply;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     * @return Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.pages.contacts.index')->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(StoreRequest $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with('success', 'تم ارسال الرسالة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('admin.pages.contacts.show')->with('contact', $contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function reply($id)
    {
        $contact = Contact::find($id);
        return view('admin.pages.contacts.complaint_reply')->with('contact', $contact);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back();
    }

    public function send_reply(SendRequest $request, $id)
    {
        $contact = Contact::find($id);
        $email = $contact->email;
        $message = $request->message;
        Mail::to($email)->send(new ComplaintReply($message));
        $contact->replyed = 1;
        $contact->update();
        return redirect()->route('admin.contacts.index')->with('success', 'تم ارسال الرسالة بنجاح');
    }
}
