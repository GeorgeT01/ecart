@extends('admin.layout')
@section('title', 'Products')

@section('header')

@endsection

@section('content')

    <div class="d-flex" id="wrapper">
        @include('admin.sidebar')
        <div id="page-content-wrapper">
            @include('admin.navbar')
            <div class="container-fluid mt-5 mb-5">
                <products-component user_role="{{ Auth::user()->role }}"></products-component>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/easy_notify.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/notification.js') }}"></script>
@endsection
