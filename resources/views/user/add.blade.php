@extends('admin.layouts.admin')

@section('content')

    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add New User</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <br />
                <form class="form-horizontal form-label-left" action="{{ route('admin.users.save') }}" method="post">



                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Full Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" name="name" id="name" value="{!! old('name') !!}"
                                   class="form-control" required="required"
                                   placeholder="Full Name">
                        </div>
                        @if($errors->has('name'))
                            <span class="text-danger">{!! $errors->first('name') !!}</span>
                        @endif
                    </div>

                    <div class="form-group">

                        <label for="number" class="control-label col-md-3 col-sm-3 col-xs-12">Contact Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input  maxlength="11" type="text" name="number" id="number"
                                    value="{!! old('number') !!}"  class="form-control"
                                    required="required" placeholder="Number">
                        </div>
                        @if($errors->has('number'))
                            <span class="text-danger">{!! $errors->first('number') !!}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input  type="text" name="email" id="email"
                                    value="{!! old('email') !!}"  class="form-control"
                                    required="required" placeholder="Email">
                        </div>
                        @if($errors->has('email'))
                            <span class="text-danger">{!! $errors->first('email') !!}</span>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input  type="password" name="password" id="password"
                                    value="{!! old('password') !!}"  class="form-control"
                                    required="required" placeholder="password">
                        </div>
                        @if($errors->has('password'))
                            <span class="text-danger">{!! $errors->first('password') !!}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="confirm-password" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input  type="password" name="password_confirmation" id="confirm-password"
                                    class="form-control"
                                    required="required" placeholder="Confirm Password">
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Role</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" required="required" name="type" id="role">
                                <option value="">Select Role</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{ucfirst($role->role_name)}}</option>
                                @endforeach
                            </select>

                            @if($errors->has('role'))
                                <span class="text-danger">{!! $errors->first('role') !!}</span>
                            @endif
                        </div>
                    </div>

                    <div id="abilities-block" class="hidden">

                        <div class="col-sm-12 col-xs-12">
                            <h3>Permissions</h3>
                        </div>
                        @foreach($abilities as $module => $permissions)
                            <div class="col-sm-6 col-xs-12">
                                @component('user.abilities', ['permissions' => $permissions, 'disabled' => true])
                                    @slot("_module")
                                        {{$module}}
                                    @endslot
                                @endcomponent
                            </div>
                        @endforeach

                        @csrf
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="zone_id" value="1">
                                <input type="hidden" name="area_id" value="1">
                                <button type="submit" class="btn btn-success">Create User</button>
                            </div>
                        </div>
                    </div>



                    {{--<div class="ln_solid"></div>--}}


                </form>
            </div>
        </div>
    </div>


@endsection


@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
    {{ Html::script(mix('assets/app/js/forms.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection

@push('scripts')
    <script>
        $(document).on('ready', function (e) {
            var managerLoaded = false;
            var supervisorLoaded = false;
            $("body").on('change', '#role', function (e) {
                $('.permit-check').prop('checked', false);
                var role = $("#role").val();
                var self = $(this);
                self.attr('disabled', 'disabled');
                $.ajax({
                    url: "{{ route('user.roles.abilities')  }}",
                    type: 'get',
                    data: {"id" : role},
                    success: function(response){
                        $.each(response.data, function (module, abilities) {
                            $.each(abilities, function(permission, ability) {
                                console.log(module + ' ' + permission);
                                if (ability) {
                                    $('#' + module + '-' + permission).prop('checked', true);
                                }
                            })
                        });
                        $('#abilities-block').removeClass('hidden');
                        self.removeAttr('disabled');
                    },
                    error: function(response, status) {
                        console.log('Error');
                        self.removeAttr('disabled');
                    }
                });


            });


        });
    </script>
@endpush
