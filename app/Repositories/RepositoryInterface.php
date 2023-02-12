<?php

namespace App\Repositories;


interface RepositoryInterface
{

    public function find($id);


    public function all();

    public function paginate($page = 1, $limit = 10, $all = false);
}
