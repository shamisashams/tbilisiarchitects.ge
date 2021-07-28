<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request, string $locale, string $slug)
    {
        $category = Category::where(['slug' => $slug, 'status' => true])->with(['features' => function ($query) {
            $query->where('search', true);
        }, 'features.answers' => function ($query) {
            $query->where('status', true);
        }])->firstOrFail();

        $products = Product::where(['status' => true, 'category_id' => $category->id]);

        if ($request->filled('feature')) {
            foreach ($request->feature as $key => $answers){
                $products = $products->whereHas('features', function (Builder $query) use ($key, $answers) {
                    $answerIds= json_encode(array_keys($answers));
                    $query->where('feature_id', $key)
                        ->whereRaw('JSON_CONTAINS(answers,\''.$answerIds.'\')');
                });
            }
        }

        return view('client.pages.catalog.index', [
            'products' => $products->paginate(12),
            'category' => $category
        ]);
    }

    public function show(Request $request, string $locale, string $slug) {
        $product = Product::with('features')->where(['status' => true,'slug' => $slug])->firstOrFail();

        return view('client.pages.catalog.show', [
            'product' => $product,
        ]);
    }

}
