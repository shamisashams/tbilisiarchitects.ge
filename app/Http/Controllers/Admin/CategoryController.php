<?php
/**
 *  app/Http/Controllers/Admin/ProjectController.php
 *
 * Date-Time: 09.06.21
 * Time: 16:13
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\Admin\ProjectRequest;
use App\Models\Category;
use App\Models\CategoryLanguage;
use App\Models\Language;
use App\Repositories\CityRepositoryInterface;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\NewsRepositoryInterface;
use App\Repositories\ProjectRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class ProjectController
 * @package App\Http\Controllers\Admin
 */
class CategoryController extends Controller
{

    /**
     * @var \App\Repositories\NewsRepositoryInterface
     */
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        // Initialize projectRepository
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Requests\Admin\ProjectRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(NewsRequest $request)
    {
        return view('admin.pages.category.index', [
            'news' => $this->categoryRepository->getData($request, ['languages']),
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $news = $this->categoryRepository->model;

        $url = locale_route('category.store', [], false);
        $method = 'POST';

        return view('admin.pages.category.form', [
            'news' => $news,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Admin\ProjectRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $defaultLanguage = Language::where('default', true)->firstOrFail();

        //dd($request->all());
        $request->validate([
            'title.' . $defaultLanguage->id => 'required|string|max:255',
            'slug' => 'required|unique:categories,slug'
        ]);
        $data = [
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'slug' => $request['slug'],
            'languages' => $this->activeLanguages(),
        ];

        $news = $this->categoryRepository->create($data);

        // Save Files
        if ($request->hasFile('images')) {
            $news = $this->categoryRepository->saveFiles($news->id, $request);
        }

        return redirect(locale_route('category.show', $news->id))->with('success', 'News created.');
    }

    /**
     * Display the specified resource.
     *
     * @param string $locale
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $locale, int $id)
    {
        $news = $this->categoryRepository->findOrFail($id);

        return view('admin.pages.category.show', [
            'news' => $news,
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $locale
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(string $locale, int $id)
    {
        $news = $this->categoryRepository->findOrfail($id);

        $url = locale_route('category.update', $id, false);

        $method = 'PUT';

        return view('admin.pages.category.form', [
            'news' => $news,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param string $locale
     * @param int $id
     *
     * @param \App\Http\Requests\Admin\ProjectRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(string $locale, int $id, Request $request)
    {
        $defaultLanguage = Language::where('default', true)->firstOrFail();
        $request->validate([
            'title.' . $defaultLanguage->id => 'required|string|max:255',
            'slug' => 'required|unique:categories,slug,'.$id
        ]);
        $data = [
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'slug' => $request['slug'],
            'languages' => $this->activeLanguages(),
        ];

        $news = $this->categoryRepository->update($id, $data);

        // Update Files
        $this->categoryRepository->saveFiles($id, $request);

        return redirect(locale_route('category.show', $news->id))->with('success', 'News updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $locale
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(string $locale, int $id)
    {
        CategoryLanguage::query()->where('category_id',$id)->delete();
        if (!Category::query()->where('id',$id)->delete()) {
            return redirect(locale_route('category.show', $id))->with('danger', 'News not deleted.');
        }
        return redirect(locale_route('category.index'))->with('success', 'News Deleted.');
    }
}
