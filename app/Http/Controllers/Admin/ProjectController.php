<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ManagesContent;
use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    use ManagesContent;

    public function index()
    {
        $projects = Project::orderBy('sort_order')->get();

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['is_published'] = $request->boolean('is_published');

        $data['scope'] = $this->linesToArray($request->input('scope'));
        $data['image'] = $this->upload($request, 'image', 'uploads/projects', null, $request->input('slug'));

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Loyiha qo‘shildi.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $this->validated($request, $project->id);
        $data['is_published'] = $request->boolean('is_published');

        $data['scope'] = $this->linesToArray($request->input('scope'));
        $data['image'] = $this->upload($request, 'image', 'uploads/projects', $project->image, $project->slug);

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Loyiha yangilandi.');
    }

    public function destroy(Project $project)
    {
        $this->deleteFile($project->image);
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Loyiha o‘chirildi.');
    }

    protected function validated(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'slug' => ['required', 'alpha_dash', 'max:100', 'unique:projects,slug'.($ignoreId ? ','.$ignoreId : '')],
            'industry' => ['required', 'max:100'],
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_published' => ['nullable', 'boolean'],
        ]);
    }
}
