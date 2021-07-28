<?php
/**
 *  app/Models/ProjectLanguage.php
 *
 * Date-Time: 09.06.21
 * Time: 16:11
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectLanguage
 * @package App\Models
 * @property integer $id
 * @property integer $project_id
 * @property integer $language_id
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class ProjectLanguage extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'project_languages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_id',
        'language_id',
        'title',
        'description',
        'content'
    ];
}
