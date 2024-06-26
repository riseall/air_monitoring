<?php

namespace App\Http\Controllers;

use App\Services\GNewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $gnewsService;

    public function __construct(GNewsService $gnewsService)
    {
        $this->gnewsService = $gnewsService;
    }

    public function index(Request $request)
    {
        $news = $this->gnewsService->getAQINews();

        return view('berita', compact('news'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query', 'latest');
        $max = $request->input('max', 30); // default to 30 if not provided
        $news = $this->gnewsService->getNews($query, 'en', 'us', $max);

        return view('berita', compact('news'));
    }
}
