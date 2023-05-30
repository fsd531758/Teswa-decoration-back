<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\SingleCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use PHPUnit\Util\Exception;


class CategoryController extends Controller
{
    public function index()
    {
        try {
            $categories = Category::active()->get();
            return successResponse(
                CategoryResource::collection($categories),
                trans("message.retrieved_successfully"),
                200
            );
        } catch (Exception $e) {

            return failureResponse([], trans("message.something_wrong"), 400);
        }
    }

    public function show_category($id)
    {
        try {
            $category = Category::active()->findOrFail($id);
            return successResponse(
                new SingleCategoryRequest($category),
                trans("message.retrieved_successfully"),
                200
            );
        } catch (Exception $e) {

            return failureResponse([], trans("message.something_wrong"), 400);
        }
    }
}
