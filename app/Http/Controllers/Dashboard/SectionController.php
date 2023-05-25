<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SectionRequest;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class SectionController extends Controller
{
    private $section;

    public function __construct(Section $section)
    {
        $this->middleware(['permission:read-sections'])->only('index', 'show');
        $this->middleware(['permission:create-sections'])->only('create', 'store');
        $this->middleware(['permission:update-sections'])->only('edit', 'update');
        $this->middleware(['permission:delete-sections'])->only('destroy');
        $this->section = $section;
    }

    public function index()
    {
        try {
            $sections = $this->section->latest('id')->get();
            return view('admin.sections.index', compact('sections'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.sections.create');
    }

    public function store(SectionRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $section = $this->section->create($requested_data);
            $section->uploadFile();

            return redirect()->route('sections.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Section $section)
    {
        return view('admin.sections.show', compact('section'));
    }

    public function edit(Section $section)
    {
        return view('admin.sections.edit', compact('section'));
    }

    public function update(SectionRequest $request, Section $section)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image', 'deleteFile']);
            $requested_data['updated_at'] = Carbon::now();
            if ($request->has('deleteFile')) {
                $section->deleteFile();
            }
            $section->update($requested_data);

            $section->updateFile();

            return redirect()->route('sections.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Section $section)
    {
        try {
            $section->deleteFile();
            $section->delete();
            return redirect()->route('sections.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
