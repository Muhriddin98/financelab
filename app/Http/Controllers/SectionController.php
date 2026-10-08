<?php

namespace App\Http\Controllers;

class SectionController extends Controller
{
    public function show(string $section)
    {
        $data = $this->content->section($section);
        abort_if(! $data, 404);

        return $this->siteView('pages.section', $data);
    }
}
