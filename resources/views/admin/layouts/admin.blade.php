@extends('layouts.app')

@section('body_class','nav-md')

@section('head')
    <title>@yield('title')</title>
@stop

@section('page')
    <div class="container body">
        <div class="main_container">
            @section('header')
                @include('admin.sections.navigation')
                @include('admin.sections.header')
            @show

            @yield('left-sidebar')

            <div class="right_col" style="min-height: 585px;" role="main">
                @if(session('flash_notification'))
                    <div style="margin-top: 65px;">
                        @include('flash::message')
                    </div>
                @endif

                @yield('content')

            </div>

            <footer>
                @include('admin.sections.footer')
            </footer>
        </div>
    </div>

    <div class="modal fade modal-customize" id="global-modal" tabindex="-1" role="dialog" aria-labelledby="notifactionModalLabel">
    </div>
@stop
@section('head')
    <title>Hermes</title>
@stop

@section('styles')
    {{ Html::style(mix('assets/admin/css/admin.css')) }}
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection

@section('scripts')
    {{ Html::script(mix('assets/admin/js/admin.js')) }}
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
    {{ Html::script(mix('assets/admin/js/form.js')) }}
@endsection
