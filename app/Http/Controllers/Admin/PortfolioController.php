<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $items = PortfolioItem::orderBy('industry')->latest()->get();

        return view('admin.portfolio.index', compact('items'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['is_published'] = $request->boolean('is_published');

        PortfolioItem::create($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio yozuvi qo‘shildi.');
    }

    public function edit(PortfolioItem $portfolio)
    {
        return view('admin.portfolio.edit', ['item' => $portfolio]);
    }

    public function update(Request $request, PortfolioItem $portfolio)
    {
        $data = $this->validated($request, $portfolio->id);
        $data['is_published'] = $request->boolean('is_published');

        $portfolio->update($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio yozuvi yangilandi.');
    }

    public function destroy(PortfolioItem $portfolio)
    {
        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio yozuvi o‘chirildi.');
    }

    protected function validated(Request $request, ?int $ignoreId = null): array
    {
        $unique = \Illuminate\Validation\Rule::unique('portfolio_items')
            ->where(fn ($q) => $q->where('industry', $request->input('industry'))->where('locale', $request->input('locale')));
        if ($ignoreId) {
            $unique->ignore($ignoreId);
        }

        return $request->validate([
            'industry' => ['required', 'in:mining,automotive,manufacturing,energy,infrastructure'],
            'locale' => ['required', 'in:en,ru,uz'],
            'title' => ['required', 'max:255', $unique],
            'initiator' => ['nullable', 'max:255'],
            'capex' => ['nullable', 'max:100'],
            'scope' => ['nullable'],
            'is_published' => ['nullable', 'boolean'],
        ]);
    }

    public static function industries(): array
    {
        return [
            'mining' => 'Mining & Metallurgy',
            'automotive' => 'Automotive',
            'manufacturing' => 'Manufacturing',
            'energy' => 'Energy',
            'infrastructure' => 'Infrastructure',
        ];
    }
}
