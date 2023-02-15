@extends('backend.layouts.limitless')
@section('content')
    <section class="content-header">
        <h1> Slider
            <small> | Update Slider</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url('/admin/slider') !!}"><i class="fa fa-tint"></i> Slider</a></li>
            <li class="active">Update Slider</li>
        </ol>
    </section>
    <div class="container">
        {!! Form::open([route('admin.sliders.update', $slider->id), 'method'=>'PATCH', 'files'=>true]) !!}
        <!-- Title -->
        <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
            <label class="control-label" for="title">Title</label>
            <div class="controls">
                {!! Form::text('title', $slider->title, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>old('title'))) !!}
                @if ($errors->first('title'))
                    <span class="help-block">{!! $errors->first('title') !!}</span>
                @endif
            </div>
        </div>
        <br>

        <!-- Description -->
        <div class="control-group {!! $errors->has('description') ? 'has-error' : '' !!}">
            <label class="control-label" for="description">Description</label>

            <div class="controls">
                {!! Form::textarea('description', $slider->description, array('class'=>'form-control', 'id' => 'description', 'placeholder'=>'Description', 'value'=>old('description'))) !!}
                @if ($errors->first('description'))
                    <span class="help-block">{!! $errors->first('description') !!}</span>
                @endif
            </div>
        </div>
        <br>

        <!-- Image -->
        <div class="fileinput fileinput-new control-group {!! $errors->has('image') ? 'has-error' : '' !!}" data-provides="fileinput">
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

            <!-- Form actions -->
            {!! Form::submit('Update', array('class' => 'btn btn-success')) !!}
            {!! Form::close() !!}
        </div>
@stop
