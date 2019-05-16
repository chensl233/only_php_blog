<?php

//前端入口文件
include('./functions.php');
$action = !empty($_GET['a'])?$_GET['a']:'main';
include('./controller/index/'.$action.'.php');