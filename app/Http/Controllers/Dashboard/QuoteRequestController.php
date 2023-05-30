<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Mail\QuoteRequestReplyMail;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class QuoteRequestController extends Controller
{
    private $quote_request;


    public function __construct(Quote $quote_requests)
    {
        $this->middleware(['permission:read-quote_requests'])->only('index', 'show');
        $this->middleware(['permission:delete-quote_requests'])->only('destroy');
        $this->middleware(['permission:reply-quote_requests'])->only('reply');
        $this->quote_request = $quote_requests;
    }

    public function index()
    {
        try {
            $quote_requests = $this->quote_request->latest('id')->get();
            return view('admin.quote_requests.index', compact('quote_requests'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }


    public function show(Quote $quote_request)
    {
        return view('admin.quote_requests.show', compact('quote_request'));
    }


    public function destroy(Quote $quote_request)
    {
        try {
            $quote_request->delete();
            return redirect()->route('quote_requests.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }


    public function reply(Quote $quote_request)
    {
        // return $quote_request;
        return view('admin.quote_requests.reply', compact('quote_request'));
    }

    public function send_mail(Request $request)
    {
        // return $request;
        try {
            $contact = $this->quote_request->find($request->id);
            $quote_request_data = $request->only(['subject', 'message']);

            Mail::to($contact->email)->send(new QuoteRequestReplyMail($quote_request_data));
            return redirect()->route('quote_requests.index')->with(['success' => __('words.quote_request_reply')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' =>$e->getMessage()]);
        }
    }
}
