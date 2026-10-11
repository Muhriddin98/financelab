<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ManagesContent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticImageController extends Controller
{
    use ManagesContent;

    /** Faqat ro'yxatdagi chrome rasmlar — maqola/loyiha rasmlari bu yerda emas. */
    public function index()
    {
        $images = collect(config('static_images'))->map(function ($item, $key) {
            $full = public_path($item['path']);
            $item['key'] = $key;
            $item['url'] = '/'.$item['path'];
            $item['size'] = is_file($full) ? round(filesize($full) / 1024).' KB' : 'yo‘q';
            $dim = is_file($full) ? @getimagesize($full) : false;
            $item['dimensions'] = $dim ? $dim[0].'×'.$dim[1] : '—';

            return $item;
        });

        return view('admin.static-images.index', compact('images'));
    }

    public function edit(string $key)
    {
        $image = $this->find($key);

        return view('admin.static-images.edit', compact('image'));
    }

    public function update(Request $request, string $key)
    {
        $image = $this->find($key);

        $request->validate([
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
        ]);

        // O'sha yo'lga qayta yoziladi (1600px, WebP q82) — havolalar buzilmaydi.
        $this->convertToWebp(
            $request->file('image')->getPathname(),
            public_path($image['path']),
            1600, 82
        );

        return redirect()->route('admin.static-images.index')->with('success', $image['label'].' yangilandi.');
    }

    protected function find(string $key): array
    {
        $all = config('static_images');
        abort_if(! isset($all[$key]), 404);

        return $all[$key] + ['key' => $key, 'url' => '/'.$all[$key]['path']];
    }
}
