<?php
/**
 *  app/Repositories/Eloquent/ProjectRepository.php
 *
 * Date-Time: 09.06.21
 * Time: 16:18
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories\Eloquent;


use App\Models\Category;
use App\Models\CategoryLanguage;
use App\Models\News;
use App\Models\NewsLanguage;
use App\Models\Project;
use App\Models\ProjectLanguage;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\NewsRepositoryInterface;
use App\Repositories\ProjectRepositoryInterface;
use Illuminate\Support\Facades\DB;

/**
 * Class CityRepository
 * @package App\Repositories\Eloquent
 */
class CategoryRepository extends BaseRepository
{
    /**
     * ProjectRepository constructor.
     *
     * @param \App\Models\News $model
     */
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    /**
     * Create new model
     *
     * @param array $attributes
     *
     * @return \App\Models\News
     */
    public function create(array $attributes = []): Category
    {
        //dd($attributes);
        try {
            DB::connection()->beginTransaction();

            $data = [
                'status' => $attributes['status'],
                'slug' => $attributes['slug']
            ];

            $this->model = parent::create($data);

            $projectLanguages = [];

            foreach ($attributes['languages'] as $language) {
                $projectLanguages [] = [
                    'language_id' => $language['id'],
                    'title' => $attributes['title'][$language['id']],
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
    public function update(int $id, array $data = []): Category
    {
        try {
            DB::connection()->beginTransaction();

            $attributes = [
                'status' => $data['status'],
                'slug' => $data['slug']
            ];

            $this->model = parent::update($id, $attributes);

            foreach ($data['languages'] as $language) {
                if (null !== $this->model->language($language['id'])) {
                    $this->model->language($language['id'])->update([
                        'title' => $data['title'][$language['id']],
                    ]);
                }
                else{
                    CategoryLanguage::create([
                        'category_id'=>$this->model->id,
                        'language_id' => $language['id'],
                        'title'=>$data['title'][$language['id']],
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
