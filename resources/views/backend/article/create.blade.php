@extends('backend.layouts.limitless')
@section('content')
    @push('style')
        <link rel="stylesheet" type="text/css" href="/plugins/bootstrap/css/bootstrap-tagsinput.css">
        <link rel="stylesheet" type="text/css" href="/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/select2.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/dropzone.css">

    @endpush
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Project Create</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">Project Create</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">

                        {!! Form::open(array('action' => '\App\Http\Controllers\Admin\ArticleController@store', 'files'=>true)) !!}
                        <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                            <label class="control-label" for="title">Title</label>

                            <div class="controls">
                                {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>old('title'))) !!}
                                @if ($errors->first('title'))
                                    <span class="help-block">{!! $errors->first('title') !!}</span>
                                @endif
                            </div>
                        </div>
                        <br>

                        <div class="control-group {!! $errors->has('tag') ? 'has-error' : '' !!}">
                            <label class="control-label" for="title">Tag</label>
                            <div class="controls">
                                {!! Form::text('tag', null, array('class'=>'form-control', 'id' => 'tag', 'placeholder'=>'Tag', 'value'=>old('tag'))) !!}
                                @if ($errors->first('tag'))
                                    <span class="help-block">{!! $errors->first('tag') !!}</span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="mb-12">
                            <label>
                                Select Category
                            </label>
                            <select name="category_id" class="form-select select">
                                @foreach ($categories as $id=>$category)
                                    <option value="{{$id}}">{{$category}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <br>

                        <!-- Content -->
                        <div class="control-group {!! $errors->has('content') ? 'has-error' : '' !!}">
                            <label class="control-label" for="title">Content</label>
                            <div class="controls">
                                {!! Form::textarea('content', null, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Content', 'value'=>old('content'))) !!}
                                @if ($errors->first('content'))
                                    <span class="help-block">{!! $errors->first('content') !!}</span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span
                                            class="glyphicon glyphicon-th-list">
                            </span>META DATA</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div
                                                class="control-group {!! $errors->has('meta_description') ? 'has-error' : '' !!}">
                                                <label class="control-label" for="title">Meta Description</label>

                                                <div class="controls">
                                                    {!! Form::text('meta_description', null, array('class'=>'form-control', 'id' => 'meta_description', 'placeholder'=>'Meta Description', 'value'=>old('meta_description'))) !!}
                                                    @if ($errors->first('meta_description'))
                                                        <span
                                                            class="help-block">{!! $errors->first('meta_description') !!}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <br>
                                            <!-- Meta Keywords -->
                                            <div
                                                class="control-group {!! $errors->has('meta_keywords') ? 'has-error' : '' !!}">
                                                <label class="control-label" for="title">Meta Keywords</label>

                                                <div class="controls">
                                                    {!! Form::textarea('meta_keywords', null, array('class'=>'form-control', 'id' => 'meta_keywords', 'placeholder'=>'Meta Keywords', 'value'=>old('meta_keywords'))) !!}
                                                    @if ($errors->first('meta_keywords'))
                                                        <span
                                                            class="help-block">{!! $errors->first('meta_keywords') !!}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Upload image</h5>
                            </div>

                            <div class="card-body">

                                <input type="file" class="file-input" name="image" multiple="multiple">
                            </div>
                        </div>

                        {{--        <div class="fileinput fileinput-new control-group {!! $errors->has('image') ? 'has-error' : '' !!}" data-provides="fileinput">--}}
                        {{--            <div class="fileinput-preview thumbnail" data-trigger="fileinput" ></div>--}}
                        {{--            <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span> {!! Form::file('image', null, array('class'=>'form-control', 'id' => 'image', 'placeholder'=>'Image', 'value'=>old('image'))) !!}--}}
                        {{--                    @if ($errors->first('image')) <span class="help-block">{!! $errors->first('image') !!}</span> @endif </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>--}}
                        {{--        </div>--}}
                        <br>

                        <!-- Published -->
                        <div class="control-group {!! $errors->has('is_published') ? 'has-error' : '' !!}">

                            <div class="controls">
                                <label class="">{!! Form::checkbox('is_published', 'is_published') !!} Publish ?</label>
                                @if ($errors->first('is_published'))
                                    <span class="help-block">{!! $errors->first('is_published') !!}</span>
                                @endif
                            </div>
                        </div>
                        <br>

                        {!! Form::submit('Create', array('class' => 'btn btn-success')) !!}
                        {!! Form::close() !!}

                        @push("javascript")
                            <script src="{{asset('/plugins/editor/ckeditor/ckeditor.js')}}"></script>
                            {!! HTML::script('/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js') !!}
                            {!! HTML::script('/plugins/bootstrap/js/bootstrap-tagsinput.js') !!}
                            <script src="{{ asset('/plugins/select2/select2.full.min.js') }}"></script>
                            <script src="{{ asset('/plugins/select2/select2-custom.js') }}"></script>
                            <script src="{{ asset('/plugins/dropzone/dropzone.js')}}"></script>
                            <script src="{{ asset('/plugins/dropzone/dropzone-script.js')}}"></script>
                            {!! HTML::script('/js/jquery.slug.js') !!}
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $("#title").slug();

                                    window.onload = function () {
                                        CKEDITOR.replace('content', {
                                            "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
                                        });
                                    };
                                    if ($('#tag').length != 0) {
                                        var elt = $('#tag');
                                        elt.tagsinput();
                                    }
                                });
                            </script>
                        @endpush
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('javascript')
    <script src="{{asset('/assets/demo/pages/uploader_bootstrap.js')}}"></script>
    <script src="{{asset('/assets/js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendor/uploaders/fileinput/fileinput.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendor/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendor/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('/assets/demo/pages/form_select2.js') }}"></script>
@endpush
