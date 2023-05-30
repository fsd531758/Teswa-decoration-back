<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\QuoteRequest;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteRequestController extends Controller
{
    public function quote_request(QuoteRequest $request)
    {

        try {
            $quote_request      =  Quote::create($request->except('file'));
            // Mail::to(CONTACT_US_MAIL)->send(new \App\Mail\ContactUsMail($contact_us));


            return successResponse(
                [],
                trans("message.request_sent_successfully"),
                200
            );
        } catch (\Exception $e) {
            return failureResponse(
                [],
                $e->getMessage(),
                400
            );
        }
    }
}
