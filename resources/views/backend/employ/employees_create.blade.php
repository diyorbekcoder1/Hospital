@extends('backend.layouts.app')
@section('content')
    <div class="page-body col-12">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                    </div>
                </div>
            </div>
        </div>
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
                                    <form class="theme-form" method="post" action="{{route('employees.store')}}"
                                          enctype="multipart/form-data">
                                        @method('POST')
                                        @csrf
                                        <div class="col-12">
                                            <div class="form-label-group">
                                                <label for="form_name">Name</label>
                                                <input id="form_name" type="text" name="name"
                                                       class="form-control  @error('name') is-invalid @enderror"
                                                       placeholder="Please enter your name *"
                                                       data-error="name is required."
                                                       value="{{old('name')}}">

                                                @error('name')
                                                <span style="color: red">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-label-group">
                                                <label for="form_name">Specialty</label>
                                                <input id="form_name" type="text" name="specialty"
                                                       class="form-control  @error('specialty') is-invalid @enderror"
                                                       placeholder="Please enter your specialty *"
                                                       data-error="specialty is required."
                                                       value="{{old('specialty')}}">

                                                @error('specialty')
                                                <span style="color: red">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-label-group">
                                                <label for="form_name">Working time</label>
                                                <input id="form_name" type="text" name="working_time"
                                                       class="form-control  @error('working_time') is-invalid @enderror"
                                                       placeholder="Please enter your working_time *"
                                                       data-error="working_time is required."
                                                       value="{{old('working_time')}}">

                                                @error('working_time')
                                                <span style="color: red">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-label-group">
                                                <label for="form_name">Experience</label>
                                                <input id="form_name" type="text" name="experience"
                                                       class="form-control  @error('experience') is-invalid @enderror"
                                                       placeholder="Please enter your experience *"
                                                       data-error="experience is required."
                                                       value="{{old('experience')}}">

                                                @error('experience')
                                                <span style="color: red">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-label-group">
                                                <label for="form_name">Contact</label>
                                                <input id="form_name" type="number" name="contact"
                                                       class="form-control  @error('contact') is-invalid @enderror"
                                                       placeholder="Please enter your contact *"
                                                       data-error="contact is required."
                                                       value="{{old('contact')}}">

                                                @error('contact')
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
@push('javascript')
    <script src="{{asset('/assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('/assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('/assets/js/editor/ckeditor/styles.js')}}"></script>
    <script src="{{asset('/assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>
@endpush
