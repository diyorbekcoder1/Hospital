@extends('layouts.app')


@section('layouts.partials.sidebar')
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
                        <div class="bookmark">

                        </div>
                        <!-- Bookmark Ends-->
                    </div>
                </div>
            </div>
        </div>
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
                        <div class="title m-l-5"><a
                                class="btn mr-1 mb-3 btn-primary btn-sm " href="{{route('blog.create')}}">Blogs add</a>
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
                                                    src="{{ asset('storage/images/'.$blogs->image) }}"
                                                    alt="">
                                            </td>

                                            <td>
                                                <a href="{{route('contact.edit', $blogs)}}"
                                                   class="btn btn-primary">Edit</a>
                                                <form class="d-inline"
                                                      action="{{route('contact.destroy', $blogs->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
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
    </div>
@endsection

@include('layouts.partials.footer')


