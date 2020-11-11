<?php


namespace App\Admin\Controllers;

use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    public function login()
    {
        $datas['name'] = 'admin';
        $datas['token'] = 'this_is_token';
        $data['code'] = 200;
        $data['msg'] = '登录成功';
        $data['data'] = $datas;
        return response()->json($data,200);
    }
}
