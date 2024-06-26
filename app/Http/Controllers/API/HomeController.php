<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Http\Resources\ExperienceResource;
use App\Http\Resources\PartnerResource;
use App\Http\Resources\QuotationResource;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\SliderResource;
use App\Http\Resources\TrendingProductsResource;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        try {
            $sliders = Slider::active()->get();
            $about = Page::where('identifier', 'about_us')->first();
            $services = Service::active()->get();
            $experience = Page::where('identifier', 'experience')->first();
            $partners = Partner::active()->get();
            // $trending_products    = Product::active()->isTrending()->get();
            $trending_products = Page::where('identifier', 'trending_products')->first();
            $quotation = Page::where('identifier', 'quotation')->first();

            return successResponse(
                [
                    "sliders" => SliderResource::collection($sliders),
                    "about_us" => new AboutResource($about),
                    "services" => ServiceResource::collection($services),
                    "experience" => new ExperienceResource($experience),
                    "partners" => PartnerResource::collection($partners),
                    "trending_products" => new TrendingProductsResource($trending_products),
                    "quotation" => new QuotationResource($quotation),
                    // "trending_products"      => ProductResource::collection($trending_products),
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
