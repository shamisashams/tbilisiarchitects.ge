<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request,$locale,$slug = null)
    {
        $category = Category::with('languages')->where('slug',$slug)->firstOrFail();
        $projects = Project::query()->where('status', true)
            ->whereHas('categories',function ($q)use ($category){
                $q->where('categories.id',$category->id);
            })
            ->orderBy('created_at', 'desc')->paginate(9);

        return view('client.pages.project.index', [
            'projects' => $projects,
            'category' => $category
        ]);
    }

    public function view(string $locale, int $id)
    {
        $project = Project::where(['id' => $id, 'status' => true])->first();
        return view('client.pages.project.details', [
            'project' => $project
        ]);
    }
}
