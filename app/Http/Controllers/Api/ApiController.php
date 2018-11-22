<?php
/**
 * Created by PhpStorm.
 * User: pathao
 * Date: 10/8/18
 * Time: 3:50 PM
 */

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;

abstract class ApiController extends Controller
{
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


    public function errorResponse($type = 'error', $code = 422, $data = [])
    {
        $response = [
            'type' => $type,
            'code' => $code
        ];

        if (!!$data)
            $response['errors'] = $data;

        return response()->json($response, $code);
    }
}