<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\SliderResource;
use App\Models\Page;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;
use PHPUnit\Util\Exception;


class HomeController extends Controller
{
    public function index()
    {
        try {
            $sliders            = Slider::active()->get();
            $about              = Page::where('identifier', 'about_us')->first();
            $services            = Service::active()->get();

            // $partners           = Partner::active()->get();



            return successResponse(
                [
                    "sliders"            => SliderResource::collection($sliders),
                    "about_us"           => new AboutResource($about),
                    "services"            => ServiceResource::collection($services),
                    // "partners"           => PartnerResource::collection($partners),
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
