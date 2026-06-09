<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $featuredPortfolio = PortfolioItem::active()->limit(3)->get();
        
        return view('pages.home', [
            'featuredPortfolio' => $featuredPortfolio,
        ]);
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function services(): View
    {
        return view('pages.services');
    }

    public function marketingServices(): View
    {
        return view('pages.services.marketing');
    }

    public function medicalServices(): View
    {
        return view('pages.services.medical');
    }
}
