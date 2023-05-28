<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use PHPUnit\Util\Exception;


class ProductController extends Controller
{
    public function index()
    {
        try {
            $products = Product::active()->get();
            return successResponse(
                ProductResource::collection($products),
                trans("message.retrieved_successfully"),
                200
            );
        } catch (Exception $e) {

            return failureResponse([], trans("message.something_wrong"), 400);
        }
    }
}
