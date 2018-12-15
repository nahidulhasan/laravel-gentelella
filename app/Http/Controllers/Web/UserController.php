<?php
namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Http\Requests\UserCreateRequest;
use App\Models\Permission;
use App\Models\User;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use Nahid\Permit\Facades\Permit;


class UserController extends Controller
{
    protected  $userService;
    /**
     * UserController constructor.
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request) {

        $users = $this->userService->getAllUsers($request);
        return view('user.list', compact('users'));

    }

    public function create(Request $request) {

        return view('user.add');
    }


    public function save(UserCreateRequest $request) {

        $user = $this->userService->addNewUser($request->toArray());//$request->only()

        if(!$user) {
            return $this->respond("Unable to create user", 'error', 422);
        }

        return redirect(route('admin.users'))->with(['success' => "User created successfully!"]);

    }

    public function getRoles(Request $request) {


        return view('user.roles', compact('roles', 'abilities'));
    }

    public function updateRole(RoleRequest $request) {

        $role_name = $request->input('role_name');
        $permissions = array_value_convert($request->input('permissions'), "1", true);

        $permission = Permission::find($request->input('_id'));
        $user = User::where('type', $permission->role_name)->exists();

        if ($permission) {
            if (!$user) {
                $permission->role_name = strtolower(str_slug($role_name));
            }

            $permission->permission = $permissions;

            if ($permission->save()) {
//                $activity_data = [
//                    "log_name" => 'role:update',
//                    "description" => 'User Role Updated',
//                    "log_type" => 8,
//                    "log_type_id" => $permission->id,
//                    "user_id" => Auth::id(),
//                    "causer_type" => "update",
//                    "properties" => json_encode($permissions) ,
//                    "created_at" =>Carbon::now(),
//                ];
//                $this->activityLogRepository->save($activity_data);

               // event(new ActivityLogEvent('role:update', $permission, [$permission]));

                return redirect(route('user.roles.list'))->with(['success' => "Role ".$role_name." successfully updated."]);
            }
        }

        return $this->respond("Unable to update role", 'error', 422);

    }

    public function storeRole(RoleRequest $request) {

        $role_name = $request->input('role_name');
        $permissions = array_value_convert($request->input('permissions'), "1", true);

        $role = Permission::where('role_name', $role_name)->first();

        if (!$role) {
            $permission = new Permission();

            if ($permission) {
                $permission->role_name = strtolower(str_slug($role_name));
                $permission->permission = $permissions;

                if ($permission->save()) {
                   // event(new ActivityLogEvent('role:create', $permission, ['payload' => $request->toArray()]));
//                    $activity_data = [
//                        "log_name" => 'role:create',
//                        "description" => 'User Role Created',
//                        "log_type" => 7,
//                        "log_type_id" => $permission->id,
//                        "user_id" => Auth::id(),
//                        "causer_type" => "update",
//                        "properties" => json_encode($permissions) ,
//                        "created_at" =>Carbon::now(),
//                    ];
//                    $this->activityLogRepository->save($activity_data);
                    //return $this->respond("Role ".$role_name." successfully created.");

                    return redirect(route('user.roles.list'))->with(['success' => "Role ".$role_name." successfully created."]);
                }
            }
        }

        return $this->respond("Role ".$role_name." already exists.", 'error', 422);

    }

    public function getAbilitiesById(Request $request)
    {
        $role = \App\Models\Permission::find($request->input('id'));

        return response()->json([
            'data' => $role->permission_array,
            'role'=> [
                'id' => $role->id,
                'role_name' => $role->role_name
            ]
        ]);
    }

    public function respond($message, $type = 'success', $code = 200, $data = [])
    {
        $response = [
            'message' => $message,
            'type' => $type,
            'code' => $code
        ];

        if (!!$data)
            $response['data'] = $data;

        return response()->json($response, $code);
    }

}