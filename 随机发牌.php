<?php
    // 建立数组保存的牌组池
    $num = array('A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K');
    $icon = array('♥' => 'red', '♦' => 'red', '♠' => 'black', '♣' => 'black');
    // 生成扑克牌组
    //$poker = [];
    foreach ($icon as $k => $v) {
        foreach ($num as $vv) {
            $poker[] =  '<font style="color:'.$v.';">'.$vv.$k.'</font>';
        }
    }
//打乱顺序
    shuffle($poker);
    
?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
	        div{
                margin:15px 0
            }
            font{
                border:1px solid #ccc;
                padding:6px 3px;
                margin-right:10px
            }
	    </style>

    </head>
    <body>
      <div>玩家A 牌组</div>
 <?php for ($i = 0; $i < 10; ++$i) {
    echo current($poker);
    next($poker);
} ?>
    <div>玩家B 牌组</div>
    <?php for ($i = 0; $i < 10; ++$i) {
    echo current($poker);
    next($poker);
} ?>
    <div>玩家C 牌组</div>
    <?php for ($i = 0; $i < 10; ++$i) {
    echo current($poker);
    next($poker);
} ?>

    </body>
    </html>