@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>User List
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>

                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(count($users) > 0)

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            {{--<th>Actions</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $k => $user)
                            <tr>
                                <th>{{ $k+1 }}</th>
                                <th scope="row"> {{ $user->name }}</th>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->number }}</td>
                                <td>{{ $user->type }}</td>
                                {{--<td>--}}
                                    {{--@if($user->status == 1)--}}
                                    {{--<a href="#" class="btn bg-danger">Deactivate</a>--}}
                                    {{--@else--}}
                                        {{--<a href="#" class="btn bg-primary">Activate</a>--}}
                                    {{--@endif--}}
                                {{--</td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $users->links() }}
                @else

                    <div>No Users Available, Add <a href="{{ route('admin.users.create') }}">New</a> </div>

                @endif

            </div>
        </div>
    </div>


@endsection


@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection
