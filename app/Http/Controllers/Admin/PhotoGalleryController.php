<?php

namespace App\Http\Controllers\Admin;
use App\Exceptions\Validation\ValidationException;
use http\Env\Request;
use Illuminate\Support\Facades\Response;
use Laracasts\Flash\Flash;
use View;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\GalereyaRequest;
use App\Models\Blog;
use App\Models\PhotoGallery;
use App\Traits\FileUpload;
use App\Repositories\PhotoGallery\PhotoGalleryInterface;
use App\Services\Pagination;

class PhotoGalleryController extends Controller
{

    use  FileUpload;
    protected $photoGallery;
    protected $perPage;

    public function __construct(PhotoGalleryInterface $photoGallery)
    {
        View::share('active', 'modules');
        $this->photoGallery = $photoGallery;
        $this->perPage = config('cms.modules.photo_gallery.per_page');
    }

    public function index()
    {
        $pagiData = $this->photoGallery->paginate(request()->get('page', 1), $this->perPage, true);
        $galereyas = Pagination::makeLengthAware($pagiData->items, $pagiData->totalItems, $this->perPage);
       // $galereyas = PhotoGallery::all();
        return view('backend.galerey.galereya', compact('galereyas'));
    }
//    public function create()
//    {
//        $photo_gallery = $this->photoGallery->find($id);
//
//        return view('backend.galerey.galereya_create', compact('photo_gallery'));
//    }

    public function create()
    {
        $attributes = [
            'title' => 'Photo Gallery Title',
            'content' => 'Photo Gallery Content',
            'is_published' => 0,
        ];
        try {
//            print_r($attributes);
            $id = $this->photoGallery->create($attributes);
         //   return redirect()->to('/admin/galereya/0/edit');
        } catch (ValidationException $e) {
        }
    }

    public function edit($id)
    {
        $photo_gallery = $this->photoGallery->find($id);

        return view('backend.galerey.galereya_create', compact('photo_gallery'));
    }
    public function store(GalereyaRequest $galereyaRequest)
    {
        $data = $galereyaRequest->validated();
        $data = $this->fileUpload($data);
        PhotoGallery::create($data);
        return redirect()->route('admin.galereya.index')->with('message', 'Post successfully create.');
    }

    public function update($id)
    {
        try {
            $this->photoGallery->update($id, request()->all());
            Flash::message('Photo gallery was successfully updated');

            return langRedirectRoute('admin.photo-gallery.index');
        } catch (ValidationException $e) {
            return langRedirectRoute('admin.photo_gallery.edit')->withInput()->withErrors($e->getErrors());
        }
    }

    public function destroy($id)
    {
        $request = request()->merge(['id' => $id]);
        $request->validate(['id' => 'required|exists:galereyas,id']);
        $post = PhotoGallery::find($id);
        unlink('uploads/' . $post->image);
        $post->delete();
        return redirect()->route('admin.galereya.index')->with('message', 'Post successfully delete.');
    }

    public function upload($id)
    {
        try {
            $this->photoGallery->upload($id, request()->file());

            return Response::json('success', 200);
        } catch (ValidationException $e) {
            return Response::json('error: '.$e->getErrors(), 400);
        }
    }

    public function deleteImage()
    {
        return $this->photoGallery->deletePhoto(request()->get('file'));
    }
}
