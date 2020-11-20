<?php


namespace App\admin\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function info()
    {
        $datas['roles'] = 'admin';
        $datas['introduction'] = 'I am a super administrator';
        $datas['avatar'] = 'https://wpimg.wallstcn.com/f778738c-e4f8-4870-b634-56703b4acafe.gif';
        $datas['name'] = 'Super admin';
        $data['code'] = 200;
        $data['msg'] = '成功';
        $data['data'] = $datas;
        return response()->json($data,200);
    }
}
