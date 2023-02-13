<?php

namespace App\Repositories\Page;

use App\Repositories\RepositoryInterface;

interface PageInterface extends RepositoryInterface
{

    public function getBySlug($slug, $isPublished = false);
}
