<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hnh;
use Illuminate\Http\Request;

class HnhController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        return view('client.pages.hnh.index', [
            'hnhs' => Hnh::orderBy('created_at', 'desc')->where(['status' => 1])->with('features')->paginate(6),
        ]);
    }
}
