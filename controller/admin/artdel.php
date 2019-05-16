<?php
//这是删除文章的控制器
$title = $_GET['title'];
unlink('data/art_content/'.$title);
msg('删除成功!','artlist');
