<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $projects = Project::where('status', true)->whereHas('city')->with(['city' => function ($query) {
                $query->where('status', true);
        }]);

        if ($request->filled('city')) {
            $projects = $projects->where('city_id',(int)$request['city']);
        }
        $cities = City::where('status',true)->get();

        return view('client.pages.project.index', [
            'projects' => $projects->paginate(1),
            'cities' => $cities
        ]);
    }
}
