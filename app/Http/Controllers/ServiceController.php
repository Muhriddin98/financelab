<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function show(string $service)
    {
        $data = $this->content->service($service);
        abort_if(! $data, 404);

        return $this->siteView('pages.service', $data);
    }
}
