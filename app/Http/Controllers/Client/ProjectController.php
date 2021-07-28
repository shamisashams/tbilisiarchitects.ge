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
        $projects = Project::where('status', true)->paginate(9);


        return view('client.pages.project.index', [
            'projects' => $projects
        ]);
    }

    public function view(string $locale,int $id){
        $project=Project::where(['id'=>$id,'status'=>true])->first();
        return view('client.pages.project.details', [
            'project' => $project
        ]);
    }
}
