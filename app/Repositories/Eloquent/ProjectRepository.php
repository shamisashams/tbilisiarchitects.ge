<?php
/**
 *  app/Repositories/Eloquent/ProjectRepository.php
 *
 * Date-Time: 09.06.21
 * Time: 16:18
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories\Eloquent;


use App\Models\Project;
use App\Models\ProjectLanguage;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\ProjectRepositoryInterface;
use Illuminate\Support\Facades\DB;

/**
 * Class CityRepository
 * @package App\Repositories\Eloquent
 */
class ProjectRepository extends BaseRepository implements ProjectRepositoryInterface
{
    /**
     * ProjectRepository constructor.
     *
     * @param \App\Models\Project $model
     */
    public function __construct(Project $model)
    {
        parent::__construct($model);
    }

    /**
     * Create new model
     *
     * @param array $attributes
     *
     * @return \App\Models\Project
     */
    public function create(array $attributes = []): Project
    {
        try {
            DB::connection()->beginTransaction();

            $data = [
                'status' => $attributes['status'],
                'video_link' => $attributes['video_link']
            ];

            $this->model = parent::create($data);

            $projectLanguages = [];

            foreach ($attributes['languages'] as $language) {
                $projectLanguages [] = [
                    'language_id' => $language['id'],
                    'title' => $attributes['title'][$language['id']],
                    'description' => $attributes['description'][$language['id']],
                    'content' => $attributes['content'][$language['id']],
                ];
            }

            $this->model->languages()->createMany($projectLanguages);

            DB::connection()->commit();

            return $this->model;
        } catch (\PDOException $e) {
            DB::connection()->rollBack();
        }
    }

    /**
     * Create new model
     *
     * @param int $id
     * @param array $data
     *
     */
    public function update(int $id, array $data = []): Project
    {

        try {
            DB::connection()->beginTransaction();
            $attributes = [
                'status' => $data['status'],
                'video_link' => $data['video_link'],
            ];

            $this->model = parent::update($id, $attributes);

            foreach ($data['languages'] as $language) {
                if (null !== $this->model->language($language['id'])) {
                    $this->model->language($language['id'])->update([
                        'title' => $data['title'][$language['id']],
                        'description' => $data['description'][$language['id']],
                        'content' => $data['content'][$language['id']],
                    ]);
                }
                else{
                    ProjectLanguage::create([
                        'project_id'=>$this->model->id,
                        'language_id' => $language['id'],
                        'title'=>$data['title'][$language['id']],
                        'description' => $data['description'][$language['id']],
                        'content' => $data['content'][$language['id']],
                    ]);
                }
            }

            DB::connection()->commit();

            return $this->model;
        } catch (\PDOException $e) {
            DB::connection()->rollBack();
        }
    }
}
