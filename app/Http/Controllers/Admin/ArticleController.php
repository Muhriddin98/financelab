<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ManagesContent;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ArticleController extends Controller
{
    use ManagesContent;

    public function index()
    {
        $articles = Article::latest()->get();

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['is_published'] = $request->boolean('is_published');

        // Karta uchun kichik rasm matndagi birinchi rasmdan olinadi.
        $data['image'] = $this->firstInlineImage($data['body'] ?? null);

        Article::create($data);

        return redirect()->route('admin.articles.index')->with('success', 'Maqola qo‘shildi.');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $data = $this->validated($request, $article->id);
        $data['is_published'] = $request->boolean('is_published');

        $data['image'] = $this->firstInlineImage($data['body'] ?? null);

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Maqola yangilandi.');
    }

    public function destroy(Article $article)
    {
        // Fayl o'chirilmaydi — matn ichi rasmlar umumiy bo'lishi mumkin.
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Maqola o‘chirildi.');
    }

    protected function validated(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'slug' => ['required', 'alpha_dash', 'max:100', Rule::unique('articles', 'slug')->where('locale', $request->input('locale'))->ignore($ignoreId)],
            'locale' => ['required', 'in:en,ru,uz'],
            'type' => ['required', 'in:insight,media'],
            'category' => ['required', 'max:100'],
            'title' => ['required', 'max:255'],
            'published_at' => ['nullable', 'date'],
            'intro' => ['required'],
            'body' => ['required', 'string', 'max:200000'],
            'is_published' => ['nullable', 'boolean'],
        ]);
    }

    /** Matndagi birinchi lokal rasm (karta uchun). Tashqi URL qaytarilmaydi. */
    protected function firstInlineImage(?string $html): ?string
    {
        if (! $html || ! preg_match('/<img[^>]+src=["\']([^"\']+)["\']/i', $html, $m)) {
            return null;
        }

        return str_starts_with($m[1], '/') && ! str_starts_with($m[1], '//') ? $m[1] : null;
    }

    /** TinyMCE matn ichi rasmi: uploads/articles, WebP. {location} qaytaradi. */
    public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
        ]);

        $path = $this->upload($request, 'file', 'uploads/articles', null);
        abort_if(! $path, 422, 'Rasm saqlanmadi.');

        return response()->json(['location' => '/'.$path]);
    }
}
