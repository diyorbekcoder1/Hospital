@extends('backend.layouts.limitless')
@section('content')
    @push('style')
{{--        <link rel="stylesheet" href="{{ asset('assets/css/datatables.css') }}">--}}
    @endpush

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <div class="card-header"><h3>{{ __('Users')}}</h3></div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="user_table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>{{ __('Name')}}</th>
                                <th>{{ __('Email')}}</th>
                                <th>{{ __('Role')}}</th>
                                <th>{{ __('Permissions')}}</th>
                                <th>{{ __('Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('javascript')
        <script src="{{ asset('/plugins/datatable/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/datatables/datatable.custom.js') }}"></script>
{{--        <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>--}}
        <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
        <!--server side users table script-->
        <script src="{{ asset('js/custom.js') }}"></script>
    @endpush
@endsection
