@extends('backend.layouts.limitless')
@section('content')
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Blogs </h5>
                        </div>
                        <div class="title m-l-5 m-1"><a
                                    class="btn mr-1 mb-3 btn-primary btn-sm " href="{{route('admin.blog.create')}}">Blogs
                                add</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">№</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if(isset($blog))
                                    @foreach($blog as $key => $blogs)
                                        <tr>
                                            <th scope="row">{{++$key}}</th>

                                            <td>{{$blogs->title}}</td>


                                            <td style="width: 50px; height: 50px; border-radius: 50%;"><img
                                                        style="width: 50px; height: 50px; border-radius: 50%;"
                                                        src="{{ asset('uploads/'.$blogs->image) }}"
                                                        alt="">
                                            </td>

                                            <td>
                                                <a href="{{route('admin.contacts.edit', $blogs)}}"
                                                   class="btn btn-primary">Edit</a>
                                                <form class="d-inline"
                                                      action="{{route('admin.contacts.destroy', $blogs->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Sure Want Delete?')"
                                                            class="btn btn-danger">Delete
                                                    </button>
                                                </form>


                                            </td>

                                        </tr>

                                    @endforeach

                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Container-fluid Ends-->

@endsection



