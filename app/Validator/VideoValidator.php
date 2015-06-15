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

class VideoValidator extends ValidatorAbstract{
    protected $rules = [
        'youtube_id' => 'required',
//        'youtube_id' => 'required|unique:videos,youtube_id',
        'slug' => 'required',
        'title' => 'required',
    ];
}