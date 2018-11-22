<?php
/**
 * Created by PhpStorm.
 * User: pathao
 * Date: 8/16/18
 * Time: 5:02 PM
 */

namespace App\Services\User;

use App\Repositories\UserRepository;

class UserService
{
protected $userRepository;

    /**
     * RulesService constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;

    }

    public function getAllUsers($request) {

        try {

            $data = $this->userRepository->getAllUserWithPagination();
            return $data;
        } catch (\Exception $e) {

        }
    }
    public function getUsers($request) {

        try {

            $data = $this->userRepository->getAllUsers();
            return $data;
        } catch (\Exception $e) {

        }
    }


    public function addNewUser($data) {

        try{
            $result = $this->userRepository->saveUser($data);

            return $result;
        } catch (\Exception $e) {
            dd($e);
        }
    }


}