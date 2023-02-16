@extends('front.layout.app')
@section('content')
    {!! HTML::style('ckeditor/contents.css') !!}

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{!! $page->title !!}</h1>
                </div>
                <div class="col-sm-6">
                    @yield('front.partial.breadcrumbs', Breadcrumbs::render('front.page.show', $page))
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
        <div class="row">
            {!! $page->content !!}
        </div>
    </section>
@stop


