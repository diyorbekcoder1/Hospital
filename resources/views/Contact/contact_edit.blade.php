

@extends('layouts.app')


@section('sidebar')
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{route('homes')}}"> <img alt="image" src="assetsapp/img/logo.png" class="header-logo" /> <span
                        class="logo-name">Hospital</span>
                </a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Main</li>
                <li class="dropdown active">
                    <a href="{{route('home')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                </li>
                <li class="dropdown ">
                    <a href="{{route('contact.index')}}" class="nav-link"><i data-feather="monitor"></i><span>Contact</span></a>
                </li>

            </ul>
        </aside>
    </div>
@endsection

@section('Content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form method="post" action="{{route('contact.update',$contact_edit)}}"
                                  enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="card-header">
                                    <h4>Default Validation</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="form_name">Address</label>
                                        <input id="form_name" type="text" name="address"
                                               class="form-control  @error('address') is-invalid @enderror"
                                               placeholder="Please enter your address *"
                                               data-error="address is required."
                                               value="{{old('address', $contact_edit->address)}}">

                                        @error('address')
                                        <span style="color: red">{{$message}} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="form_name">Phone</label>
                                        <input id="form_name" type="phone" name="phone"
                                               class="form-control  @error('phone') is-invalid @enderror"
                                               placeholder="Please enter your phone *"
                                               data-error="phone is required."
                                               value="{{old('phone', $contact_edit->phone)}}">

                                        @error('phone')
                                        <span style="color: red">{{$message}} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="form_name">Email</label>
                                        <input id="form_name" type="email" name="email"
                                               class="form-control  @error('email') is-invalid @enderror"
                                               placeholder="Please enter your email *"
                                               data-error="email is required."
                                               value="{{old('email', $contact_edit->email)}}">

                                        @error('email')
                                        <span style="color: red">{{$message}} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0">
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
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Select Layout</h6>
                        <div class="selectgroup layout-color w-50">
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                                <span class="selectgroup-button">Light</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                                <span class="selectgroup-button">Dark</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Sidebar Color</h6>
                        <div class="selectgroup selectgroup-pills sidebar-color">
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Color Theme</h6>
                        <div class="theme-setting-options">
                            <ul class="choose-theme list-unstyled mb-0">
                                <li title="white" class="active">
                                    <div class="white"></div>
                                </li>
                                <li title="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li title="black">
                                    <div class="black"></div>
                                </li>
                                <li title="purple">
                                    <div class="purple"></div>
                                </li>
                                <li title="orange">
                                    <div class="orange"></div>
                                </li>
                                <li title="green">
                                    <div class="green"></div>
                                </li>
                                <li title="red">
                                    <div class="red"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                       id="mini_sidebar_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Mini Sidebar</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                       id="sticky_header_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Sticky Header</span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                        <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                            <i class="fas fa-undo"></i> Restore Default
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection











