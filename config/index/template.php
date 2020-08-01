<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 模板设置
// +----------------------------------------------------------------------

return [
    'tpl_replace_string' => array(
        '__LIB__'    => '/theme/index/lib',
        '__IMG__'    => '/theme/index/img',
        '__CSS__'    => '/theme/index/css',
        '__JS__'     => '/theme/index/js',
        '__TPL__' => '/template/',
    ),
    //全局过滤方法
    'default_filter'=>'',
    'taglib_pre_load'     =>    'app\common\taglib\Zz'
];
