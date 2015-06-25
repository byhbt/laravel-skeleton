<?php
namespace App\Repositories\Eloquent;

use App\Models\Post;
use App\Repositories\PostInterface;
use App\Models\Video;
use Intervention\Image\Facades\Image;
use Helpers;

/**
 * User Spoken Languages database migration
 *
 * @category
 * @package    SIB\Database\Migrations
 * @author     thanhhb
 * @copyright  PhpStorm
 * @license    Commercial
 * @version    4.0
 * @link       dierotenseiten.ch
 * @since      Class available since Release 4.0
 */

class PostRepository implements PostInterface
{
    protected $model;

    public function __construct(Post $post)
    {
        $this->model = $post;
    }

    public function all($columns = ['*'])
    {
        return $this->model->all($columns);
    }

    public function paginate($perPage = 10, $orderBy = 'created_at') {
        return $this->model->orderBy($orderBy, 'desc')->paginate($perPage);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id, $attribute = 'id')
    {
        // Save Physical file
        $imageName = Helpers::generatePostImage($data['featured_img']);

        // Update file name to database
        $data['featured_img'] = $imageName;

        return $this->model->where($attribute, '=', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function find($id, $columns = ['*'])
    {
        return $this->model->find($id, $columns);
    }

    public function findBy($field, $value, $columns = array('*'))
    {
        return $this->model->where($field, '=', $value, $columns);
    }
}