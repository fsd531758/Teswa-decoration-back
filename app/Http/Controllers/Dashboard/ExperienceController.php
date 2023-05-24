<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class ExperienceController extends Controller
{
    private $experience;

    public function __construct(Experience $experience)
    {
        $this->middleware(['permission:read-experiences'])->only('index', 'show');
        $this->middleware(['permission:create-experiences'])->only('create', 'store');
        $this->middleware(['permission:update-experiences'])->only('edit', 'update');
        $this->middleware(['permission:delete-experiences'])->only('destroy');
        $this->experience = $experience;
    }

    public function index()
    {
        try {
            $experiences = $this->experience->latest('id')->get();
            return view('admin.experiences.index', compact('experiences'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.experiences.create');
    }

    public function store(ExperienceRequest $request)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $experience = $this->experience->create($requested_data);
            $experience->uploadFile();

            return redirect()->route('experiences.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(Experience $experience)
    {
        return view('admin.experiences.show', compact('experience'));
    }

    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', compact('experience'));
    }

    public function update(ExperienceRequest $request, Experience $experience)
    {
        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);

            $requested_data = $request->except(['_token', 'profile_avatar_remove', 'image']);
            $requested_data['updated_at'] = Carbon::now();
            $experience->update($requested_data);

            $experience->updateFile();

            return redirect()->route('experiences.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(Experience $experience)
    {
        try {
            $experience->deleteFile();
            $experience->delete();
            return redirect()->route('experiences.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }
}
