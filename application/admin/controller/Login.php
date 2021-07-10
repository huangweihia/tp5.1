<?php
/*
 * CreatUser:Make Money
 * Date:21:31
 *
 */

namespace app\admin\controller;
use think\Controller;
use think\facade\Request;
use think\Validate;


class Login extends Controller
{
    public function index(){

        if (Request::isPost()){
            $relust=$this->validate($this->request->param(),'app\admin\validate\index\User');
            dump($relust);die;


        }

        $this->assign(
            [
                'title'=>'登录'
            ]
        );

        return $this->fetch('login');
    }
    public function register(){
        $this->assign(
            [
                'title'=>'注册'
            ]
        );

        return $this->fetch('register');
    }

}