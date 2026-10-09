<?php

namespace App\Http\Middleware;

use App\Services\SiteContent;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

/**
 * Tilni URL prefiksidan aniqlaydi: /ru/... -> ru, qolganlari -> en.
 * So'rov davomida locale + til almashtirgich URL larini view larga ulashadi.
 */
class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = in_array($request->segment(1), ['ru', 'uz'], true) ? $request->segment(1) : 'en';
        App::setLocale($locale);
        $prefix = $locale === 'en' ? '' : '/'.$locale;

        // Til almashtirgich uchun joriy sahifaning har bir tildagi URL i.
        $raw = $request->path(); // 'ru/about', 'about', '/'
        $inner = (string) preg_replace('#^(ru|uz)(?=/|$)#', '', $raw);
        $inner = '/'.ltrim($inner, '/');
        $query = $request->getQueryString() ? '?'.$request->getQueryString() : '';

        View::share([
            'locale' => $locale,
            'localePrefix' => $prefix,
            'enUrl' => $inner.$query,
            'ruUrl' => '/ru'.($inner === '/' ? '' : $inner).$query,
            'uzUrl' => '/uz'.($inner === '/' ? '' : $inner).$query,
        ]);

        // AppServiceProvider dagi EN share ni joriy til bilan qayta ulash.
        View::share(app(SiteContent::class)->shared());

        return $next($request);
    }
}
