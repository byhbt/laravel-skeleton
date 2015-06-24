<?php
namespace App\Validator;

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

class PostValidator extends ValidatorAbstract{

    protected $rules = [
        'slug' => 'required',
        'title' => 'required',
        'content' => 'required',
        'category_id' => 'required',
    ];
}