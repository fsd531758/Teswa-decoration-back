<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SliderResource;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        try {
            $sliders            = Slider::active()->get();
            // $partners           = Partner::active()->get();
            // $funding_partners   = FundingPartner::active()->get();
            // $about              = Page::where('identifier', 'about_us')->first();
            // $statistics         = Page::where('identifier', 'statistics')->first();
            // $separator_1        = Page::where('identifier', 'separator_1')->first();
            // $separator_2        = Page::where('identifier', 'separator_2')->first();
            // $newsletter         = Page::where('identifier', 'newsletter')->first();

            return successResponse(
                [
                    "sliders"            => SliderResource::collection($sliders),
                    // "about_us"           => new AboutResource($about),
                    // "statistics"         => new StatisticResource($statistics),
                    // "separator_1"        => new SeparatorOneResource($separator_1),
                    // "separator_2"        => new SeparatorTwoResource($separator_2),
                    // "partners"           => PartnerResource::collection($partners),
                    // "funding_partners"   => PartnerResource::collection($funding_partners),
                    // "newsletter"         => new NewsletterResource($newsletter),
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
