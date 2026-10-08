<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'sections' => count($this->content->sectionNames()),
            'projects' => count($this->content->common()['projects']),
            'articles' => count($this->content->common()['insights']),
            'users' => \App\Models\User::count(),
        ];

        $recentArticles = \App\Models\Article::latest()->take(5)->get();
        $recentProjects = \App\Models\Project::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentArticles', 'recentProjects'));
    }
}
