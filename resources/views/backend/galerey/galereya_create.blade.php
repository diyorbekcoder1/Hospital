@extends('backend.layouts.limitless')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12 col-xl-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>Galereya</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" method="post" action="{{route('admin.galereya.store')}}"
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
                                    <div class="card mt-2">
                                        <div class="card-header">
                                            <h5 class="mb-0">Upload image</h5>
                                        </div>

                                        <div class="card-body">

                                            <input type="file" class="file-input" name="image" multiple="multiple">
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px;" class="block-header">
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
@endsection
@push('javascript')
    <script src="{{asset('/plugins/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('/plugins/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('/plugins/editor/ckeditor/styles.js')}}"></script>
    <script src="{{asset('/plugins/editor/ckeditor/ckeditor.custom.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // myDropzone is the configuration for the element that has an id attribute
            // with the value my-dropzone (or myDropzone)
            Dropzone.options.myDropzone = {
                init: function () {
                    this.on("addedfile", function (file) {

                        var removeButton = Dropzone.createElement('<a class="dz-remove">Remove file</a>');
                        var _this = this;

                        removeButton.addEventListener("click", function (e) {
                            e.preventDefault();
                            e.stopPropagation();

                            var fileInfo = new Array();
                            fileInfo['name'] = file.name;

                            $.ajax({
                                type: "POST",
                                url: "{!! url(getLang() . '/admin/photo-gallery-delete-image') !!}",
                                headers: {
                                    'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                                },
                                data: {file: file.name},
                                success: function (response) {

                                    if (response == 'success') {

                                        //alert('deleted');
                                    }
                                },
                                error: function () {
                                    alert("error");
                                }
                            });

                            _this.removeFile(file);

                            // If you want to the delete the file on the server as well,
                            // you can do the AJAX request here.
                        });

                        // Add the button to the file preview element.
                        file.previewElement.appendChild(removeButton);
                    });
                }
            };

            var myDropzone = new Dropzone("#dropzone .dropzone");
            Dropzone.options.myDropzone = false;
            @foreach($photo_gallery->photos as $photo)

            // Create the mock file:
            var mockFile = { name: "{!! $photo->file_name !!}", size: "{!! $photo->file_size !!}" };

            // Call the default addedfile event handler
            myDropzone.emit("addedfile", mockFile);

            // And optionally show the thumbnail of the file:
            myDropzone.emit("thumbnail", mockFile, "{!! url($photo->path) !!}");

            @endforeach
        });
    </script>
@endpush
