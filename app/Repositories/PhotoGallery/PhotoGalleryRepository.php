<?php

namespace App\Repositories\PhotoGallery;

use App\Models\PhotoGallery;
use File;
use Config;
use App\Models\Photo;
use Image;
use Response;
use App\Repositories\RepositoryAbstract;
use App\Repositories\CrudableInterface;
use App\Exceptions\Validation\ValidationException;

/**
 * Class PhotoGalleryRepository.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class PhotoGalleryRepository extends RepositoryAbstract implements PhotoGalleryInterface, CrudableInterface
{

    protected $width;
    protected $height;
    protected $imgDir;
    protected $perPage;
    protected $photoGallery;
    protected static $rules = [
        'title' => 'required|min:3|unique:categories',
    ];
    protected static $photoRules = [
        'file' => 'mimes:jpg,jpeg,png|max:10000',
    ];

    public function __construct(PhotoGallery $photoGallery)
    {
        $config = Config::get('cms');
        $this->perPage = $config['per_page'];
        $this->width = $config['modules']['photo_gallery']['thumb_size']['width'];
        $this->height = $config['modules']['photo_gallery']['thumb_size']['height'];
        $this->imgDir = $config['modules']['photo_gallery']['image_dir'];
        $this->photoGallery = $photoGallery;
    }

    public function all()
    {
        return $this->photoGallery->where('lang', $this->getLang())->get();
    }

   public function getBySlug($slug)
    {
        return $this->photoGallery->where('slug', $slug)->first();
    }

    public function lists()
    {
        return $this->photoGallery->where('lang', $this->getLang())->lists('title', 'id');
    }

    public function paginate($page = 1, $limit = 10, $all = false)
    {
        $result = new \StdClass();
        $result->page = $page;
        $result->limit = $limit;
        $result->totalItems = 0;
        $result->items = array();

        $query = $this->photoGallery->orderBy('created_at', 'DESC')->where('lang', $this->getLang());

        if (!$all) {
            $query->where('is_published', 1);
        }

        $photoGallery = $query->skip($limit * ($page - 1))
            ->take($limit)
            ->get();

        $result->totalItems = $this->totalPhotoGalleries($all);
        $result->items = $photoGallery->all();

        return $result;
    }


    public function find($id)
    {
        return $this->photoGallery->with('photos')->findOrFail($id);
    }


    public function create($attributes)
    {
        if ($this->isValid($attributes)) {
            $this->photoGallery->lang = $this->getLang();
            $this->photoGallery->fill($attributes)->save();

            return $this->photoGallery->id;
        }

        throw new ValidationException('Photo Gallery validation failed', $this->getErrors());
    }


    public function update($id, $attributes)
    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        $this->photoGallery = $this->find($id);

        if ($this->isValid($attributes)) {
            $this->photoGallery->resluggify();
            $this->photoGallery->fill($attributes)->save();

            return true;
        }

        throw new ValidationException('Photo Gallery validation failed', $this->getErrors());
    }


    public function delete($id)
    {
        $photo_gallery = $this->photoGallery->find($id);

        foreach ($photo_gallery->photos as $photo) {
            $destinationPath = public_path().$this->imgDir;
            File::delete($destinationPath.$photo->file_name);
            File::delete($destinationPath.'thumb_'.$photo->file_name);
            $photo->delete();
        }

        $photo_gallery->delete();
    }


    public function togglePublish($id)
    {
        $photo_gallery = $this->photoGallery->findOrFail($id);

        $photo_gallery->is_published = ($photo_gallery->is_published) ? false : true;
        $photo_gallery->save();

        return Response::json(array('result' => 'success', 'changed' => ($photo_gallery->is_published) ? 1 : 0));
    }

    /**
     * @param $id
     * @param $attributes
     *
     * @return bool
     *
     * @throws \Fully\Exceptions\Validation\ValidationException
     */
    public function upload($id, $attributes)
    {
        if ($this->isValid($attributes, self::$photoRules)) {
            $file = $attributes['file'];

            $destinationPath = public_path().$this->imgDir;
            $fileName = $file->getClientOriginalName();
            $fileSize = $file->getClientSize();

            $upload_success = $file->move($destinationPath, $fileName);

            if ($upload_success) {

                // resizing an uploaded file
                Image::make($destinationPath.$fileName)
                    ->resize($this->width, $this->height)
                    ->save($destinationPath.'thumb_'.$fileName);

                $photo_gallery = $this->photoGallery->find($id);
                $image = new Photo();
                $image->file_name = $fileName;
                $image->file_size = $fileSize;
                $image->title = explode('.', $fileName)[0];
                $image->path = $this->imgDir.$fileName;
                $image->type = 'gallery';
                $photo_gallery->photos()->save($image);

                return true;
            }
        }
        throw new ValidationException('Upload photo validation failed', $this->getErrors());
    }

    /**
     * @param $fileName
     *
     * @return mixed
     */
    public function deletePhoto($fileName)
    {
        Photo::where('file_name', '=', $fileName)->delete();
        $destinationPath = public_path().$this->imgDir;
        File::delete($destinationPath.$fileName);
        File::delete($destinationPath.'thumb_'.$fileName);

        return Response::json('success', 200);
    }

    /**
     * Get total photo galleries count.
     *
     * @param bool $all
     *
     * @return mixed
     */
    protected function totalPhotoGalleries($all = false)
    {
        if (!$all) {
            return $this->photoGallery->where('is_published', 1)->where('lang', $this->getLang())->count();
        }

        return $this->photoGallery->where('lang', $this->getLang())->count();
    }
}
