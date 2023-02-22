<?php

namespace App\Repositories\PhotoGallery;

use App\Repositories\RepositoryInterface;

interface PhotoGalleryInterface extends RepositoryInterface
{
    /**
     * @param $slug
     *
     * @return mixed
     */
    public function getBySlug($slug);
}
