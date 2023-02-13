@extends('backend.layouts.limitless')
@section('content')
    @push('style')
        {!! HTML::style('/plugins/dropzone/css/basic.css') !!}
        {!! HTML::style('/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css') !!}
        {!! HTML::style('/plugins/dropzone/css/dropzone.css') !!}
    @endpush
    <section class="content-header">
        <h1> Slider
            <small> | Add Slider</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url(getLang(). '/admin/slider') !!}"><i class="fa fa-tint"></i> Slider</a></li>
            <li class="active">Add Slider</li>
        </ol>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        {!! Form::open(array('action' => '\App\Http\Controllers\Admin\SliderController@store', 'files'=>true)) !!}
                        <!-- Title -->

                        <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                            <label class="control-label" for="title">Title</label>

                            <div class="controls">
                                {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>old('title'))) !!}
                                @if ($errors->first('title'))
                                    <span class="help-block">{!! $errors->first('title') !!}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Description</h5>
                    </div>
                    <div class="card-body  {!! $errors->has('description') ? 'has-error' : '' !!}">


                            <div class="controls">
                                {!! Form::textarea('description', null, array('class'=>'form-control', 'id' => 'description', 'placeholder'=>'Description', 'value'=>old('description'))) !!}
                                @if ($errors->first('description'))
                                    <span class="help-block">{!! $errors->first('description') !!}</span>
                                @endif
                            </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Upload image</h5>
                    </div>

                    <div class="card-body">
{{--                        {!! Form::file('image', null, ['class'=>'file-input', 'id' => 'image','multiple'=>'multiple', 'value'=>old('image')]) !!}--}}
                            <div class="col-lg-12">
                                <input type="file" class="form-control" name="image" />
                                <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                {!! Form::submit('Create', array('class' => 'btn btn-success')) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    @push("javascript")
        <script src="{{asset('/plugins/editor/ckeditor/ckeditor.js')}}"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                // $("#title").slug();

                window.onload = function () {
                    CKEDITOR.replace('description', {
                        "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
                    });
                };

            });
        </script>
    @endpush
@stop
