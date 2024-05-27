<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SingleProductresource;
use App\Models\Business;
use PHPUnit\Util\Exception;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $products = Business::active()->get();
            return successResponse(
                ProductResource::collection($products),
                trans("message.retrieved_successfully"),
                200
            );
        } catch (Exception $e) {

            return failureResponse([], trans("message.something_wrong"), 400);
        }
    }

    public function show_product($id)
    {
        try {
            $product = Business::active()->findOrFail($id);
            return successResponse(
                new SingleProductresource($product),
                trans("message.retrieved_successfully"),
                200
            );
        } catch (Exception $e) {

            return failureResponse([], trans("message.something_wrong"), 400);
        }
    }
}
