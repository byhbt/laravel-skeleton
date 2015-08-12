<?php
namespace App\Repositories\Eloquent;

use App\Models\Invitation;
use App\Repositories\InvitationInterface;

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

class InvitationRepository implements InvitationInterface
{
    protected $model;

    public function __construct(Invitation $invitation)
    {
        $this->model = $invitation;
    }

    public function all($columns = ['*'])
    {
        return $this->model->all($columns);
    }

    public function paginate($perPage = 10) {
        return $this->model->paginate($perPage);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id, $attribute = 'id')
    {
        $this->model->findOrFail($id);
        return $this->model->where($attribute, '=', $id)->update($data);
    }

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