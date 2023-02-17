<?php

namespace App\Http\Controllers\Admin;

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
        $this->perPage = config('fully.modules.photo_gallery.per_page');
    }

    public function index()
    {
        $pagiData = $this->photoGallery->paginate(Input::get('page', 1), $this->perPage, true);
        $galereyas = Pagination::makeLengthAware($pagiData->items, $pagiData->totalItems, $this->perPage);
       // $galereyas = PhotoGallery::all();
        return view('backend.galerey.galereya', compact('galereyas'));
    }
    public function create()
    {
        return view('backend.galerey.galereya_create');
    }
    public function store(GalereyaRequest $galereyaRequest)
    {
        $data = $galereyaRequest->validated();
        $data = $this->fileUpload($data);
        PhotoGallery::create($data);
        return redirect()->route('admin.galereya.index')->with('message', 'Post successfully create.');
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
}
