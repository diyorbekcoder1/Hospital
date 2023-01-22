<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Validator as V;

/**
 * Class RepositoryAbstract.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
abstract class RepositoryAbstract
{

    protected $errors;

    public function isValid(array $attributes, array $rules = null)
    {
        $v = V::make($attributes, ($rules) ? $rules : static::$rules);

        if ($v->fails()) {
            $this->setErrors($v->messages());

            return false;
        }

        return true;
    }


    public function getErrors()
    {
        return $this->errors;
    }


    public function setErrors($error)
    {
        $this->errors = $error;
    }

    protected function getLang()
    {
        return getLang();
    }

    protected function slug($string)
    {
        return filter_var(str_replace(' ', '-', strtolower(trim($string))), FILTER_SANITIZE_URL);
    }
}
