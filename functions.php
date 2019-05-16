<?php

const IN = 'admin.php?a=';
//定义路径常量
function view($url){    
    //加载后台网页元素
    include('./view/admin/'.$url.'.html');
}

function template($url){    
    //加载前端网页元素
    include('./view/index/'.$url.'.html');
}

function msg($mess,$url){
    //弹窗提示并进行跳转
    $url = IN.$url;
    echo <<<JS
    <script>
    alert('{$mess}');
    location.href='{$url}';    
    </script>
JS;
exit;
}

function check_login(){
    //通过session值是否存在判断登录状态
    if(!isset($_SESSION['user'])){
        msg('请先进行登录!','login');
    }
}