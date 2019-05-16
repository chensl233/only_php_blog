<?php
session_start();
//开启session
// set_include_path('.');
include('./functions.php');
//引入函数库

$action = !empty($_GET['a'])?$_GET['a']:'main';
//获取需要访问的页面

$no_check=['login','do_login'];     //定义无需验证的控制器
if(!in_array($action,$no_check)){
    //对指定控制器外进行登录验证
    check_login();
}

include('./controller/admin/'.$action.'.php');
//载入控制器