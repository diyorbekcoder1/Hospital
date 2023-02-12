<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\GalereyaRequest;
use App\Models\Blog;
use App\Models\PhotoGallery;
use App\Traits\FileUpload;

class   GalereyaController extends Controller
{
    use  FileUpload;
    public function index()
    {
        $galereyas = PhotoGallery::all();
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
