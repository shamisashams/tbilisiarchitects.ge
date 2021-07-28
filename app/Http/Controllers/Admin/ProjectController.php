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
use App\Http\Requests\Admin\ProjectRequest;
use App\Repositories\CityRepositoryInterface;
use App\Repositories\ProjectRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class ProjectController
 * @package App\Http\Controllers\Admin
 */
class ProjectController extends Controller
{

    /**
     * @var \App\Repositories\ProjectRepositoryInterface
     */
    private $projectRepository;

    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        // Initialize projectRepository
        $this->projectRepository = $projectRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Requests\Admin\ProjectRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(ProjectRequest $request)
    {
        return view('admin.pages.project.index', [
            'projects' => $this->projectRepository->getData($request, ['languages']),
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
        $project = $this->projectRepository->model;

        $url = locale_route('project.store', [], false);
        $method = 'POST';

        return view('admin.pages.project.form', [
            'project' => $project,
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
    public function store(ProjectRequest $request)
    {
        $data = [
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'description' => $request['description'],
            'content' => $request['content'],
            'languages' => $this->activeLanguages(),
        ];

        $project = $this->projectRepository->create($data);

        // Save Files
        if ($request->hasFile('images')) {
            $project = $this->projectRepository->saveFiles($project->id, $request);
        }

        return redirect(locale_route('project.show', $project->id))->with('success', 'Project created.');
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
        $project = $this->projectRepository->findOrFail($id);

        return view('admin.pages.project.show', [
            'project' => $project,
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
        $project = $this->projectRepository->findOrfail($id);

        $url = locale_route('project.update', $id, false);

        $method = 'PUT';

        return view('admin.pages.project.form', [
            'project' => $project,
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
    public function update(string $locale, int $id, ProjectRequest $request)
    {
        $data = [
            'status' => (bool)$request['status'],
            'title' => $request['title'],
            'description' => $request['description'],
            'content' => $request['content'],
            'languages' => $this->activeLanguages(),
        ];

        $answer = $this->projectRepository->update($id, $data);

        // Update Files
        $this->projectRepository->saveFiles($id, $request);

        return redirect(locale_route('project.show', $answer->id))->with('success', 'Project updated.');
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
        if (!$this->projectRepository->delete($id)) {
            return redirect(locale_route('project.show', $id))->with('danger', 'Project not deleted.');
        }
        return redirect(locale_route('project.index'))->with('success', 'Project Deleted.');
    }
}
