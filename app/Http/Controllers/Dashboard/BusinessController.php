<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProductRequest;
use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BusinessController extends Controller
{
    private $product;

    public function __construct(Business $product)
    {
        $this->middleware(['permission:read-products'])->only('index', 'show');
        $this->middleware(['permission:create-products'])->only('create', 'store');
        $this->middleware(['permission:update-products'])->only('edit', 'update');
        $this->middleware(['permission:delete-products'])->only('destroy');
        $this->product = $product;
    }

    public function index(Request $request)
    {
        try {
            $products = $this->product->latest('id')->get();
            return view('admin.products.index', compact('products'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        try {

            return view('admin.products.create');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function store(ProductRequest $request)
    {
        try {

            if (!$request->has('status')) {
                $request->request->add(['status' => 0]);
            } else {
                $request->request->add(['status' => 1]);
            }

            if (!$request->has('is_trending')) {
                $request->request->add(['is_trending' => 0]);
            } else {
                $request->request->add(['is_trending' => 1]);
            }

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'images', 'colors']);
            $product = $this->product->create($requested_data);

            //colors
            if ($request->has('colors')) {
                $colors = array_map(function ($value) {
                    return intval(($value));
                }, $request->colors);
                $product->colors()->attach($colors);
            }
            // $product->uploadFile();
            $product->uploadFiles();

            return redirect()->route('products.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Business $product)
    {
        try {
            $images = $product->files()->where('type', '!=', 'cover')->get();

            return view('admin.products.show', compact('product', 'images'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function edit(Business $product)
    {
        try {
            $images = $product->files()->where('type', '!=', 'cover')->get();

            return view('admin.products.edit', compact('product', 'images'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }
    public function update(ProductRequest $request, Business $product)
    {
        try {
            if (!$request->has('status')) {
                $request->request->add(['status' => 0]);
            } else {
                $request->request->add(['status' => 1]);
            }

            if (!$request->has('is_trending')) {
                $request->request->add(['is_trending' => 0]);
            } else {
                $request->request->add(['is_trending' => 1]);
            }
            //
            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'images', 'deleted_files', 'colors']);
            $requested_data['updated_at'] = Carbon::now();
            $product->update($requested_data);
            //edit colors
            $product->colors()->detach();

            if ($request->has('colors')) {
                $colors = array_map(function ($value) {
                    return intval(($value));
                }, $request->colors);
                $product->colors()->attach($colors);
            }
            //end colors edit

            // $product->updateFile();
            $product->updateFiles();

            return redirect()->route('products.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Business $product)
    {
        try {
            $product->deleteFiles();
            $product->delete();
            return redirect()->route('products.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }
}
