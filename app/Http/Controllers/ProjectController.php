<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    public function show(string $slug)
    {
        $project = $this->content->project($slug);
        abort_if(! $project, 404);

        return $this->siteView('pages.project', [
            'project' => $project,
            'metaTitle' => $project['title'].' | FinanceLab',
            'metaDescription' => $project['description'],
        ]);
    }
}
