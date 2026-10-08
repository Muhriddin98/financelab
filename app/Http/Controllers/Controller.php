<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\SiteContent;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct(protected SiteContent $content) {}

    /** Kontent view: common to'plam + sahifa datasi bilan render. */
    protected function siteView(string $view, array $data = [])
    {
        return view($view, array_merge($this->content->common(), $data));
    }
}
