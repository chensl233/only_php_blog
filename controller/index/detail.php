<?php

$title = $_GET['title'];
$content = file_get_contents('data/art_content/'.$title);

template('detail');