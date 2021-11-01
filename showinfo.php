<?php
// 接收表单数据
$name = isset($_POST['name']) ? $_POST['name'] : '';
?>
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>表单数据安全验证结果</title>
    <style>
      body{background-color:#eee;margin:0;padding:0}
      .reg{width:400px;margin:15px;padding:20px;border:1px solid #ccc;background-color:#fff}
      .reg .title{text-align:center;padding-bottom:10px}
      .reg th{font-weight:normal;text-align:right}
    </style>
  </head>
  <body>
    <table class="reg">
      <tr>
        <th colspan="2" class="title">
          你好！<?php echo $name; ?> 欢迎加入PHP学习。
        </th>
      </tr>
    </table>
  </body>
</html>
