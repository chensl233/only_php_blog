<?php
//执行文件编辑操作的控制器
$old_title = $_POST['old_title'];
$title = $_POST['title'];
$content = $_POST['content'];
file_put_contents('data/art_content/'.$old_title,$content);
rename('data/art_content/'.$old_title,'data/art_content/'.$title);
msg('修改成功!','artlist');