<?php
    function person($name, $gender, $age)
    {
        if ($name == '') {
            trigger_error('名字不能为空', E_USER_NOTICE);
        }
        if ($gender != '男' && $gender != '女') {
            trigger_error('性别有误', E_USER_WARNING);
        }
        if ($age < 0 || $age > 120) {
            trigger_error('年龄不正确', E_USER_ERROR);
        }
        echo 'OK';
    }
person('', '男', -1);
