<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class AjaxController extends Controller
{
    public function login()
    {
        // Getting all post data
        if (Request::ajax()) {
            $data = Input::all();
            print_r($data);
            die;
        }
    }
}
