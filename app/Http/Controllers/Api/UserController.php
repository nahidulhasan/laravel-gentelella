<?php
/**
 * Created by PhpStorm.
 * User: pathao
 * Date: 10/8/18
 * Time: 3:53 PM
 */

namespace App\Http\Controllers\Api;


use App\Http\Requests\UserCreateRequest;
use App\Services\User\UserService;

class UserController extends ApiController
{
    private $service;

    /**
     * UserController constructor.
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function index(UserCreateRequest $request)
    {
        //dd('dd');
            $users = $this->service->getUsers($request);

            return $this->respond('users','success', 200, $users);
    }
}