<?php
$name=array(1=>'小明','小红');
$name[8]='阿鸡';
var_dump($name);
foreach ($name as $kay=> $value) {
    echo $kay.$value;
}
