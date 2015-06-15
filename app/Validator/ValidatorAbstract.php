<?php
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

namespace App\Validator;

use Illuminate\Validation\Factory;

class ValidatorAbstract implements ValidableInterface{

    protected $validator;

    protected $data = array();

    protected $rules = array();

    protected $errors = array();

    public function __construct(Factory $validator)
    {
        $this->validator = $validator;
    }

    public function with(array $input)
    {
        $this->data = $input;

        return $this;
    }

    public function passes()
    {
        $validator = $this->validator->make($this->data, $this->rules);

        if($validator->fails()) {
            $this->errors = $validator->messages();
            return false;
        }

        return true;
    }

    public function errors()
    {
        return $this->errors;
    }
}