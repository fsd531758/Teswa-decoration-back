<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutUsResource;
use App\Http\Resources\MessageResource;
use App\Http\Resources\MissionResource;
use App\Http\Resources\VisionResource;
use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        try {
            $about                    = Page::where('identifier', 'about')->first();
            $mission                  = Page::where('identifier', 'mission')->first();
            $vision                   = Page::where('identifier', 'vision')->first();
            $message                  = Page::where('identifier', 'message')->first();

            return successResponse(
                [
                    "about"               => new AboutUsResource($about),
                    "mission"             => new MissionResource($mission),
                    "vision"              => new VisionResource($vision),
                    "message"             => new MessageResource($message),
                ],
                trans("message.retrieved_successfully"),
                200
            );
        } catch (\Error $error) {
            return failureResponse(
                [],
                trans("message.something_wrong"),
                400
            );
        }
    }
}
