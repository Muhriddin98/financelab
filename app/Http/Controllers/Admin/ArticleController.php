<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\ManagesContent;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    use ManagesContent;

    public function index()
    {
        $articles = Article::orderBy('sort_order')->get();

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

        $data['body'] = $this->linesToArray($request->input('body'));
        $data['image'] = $this->upload($request, 'image', 'uploads/articles', null, $request->input('slug'));

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

        $data['body'] = $this->linesToArray($request->input('body'));
        $data['image'] = $this->upload($request, 'image', 'uploads/articles', $article->image, $article->slug);

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Maqola yangilandi.');
    }

    public function destroy(Article $article)
    {
        $this->deleteFile($article->image);
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Maqola o‘chirildi.');
    }

    protected function validated(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'slug' => ['required', 'alpha_dash', 'max:100', 'unique:articles,slug'.($ignoreId ? ','.$ignoreId : '')],
            'type' => ['required', 'in:insight,media'],
            'category' => ['required', 'max:100'],
            'title' => ['required', 'max:255'],
            'published_at' => ['nullable', 'date'],
            'intro' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_published' => ['nullable', 'boolean'],
        ]);
    }
}
