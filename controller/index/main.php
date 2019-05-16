<?php

//加载前端首页的控制器
$file=scandir('data/art_content');
unset($file[0],$file[1]);
foreach($file as &$v){
    $fd = fopen('data/art_content/'.$v,'r');
    $v=[
        'title'=>$v,
        'content'=>fread($fd,200),
    ];
    fclose($fd);
}
template('index');