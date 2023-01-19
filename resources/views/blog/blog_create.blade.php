@extends('layouts.app')


@section('sidebar')
    <ul class="nav-menu custom-scrollbar">
        <li class="back-btn">
            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
            </div>
        </li>
        <li class="sidebar-main-title">
            <div>
                <h6>General </h6>
            </div>
        </li>
        <li class="dropdown"><a class="nav-link menu-title" href="{{route('home')}}"><i data-feather="home"></i><span>Dashboard</span></a>

        </li>
        <li class="dropdown"><a class="nav-link menu-title" href="{{route('contact.index')}}"><i
                    data-feather="align-justify"></i><span>Contact</span></a>

        </li>
        <li class="dropdown"><a class="nav-link menu-title" href="{{route('blog.index')}}"><i
                    data-feather="align-justify"></i><span>Blogs</span></a>

        </li>


    </ul>
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">

                    <div class="col-sm-6">
                        <!-- Bookmark Start-->

                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-xl-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h5>Blogs</h5>
                                </div>
                                <div class="card-body">
                                    <form class="theme-form" method="post" action="{{route('blog.store')}}"
                                          enctype="multipart/form-data">
                                        @method('POST')
                                        @csrf
                                        <div class="col-12">
                                            <div class="form-label-group">
                                                <label for="form_name">Title</label>
                                                <input id="form_name" type="text" name="title"
                                                       class="form-control  @error('title') is-invalid @enderror"
                                                       placeholder="Please enter your address *"
                                                       data-error="address is required."
                                                       value="{{old('title')}}">

                                                @error('title')
                                                <span style="color: red">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 mt-5">
                                            <div class="form-label-group">
                                                <label for="form_name">Description</label>
                                                <textarea id="editor1" name="description" cols="30"
                                                          rows="10"></textarea>

                                                @error('description')
                                                <span style="color: red">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-label-group">
                                                <label for="form_message">Image *</label>
                                                <input id="form_message" type="file" name="image"
                                                       class="form-control @error('image') is-invalid @enderror"
                                                       placeholder="Please enter your image *"
                                                       data-error="Image is required.">
                                                @error('image')
                                                <span style="color: red">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-primary">Submit</button>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
