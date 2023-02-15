@extends('backend.layouts.limitless')
@section('content')
    <div class="container">
        <div class="col-lg-10">
            @include('flash::message')
            <br>

            <div class="pull-left">
                <div class="btn-toolbar"><a href="{!! langRoute('admin.sliders.create') !!}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;Add Slider </a></div>
            </div>
            <br>
            <br>
            <br>
            @if($sliders->count())
                <div class="">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $sliders as $slider )
                            <tr>
                                <td>{!! $slider->title !!}</td>
                                <td>{!! $slider->description !!}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                            Action
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{!! route('admin.sliders.edit', $slider->id) !!}">
                                                    <span class="glyphicon glyphicon-edit"></span>&nbsp;Edit Slider
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="{{ route('admin.sliders.delete', $slider->id) }}">
                                                    <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Delete Slider
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-danger">No results found</div>
            @endif
        </div>
        <div class="pull-left">
            <ul class="pagination">
                {!! $sliders->render() !!}
            </ul>
        </div>
    </div>
@stop
