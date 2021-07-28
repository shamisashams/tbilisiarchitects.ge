<?php
/**
 *  app/Repositories/ProjectRepositoryInterface.php
 *
 * Date-Time: 09.06.21
 * Time: 16:17
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories;


use App\Http\Requests\Admin\CityRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\Admin\ProjectRequest;
use App\Models\News;
use App\Models\Project;

/**
 * Interface ProjectRepositoryInterface
 * @package App\Repositories
 */
interface NewsRepositoryInterface
{

    /**
     * @param \App\Http\Requests\Admin\NewsRequest $request
     * @param array $with
     */
    public function getData(NewsRequest $request, array $with = []);

    /**
     * @param array $attributes
     *
     * @return \App\Models\News
     */
    public function create(array $attributes): News;

    /**
     * Update model by the given ID
     *
     * @param integer $id
     * @param array $data
     *
     * @return \App\Models\News
     */
    public function update(int $id, array $data = []): News;

    /**
     * @param int $id
     * @param \App\Http\Requests\Admin\NewsRequest $request
     *
     * @return \App\Models\Project
     */
    public function saveFiles(int $id, NewsRequest $request);
}
