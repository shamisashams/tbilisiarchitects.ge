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
use App\Repositories\CityRepositoryInterface;
use App\Repositories\NewsRepositoryInterface;
use App\Repositories\ProjectRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class ProjectController
 * @package App\Http\Controllers\Admin
 */
class NewsController extends Controller
{

    /**
     * @var \App\Repositories\NewsRepositoryInterface
     */
    private $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        // Initialize projectRepository
        $this->newsRepository = $newsRepository;
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
        return view('admin.pages.news.index', [
            'news' => $this->newsRepository->getData($request, ['languages']),
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
        $news = $this->newsRepository->model;

        $url = locale_route('news.store', [], false);
        $method = 'POST';

        return view('admin.pages.news.form', [
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
    public function store(NewsRequest $request)
    {
        $data = [
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'description' => $request['description'],
            'content' => $request['content'],
            'languages' => $this->activeLanguages(),
        ];

        $news = $this->newsRepository->create($data);

        // Save Files
        if ($request->hasFile('images')) {
            $news = $this->newsRepository->saveFiles($news->id, $request);
        }

        return redirect(locale_route('news.show', $news->id))->with('success', 'News created.');
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
        $news = $this->newsRepository->findOrFail($id);

        return view('admin.pages.news.show', [
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
        $news = $this->newsRepository->findOrfail($id);

        $url = locale_route('news.update', $id, false);

        $method = 'PUT';

        return view('admin.pages.news.form', [
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
    public function update(string $locale, int $id, NewsRequest $request)
    {
        $data = [
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'description' => $request['description'],
            'content' => $request['content'],
            'languages' => $this->activeLanguages(),
        ];

        $news = $this->newsRepository->update($id, $data);

        // Update Files
        $this->newsRepository->saveFiles($id, $request);

        return redirect(locale_route('news.show', $news->id))->with('success', 'News updated.');
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
        if (!$this->newsRepository->delete($id)) {
            return redirect(locale_route('news.show', $id))->with('danger', 'News not deleted.');
        }
        return redirect(locale_route('news.index'))->with('success', 'News Deleted.');
    }
}
