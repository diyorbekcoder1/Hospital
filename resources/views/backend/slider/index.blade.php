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
                                    <a href="{!! route('admin.sliders.edit', $slider->id) !!}"
                                       class="btn btn-primary">Edit</a>
                                    <form class="d-inline"
                                          action="{{route('admin.sliders.destroy', $slider->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Sure Want Delete?')"
                                                class="btn btn-danger">Delete
                                        </button>
                                    </form>
{{--                                    {!! Form::open([route('admin.sliders.destroy', $slider->id )]) !!}--}}
{{--                                    @method('DELETE')--}}
{{--                                    {!! Form::submit( 'Yes', array( 'class' => 'btn btn-danger' ) ) !!}--}}
{{--                                    {!! Form::close() !!}--}}

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
