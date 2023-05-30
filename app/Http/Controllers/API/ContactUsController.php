<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\ContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactUsController extends Controller
{
    public function contact(ContactUsRequest $request){
        
        try {
            $contact_us      =  ContactUs::create($request->all());
            Mail::to(CONTACT_US_MAIL)->send(new \App\Mail\ContactUsMail($contact_us));


            return successResponse(
                [],
                trans("message.sent_successfully"),
                200
            );
        } catch (\Exception $e) {
            return failureResponse(
                [],
                trans("message.something_wrong"),
                400
            );
        }
    }
}
