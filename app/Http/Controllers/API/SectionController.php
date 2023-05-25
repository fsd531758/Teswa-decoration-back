<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SectionResource;
use App\Models\Section;
use Illuminate\Http\Request;
use PHPUnit\Util\Exception;


class SectionController extends Controller
{
    public function index()
    {
        try {
            $sections = Section::active()->get();
            return successResponse(
                SectionResource::collection($sections),
                trans("message.retrieved_successfully"),
                200
            );
        } catch (Exception $e) {

            return failureResponse([], trans("message.something_wrong"), 400);
        }
    }
}
