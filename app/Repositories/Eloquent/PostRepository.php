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
 * @copyright  NetBeans
 * @license    Commercial
 * @version    4.0
 * @link       choicaulong.com
 * @since      Class available since Release 1.0
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
     * @param  array  $columns
     */
    public function all($columns = ['*'])
    {
        return $this->model->with('category')->get($columns);
    }

    /**
     * Get post data with pagination
     */
    public function paginate($perPage = 12, $orderBy = 'created_at')
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
        return $this->model->where($field, '=', $value)->get($columns);
    }
    
    /**
     * Get related post
     * 
     * @param int $categoryId
     * @param int $limit
     */
    public function getRelatedPost($categoryId, $limit = 3)
    {
        return $this->model->with('category')
                           ->where('category_id', '=', $categoryId)
                           ->limit($limit)
                           ->get();
    }
}
