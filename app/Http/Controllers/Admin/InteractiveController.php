<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InteractiveRequest;
use App\Models\Interactiv;
use App\Models\Interactive_service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InteractiveController extends Controller
{

    public function index()
    {
        $interactive = Interactive_service::with('interactive')->latest()->get();

        return view('backend.interactive.interactive', compact('interactive'));
    }


    public function create()
    {
        $interactive_service = Interactive_service::all();

                return view('backend.interactive.interactive_create', compact('interactive_service'));
    }


    public function store(InteractiveRequest $request)
    {
        $request->validate([

            'status' => 'required|string|max:255',
            'pdf' => 'required|mimes:pdf|max:5120',
            'interactive_services_id' => 'required|exists:App\Models\Interactive_service,id'
        ]);
        Post::create([
            'title' => $request->title,
            'slug' => \Str::slug($request->slug),
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);



   ;





        return redirect()->route('posts.index')->with('status', 'Post Created Successfully');
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('posts.edit', compact('categories', 'post'));
    }


    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required',
            'category_id' => 'required|exists:App\Models\Category,id',
        ]);
        $post->title = $request->title;
        $post->slug = \Str::slug($request->slug);
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->save();

        return redirect()->route('posts.index')->with('status', 'Post Updated Successfully');
    }


    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('status', 'Post Delete Successfully');
    }
}
