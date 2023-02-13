<?php

namespace App\Repositories;

/**
 * Interface CrudableInterface.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
interface CrudableInterface
{
    public function find($id);
    public function create($attributes);
    public function update($id, $attributes);
    public function delete($id);
}
