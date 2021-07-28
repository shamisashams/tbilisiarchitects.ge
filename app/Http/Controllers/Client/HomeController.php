<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $sliders = Slider::where('status', true)->with('languages')->get();

        $projects = Project::where('status', true)->with(['city' => function ($query) {
            $query->where('status', true);
        }])->whereHas('city')->groupBy('city_id')->limit(6)->get();

        $categories = Category::where('status',true)->orderBy('position')->limit(4)->get();

        return view('client.pages.home.index', [
            'sliders' => $sliders,
            'projects' => $projects,
            'categories' => $categories
        ]);
    }
}
