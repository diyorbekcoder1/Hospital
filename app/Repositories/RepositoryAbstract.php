<?php

namespace App\Repositories;


abstract class RepositoryAbstract extends AbstractValidator
{
    protected function getLang()
    {
        return getLang();
    }

    protected function slug($string)
    {
        return filter_var(str_replace(' ', '-', strtolower(trim($string))), FILTER_SANITIZE_URL);
    }
}
