<?php
$link = mysqli_connect('127.0.0.1', 'root', 'root', 'dbtest');
echo $link ? '连接数据库成功' : '连接数据库失败';
mysqli_set_charset($link, 'utf8');
