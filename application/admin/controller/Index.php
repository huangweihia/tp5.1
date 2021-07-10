<?php
namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {

        $this->assign(
            [
                'title'=>'首页',
            ]
        );
        return $this->fetch();
    }

    /**
     * @return mixed
     */
    public  function  console(){
        $this->assign(
            [
                'title'=>'首页',
            ]
        );
        return $this->fetch();
    }


}
