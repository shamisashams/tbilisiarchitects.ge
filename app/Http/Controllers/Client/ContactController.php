<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(string $lang, Request $request)
    {
        if ($request->method() == 'POST') {
            $request->validate([
                'full_name' => 'required|string|max:55',
                'email' => 'required|email',
                'phone' => 'required',
                'subject' => 'required|max:55',
                'message' => 'required|max:1024'
            ]);

            $data = [
                'full_name' => $request->full_name,
                'email' => $request->email,
                'subject' => $request->subject,
                'phone' => $request->phone,
                'message' => $request->message
            ];

            $mailTo = Setting::where(['key' => 'email'])->first();

            if (($mailTo !== null) && $mailTo->language()) {
                Mail::to($mailTo->language()->value)->send(new ContactEmail($data));
            }

        }
        return view('client.pages.contact.index', [
        ]);
    }
}
