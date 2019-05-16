<?php
//载入文章编辑区域的控制器
$title = $_GET['title'];
$content=file_get_contents('data/art_content/'.$title);
view('post-edit');
