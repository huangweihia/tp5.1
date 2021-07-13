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
    public function index()
    {
        $url = $this->request->get('url', 'Login/index');
        if (Request::isPost()) {
            $username = $this->request->post('username');
            $password = $this->request->post('password');
            $token = $this->request->post('__token__');
            $captcha = $this->request->post('captcha');
            $rule = [
                'username'  => 'require|max:10',
                'password'  => 'require',
                'captcha'   => 'require|captcha',
                '__token__' => 'require|token',


            ];

            $data = [
                'username' => $username,
                'password' => $password,
                '__token__' => $token,
                'captcha' => $captcha
            ];

//          $this->validate($this->request->param(),'app\admin\validate\index\User');
            $validate = new Validate($rule, [], ['username' => __('Username'), 'password' => __('Password'), 'captcha' => __('Captcha')]);
            $result = $validate->check($data);
            if (!$result) {
                $this->success($validate->getError(), $url, ['token' => $this->request->token()],2);
            }else{

            }

        }

        $this->assign(
            [
                'title' => '登录'
            ]
        );

        return $this->fetch('login');
    }

    public function register()
    {
        $this->assign(
            [
                'title' => '注册'
            ]
        );

        return $this->fetch('register');
    }

}