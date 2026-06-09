<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request): View
    {
        $category = $request->get('category');
        $query = PortfolioItem::active();

        if ($category && $category !== 'all') {
            $query->byCategory($category);
        }

        $portfolio = $query->paginate(9);

        return view('pages.portfolio.index', [
            'portfolio' => $portfolio,
            'category' => $category,
        ]);
    }

    public function show($id): View
    {
        $item = PortfolioItem::findOrFail($id);
        $relatedItems = PortfolioItem::where('category', $item->category)
            ->where('id', '!=', $id)
            ->limit(2)
            ->get();

        return view('pages.portfolio.show', [
            'item' => $item,
            'relatedItems' => $relatedItems,
        ]);
    }
}
