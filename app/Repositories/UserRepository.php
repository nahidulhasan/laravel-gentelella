<?php
/**
 * Created by PhpStorm.
 * User: pathao
 * Date: 8/19/18
 * Time: 3:38 PM
 */

namespace App\Repositories;


use App\Models\Permission;
use App\Models\User;
use Carbon\Carbon;

class UserRepository extends BaseRepository
{
    /**
     * QueryRepository constructor.
     *
     */
    public function __construct(User $queries)
    {
        $this->model = $queries;
    }

    public function getAllUserWithPagination() {
        return $this->model->paginate(env('PAGINATION_LIMIT',20));
    }

    public function getAllUsers() {
        return $this->model->get();
    }

    public function findById($id) {

        return $this->model->find($id);
    }


    public function saveUser($data) {

        $data['created_at'] = Carbon::now();
        unset($data['_token']);
        unset($data['password_confirmation']);
        $data['password'] = \Hash::make($data['password']);

        return $this->model->insertGetId($data);
    }

}