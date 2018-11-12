@extends('admin.layouts.admin')

@section('title', 'Hermes | Welcome Home')

@section('content')

    {{--<div class="row">--}}
    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}


    {{--<div class="col-md-8">--}}
    {{--<div class="card">--}}
    {{--<div class="card-header">Dashboard</div>--}}

    {{--<div class="card-body">--}}
    {{--@if (session('status'))--}}
    {{--<div class="alert alert-success" role="alert">--}}
    {{--{{ session('status') }}--}}
    {{--</div>--}}
    {{--@endif--}}

    {{--You are logged in!--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


    {{--@include('admin.sections.top')--}}
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div id="log_activity" class="dashboard_graph">
                Welcome To Dashboard

            </div>
            <br/>
        </div>
    </div>


    <div class="row">

    </div>
@endsection


