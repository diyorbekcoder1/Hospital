<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Galereya;
use Illuminate\Http\Request;
use App\Traits\FileUpload;
class GalereyaController extends Controller
{
        use FileUpload;

    public function index()
    {
        $galereya= Galereya::all();
        return view('galereya.galereya', compact('galereya'));
    }


    public function create()
    {
        return view('galereya.galereya_create');
    }


    public function store(BlogRequest $blogRequest)
    {

        $data = $blogRequest->validated();
        $data = $this->fileUpload($data);
        Galereya::create($data);
        return redirect()->route('galereya.index')->with('message', 'Post successfully create.');
    }


    public function edit($id)
    {
        $blog_edit = Galereya::find($id);
        return view('galereya.galereya_edit', compact('blog_edit'));
    }


    public function update(BlogRequest $blogRequest, $id)
    {
        $data = $blogRequest->validated();
        $post = Galereya::find($id);
        if (isset($data['image'])) {
            $data = $this->fileUpload($data);

        }
        $post->update($data);

        return redirect()->route('galereya.index')->with('message', 'Post successfully update.');
    }


    public function destroy($id)
    {
        $request = request()->merge(['id' => $id]);
        $request->validate(['id' => 'required|exists:galereyas,id']);
        $post = Galereya::find($id);
        unlink('storage/images/' . $post->image);
        $post->delete();
        return redirect()->route('galereya.index')->with('message', 'Post successfully delete.');
    }





}
