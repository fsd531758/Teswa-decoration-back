<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ServiceController extends Controller
{
    private $service;

    public function __construct(Service $service)
    {
        $this->middleware(['permission:read-services'])->only('index', 'show');
        $this->middleware(['permission:create-services'])->only('create', 'store');
        $this->middleware(['permission:update-services'])->only('edit', 'update');
        $this->middleware(['permission:delete-services'])->only('destroy');
        $this->service = $service;
    }

    public function index()
    {
        try {
            $services = $this->service->latest('id')->get();
            return view('admin.services.index', compact('services'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(ServiceRequest $request)
    {
        try {
            if (!$request->has('status')) {
                $request->request->add(['status' => 0]);
            } else {
                $request->request->add(['status' => 1]);
            }

            $requested_data = $request->except(['_token', 'profile_avatar_remove']);
            $service = $this->service->create($requested_data);
            $service->uploadFiles();

            return redirect()->route('services.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Service $service)
    {
        $images = $service->files()->where('type', '!=', 'cover')->get();

        return view('admin.services.show', compact('service', "images"));
    }

    public function edit(Service $service)
    {$images = $service->files()->where('type', '!=', 'cover')->get();

        return view('admin.services.edit', compact('service', 'images'));}

    public function update(ServiceRequest $request, Service $service)
    {
        try {
            if (!$request->has('status')) {
                $request->request->add(['status' => 0]);
            } else {
                $request->request->add(['status' => 1]);
            }

            $requested_data = $request->except(['_token', 'profile_avatar_remove']);
            $requested_data['updated_at'] = Carbon::now();
            $service->update($requested_data);
            $service->updateFiles();

            return redirect()->route('services.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Service $service)
    {
        try {
            $service->delete();
            $service->deleteFiles();
            return redirect()->route('services.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
