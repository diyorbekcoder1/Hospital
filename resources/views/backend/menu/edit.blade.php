@extends('backend.layouts.limitless')
@section('title', 'Меню')
@section('parentPageTitle', 'Меню список')

@section('content')
    <link href="{{asset('/assets/css/menu-managment.css')}}" rel="stylesheet" type="text/css">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12 col-sm-12">

            <div class="card ">
                <div class="body p-3">
                    <div class="pull-right">
                        <div id="msg"></div>
                    </div>
                    <h6>Меню</h6>
                    <hr>
                    <div class="clearfix m-b-20">
                        <div class="dd" id="nestable">
                            {!! $menus !!}
                        </div>
                    </div>
                    @if($menus === null)
                        <div class="alert alert-danger">No results found</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">

            <div class="card">
                <div class="body p-3">
                    {!! Form::open(['route'=>['admin.menus.update',$menu->id],'method'=>'put', 'enctype'=>'multipart/form-data']) !!}
                    <div class="pull-right">
                        <div id="msg"></div>
                    </div>
                    <button  class="btn btn-primary" type="submit">
                        <span class="glyphicon glyphicon-check"></span>&nbsp;save
                    </button>
                    <a href="{!! route('admin.menus.create') !!}" class="btn btn-danger">
                        <span class="glyphicon glyphicon-trash"></span>&nbsp;cancel </a> <br>
                    <hr>
                    <div class="clearfix">
                        <h6>Заголовок пункта меню</h6>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Название меню" aria-label="Username" aria-describedby="basic-addon1" value="@if ($menu){{ $menu->title }}@endif">
                        </div>
                        <div class="form-group">
                            <label>Тип</label>

                            <div class="fancy-radio">
                                <label><input name="type" class="type" value="module" type="radio" @if($menu->type=='module') checked @endif><span><i></i>Модул</span></label>
                            </div>
                            <div class="fancy-radio">
                                <label><input name="type" class="type" value="custom" type="radio" @if($menu->type=='custom') checked @endif><span><i></i>Custom</span></label>
                            </div>
                        </div>
                        <div class="form-group {!! $errors->has('options') ? 'has-error' : '' !!} modules">
                            <label class="control-label" for="title">Опция</label>

                            <div class="controls">
                                {!! Form::select('option', $options, $menu->option, array('class'=>'form-control', 'id' => 'options', 'value'=>old('options'))) !!}
                                @if ($errors->first('options'))
                                    <span class="help-block">{!! $errors->first('options') !!}</span>
                                @endif
                            </div>
                        </div>

                        <div style="display:none" class="form-group {!! $errors->has('url') ? 'has-error' : '' !!} url">
                            <label class="control-label" for="first-name">URL</label>

                            <div class="controls">
                                {!! Form::text('url',null, array('class'=>'form-control', 'id' => 'url', 'placeholder'=>'Url', 'value'=>old('url'))) !!}
                                @if ($errors->first('url'))
                                    <span class="help-block">{!! $errors->first('url') !!}</span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label>  <h6>Язык</h6></label>
                            {!! Form::select('lang', $langs, $menu->lang, array('class'=>'form-control', 'id' => 'lang', 'value'=>old('lang'))) !!}
                        </div>
                        <div class="form-group">
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="is_public" id="is_public" @if ($menu->is_published) checked value="1" @else value="0" @endif required data-parsley-errors-container="#error-checkbox">
                                <span>Актив</span>
                            </label>

                            <p id="error-checkbox"></p>
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@push('javascript')
    <script src="{{ asset('assets/js/jquery.nestable.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            // $('#notification').show().delay(4000).fadeOut(700);
            // publish settings
            $(".publish").bind("click", function (e) {
                var id = $(this).attr('id');
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "{!! url( '/admin/menus/" + id + "/toggle-publish/') !!}",
                    headers: {
                        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                    },
                    success: function (response) {
                        if (response['result'] == 'success') {
                            var imagePath = (response['changed'] == 1) ? "fa fa-check" : "fa fa-trash-alt";
                            var message = (response['changed'] == 1) ? "published" : "unpublished";
                            $("#publish-image-" + id).attr('class', imagePath);
                            $("#msg").html('<div class="msg-save" style="float:right; color:red;">' + message + '</div>');
                        }
                    },
                    error: function () {
                        $("#msg").html('<div class="msg-save" style="float:right; color:red;">Saving!</div>');
                        alert("error");
                    }
                });
            });

            $('.type').change(function () {
                    var selected = $('input[class="type"]:checked').val();
                    if (selected == "custom") {
                        $('.modules').css('display', 'none');
                        $('.url').css('display', 'block');
                    } else {
                        $('.modules').css('display', 'block');
                        $('.url').css('display', 'none');
                    }
                }
            );

            $(".type").trigger("change");


            var updateOutput = function (e) {
                var list = e.length ? e : $(e.target),
                    output = list.data('output');
                if (window.JSON) {
                    var jsonData = window.JSON.stringify(list.nestable('serialize'));
                    console.log(window.JSON.stringify(list.nestable('serialize')));
                    $.ajax({
                        type: "POST",
                        url: "{{ route('admin.menus.save') }}",
                        data: {'json': jsonData},
                        headers: {
                            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                        },
                        success: function (response) {

                            //$("#msg").append('<div class="alert alert-success msg-save">Saved!</div>');
                            $("#msg").html('<div class="msg-save" style="float:right; color:red;">Saving!</div>');
                            // $('.msg-save').delay(1000).fadeOut(500);
                        },
                        error: function () {
                            alert("error");
                        }
                    });

                } else {
                    alert('error');
                }
            };

            $('#nestable').nestable({
                group: 1
            }).on('change', updateOutput);
        });
    </script>
@endpush
@stop

