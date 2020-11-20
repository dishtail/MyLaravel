<?php


namespace App\admin\Controllers;

use Illuminate\Routing\Controller;
//登录操作控制器
class LoginController extends Controller
{
    public function login()
    {
        $datas['name'] = 'admin';
        $datas['token'] = 'admin-token';
        $data['code'] = 200;
        $data['msg'] = '登录成功';
        $data['data'] = $datas;
        return response()->json($data,200);
    }

    public function logout()
    {
        $data['code'] = 200;
        $data['msg'] = '退出成功';
        return response()->json($data,200);
    }
}
