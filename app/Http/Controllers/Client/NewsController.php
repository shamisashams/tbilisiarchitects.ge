<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Project;
use App\Models\Slider;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $news = News::where('status', true)->orderBy('created_at','desc')->paginate(9);

        return view('client.pages.news.index', [
            'news' => $news
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function view(string $locale, int $id)
    {
        $news = News::where(['id' => $id, 'status' => true])->with('languages')->first();

        return view('client.pages.news.details', [
            'news' => $news,
        ]);
    }
}
