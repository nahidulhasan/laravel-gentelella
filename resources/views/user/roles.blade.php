@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Fraud Rules Log
                    {{--<small>Bordered table subtitle</small>--}}
                </h2>

                <div class="clearfix"></div>
            </div>

            <div class="x_content table-responsive">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="col-xs-4">
                    <div class="user-form">
                        @allows(get_auth_user(), ['role.view', 'role.update'])
                        <div class="role-form form-inner-extra pt60 clearfix bdn">
                            <h3>Roles</h3>
                            <table class="table table-condensed table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$role->id}}</td>
                                        <td>{{$role->role_name}}</td>
                                        <td>
                                            @allows(get_auth_user(), 'role.update')
                                            <a href="#" class="btn btn-primary btn-xs edit-role" data-id="{{$role->id}}">Edit</a>
                                            @endAllows
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endAllows
                    </div>
                </div>

                @allows(get_auth_user(), ['role.create', 'role.update'])
                <div class="col-xs-8">
                    <div class="user-form">
                        <div class="role-form form-inner-extra pt60 clearfix bdn">
                            <form action="{{route('user.roles.update')}}" method="POST" id="ajx-form" data-redirect="{{route('user.roles.list')}}">
                                <input id="_method" type="hidden" name="_method" value="POST">
                                <div class="col-sm-12 col-xs-12 mb30">
                                    <h3>User Role</h3>

                                    <div class="form-group">
                                        <label for="role-name">Role Name</label>
                                        <input type="text" class="form-control" name="role_name" id="role-name" placeholder="Role name"
                                               value="{!! old('email') !!}" required>
                                        @if($errors->has('role_name'))
                                            <span class="text-danger">{!! $errors->first('role_name') !!}</span>
                                        @endif
                                    </div>
                                </div>


                                <div id="abilities-block">
                                    <div class="col-sm-12 col-xs-12">
                                        <h3>Permissions</h3>
                                    </div>
                                    @foreach($abilities as $module => $permissions)
                                        <div class="col-sm-12 col-xs-12">
                                            @component('user.abilities', ['permissions' => $permissions, 'disabled' => false])
                                                @slot("_module")
                                                    {{$module}}
                                                @endslot
                                            @endcomponent
                                        </div>
                                    @endforeach

                                    <div class="col-sm-12 col-xs-12">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="_id" id="_id" value="">
                                        <input type="submit" value="Save Role" class="btn btn-primary btn-save-close">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                @endAllows

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

@push('scripts')
    @allows(get_auth_user(), 'role.update')
    <script>
        $(document).on('ready', function (e) {
            $("body").on('click', '.edit-role', function (e) {
                e.preventDefault();
                $('.permit-check').prop('checked', false);
                var self = $(this);
                var id = self.data('id');

                $("#_method").attr('value', 'PUT');
                $("#_id").attr('value', id);

                self.attr('disabled', 'disabled');
                $.ajax({
                    url: "{{ route('user.roles.abilities')  }}",
                    type: 'get',
                    data: {"id" : id},
                    success: function(response){
                        console.log(response);
                        $("#role-name").val(response.role.role_name);
                        $.each(response.data, function (module, abilities) {
                            $.each(abilities, function(permission, ability) {
                                if (ability) {
                                    $('#' + module + '-' + permission).prop('checked', true);
                                }
                            })
                        });
                        $('#abilities-block').removeClass('hidden');
                        self.removeAttr('disabled');
                        // $('#_id').attr('value', )
                    },
                    error: function(response, status) {
                        console.log('Error');
                        self.removeAttr('disabled');
                    }
                });
            });
        });
    </script>
    @endAllows

    <script>
        $(document).on('ready', function (e) {
            $("#role-name").on({
                keydown: function(e) {
                    if (e.which === 32)
                        return false;

                    this.value = this.value.toLowerCase();
                },
                change: function() {
                    this.value = this.value.replace(/\s/g, "");
                    this.value = this.value.toLowerCase();
                }
            });
        });

    </script>
@endpush