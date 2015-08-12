<?php
namespace App\Repositories;

/**
 * User Spoken Languages database migration
 *
 * @category
 * @package    SIB\Database\Migrations
 * @author     thanhhb
 * @copyright  NetBeans
 * @license    Commercial
 * @version    4.0
 * @link       caulong.me
 * @since      Class available since Release 1.0
 */

interface VideoCategoryInterface
{
    public function all($columns = ['*']);

    public function paginate($perPage = 10);

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id, $columns = ['*']);

    public function findBy($field, $value, $column = array('*'));
}