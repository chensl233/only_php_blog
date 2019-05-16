<?php
// if (!session_id()) session_start();
//验证登录页面

$user = $_POST['username'];
$passwd = $_POST['password'];
$data = $user.' '.$passwd;
$tmp = file_get_contents('data/account/user');
if($data==$tmp){
    $_SESSION['user']=$user;
    msg('登录成功!','');
    exit;
}else{
    msg("账号或密码有误!",'login');
}
