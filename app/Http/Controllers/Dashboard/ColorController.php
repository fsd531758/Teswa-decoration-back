<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ColorRequest;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class ColorController extends Controller
{
    private $color;

    public function __construct(Color $color)
    {
        $this->middleware(['permission:read-colors'])->only('index', 'show');
        $this->middleware(['permission:create-colors'])->only('create', 'store');
        $this->middleware(['permission:update-colors'])->only('edit', 'update');
        $this->middleware(['permission:delete-colors'])->only('destroy');
        $this->color = $color;
    }

    public function index()
    {
        try {
            $colors = $this->color->latest('id')->get();
            return view('admin.colors.index', compact('colors'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.colors.create');
    }

    public function store(ColorRequest $request)
    {
        try {
            // return $request;
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove']);
            $color = $this->color->create($requested_data);

            return redirect()->route('colors.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Color $color)
    {
        return view('admin.colors.show', compact('color'));
    }

    public function edit(Color $color)
    {
        return view('admin.colors.edit', compact('color'));
    }

    public function update(ColorRequest $request, Color $color)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove']);
            $requested_data['updated_at'] = Carbon::now();
            $color->update($requested_data);


            return redirect()->route('colors.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Color $color)
    {
        try {
            $color->delete();
            return redirect()->route('colors.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
