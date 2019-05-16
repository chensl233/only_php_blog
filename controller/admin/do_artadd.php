<?php
//执行文章添加的控制器
$title = $_POST['title'];
$content = $_POST['content'];
$fd = fopen('data/art_content/'.$title,'w');
fwrite($fd,$content);
fclose($fd);
msg('添加成功!','artlist');