<?php
/**
 * Created by PhpStorm.
 * User: pathao
 * Date: 10/8/18
 * Time: 3:26 PM
 */

namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}