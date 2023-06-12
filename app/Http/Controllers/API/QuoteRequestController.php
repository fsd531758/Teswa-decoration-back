<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\QuoteRequest;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class QuoteRequestController extends Controller
{
    public function quote_request(QuoteRequest $request)
    {
        //return $request;
        try {
            $quote_request = Quote::create($request->except('file'));
            $quote_request->uploadFile();
            Mail::to(QUOTE_REQUEST_MAIL)->send(new \App\Mail\QuoteRequestMail($request->all()));

            return successResponse(
                [],
                trans("message.request_sent_successfully"),
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
