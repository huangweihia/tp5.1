<?php

namespace app\admin\validate\index;

use think\Validate;

class User extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
	    'username'      =>'require|max:10|token',
        'password'  =>'require'
    ];

    /**
     * 字段描述
     */
    protected $field = [
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [];


    public function __construct(array $rules = [], $message = [], $field = [])
    {
        $this->field = [
            'username' => __('Username'),
            'password' => __('Password'),

        ];
        parent::__construct($rules, $message, $field);
    }
}
