<?php
function MonkryKing($n, $mum)
{
    $monkey=range(1, $n);
    $i=0;
    while (count($monkey)>1) {
        $i++;
        $head = array_shift($monkey);
        if ($i%$mum != 0) {
            array_push($monkey, $head);
            # code...
        }
    }
    $data['total']=$n;
    $data['kick']=$mum;
    $data['king']=$monkey[0];
    return $data;
}
$data= MonkryKing(10, 7);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr><th colspan="2">找猴王游戏</th></tr>
        <tr><td>猴子总数：</td> <td><?php  echo $data['total'] ?></td></tr>
        <tr><td>踢出猴子数量：</td> <td><?php  echo $data['kick'] ?></td></tr>
        <tr><td>猴王编号：</td> <td><?php  echo $data['king'] ?></td></tr>
    </table>
</body>
</html>
