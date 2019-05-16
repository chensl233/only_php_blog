<?php
$content = scandir('data/art_content');
unset($content[0],$content[1]);
// print_r($content);
view('posts');