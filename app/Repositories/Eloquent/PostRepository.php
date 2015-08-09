<?php
namespace App\Repositories\Eloquent;

use App\Models\Post;
use App\Repositories\PostInterface;
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

    /**
     * Get all post
     *
     * @param  array  $columns [description]
     * @return [type]          [description]
     */
    public function all($columns = ['*'])
    {
        return $this->model->with('category')->get($columns);
    }

    public function paginate($perPage = 10, $orderBy = 'created_at')
    {
        return $this->model->orderBy($orderBy, 'desc')->paginate($perPage);
    }

    public function create(array $data)
    {
        if (isset($data['featured_img'])) {
            // Save Physical file
            $imageName = Helpers::generatePostImage($data['featured_img']);

            // Update file name to database
            $data['featured_img'] = $imageName;
        }

        return $this->model->create($data);
    }

    public function update(array $data, $id, $attribute = 'id')
    {
        $this->model->findOrFail($id);

        if (isset($data['featured_img'])) {
            // Save Physical file
            $imageName = Helpers::generatePostImage($data['featured_img']);

            // Update file name to database
            $data['featured_img'] = $imageName;
        }

        return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * Delete post
     *
     * @param  int $id
     * @return [type]     [description]
     */
    public function delete($id)
    {
        $this->model->findOrFail($id);
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
