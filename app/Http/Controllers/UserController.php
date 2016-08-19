<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Users;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    /**
     * 后台用户的添加页面显示
     */
    public function getAdd()
    {
        return view('user.add');
    }

    /**
     * 添加用户
     */
    public function postInsert(UserRequest $request)
    {
        //执行数据的添加操作
        $data = $request->only(['username','password','email']);
        //hash加密密码
        $data['password'] = Hash::make($data['password']);
        //生成一个50位的随机字符串
        $data['token'] = str_random(50);
        //创建时间
        $data['created_at'] = date('Y-m-d H:i:s');
        //最后一次的修改时间
        $data['updated_at'] = date('Y-m-g H:i:s');

        //执行添加操作
        $res = Users::insert($data);
        //执行结果
        if($res){
            return redirect('admin/user/index')->with('info','添加成功');
        }else{
            return back()->with('info','添加失败');
        }
    }

    /**
     * 用户的列表页显示
     */
    public function getIndex()
    {
        //读取数据  并且分页 
        $users = Users::paginate(2);
        //分配到模板执行显示
        return view('user.index',['users'=>$users]);
    }
}
