<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>函数的调用</title>
    <style>
        body{
            background: #999;
        }
        .box{
            width: 550px;
            background: #fff;
            margin: 5px auto;
            font-size:18px;
            font-weight:bold; 
            padding:0 20px 20px 20px;
        }
        h2{
            text-align:center; 
            color:#222;
        }
    </style>
</head>
<body>

    	<h2>函数的调用</h2>
	<div class="box">
		<?php

            include './functions_inc.php';
            echo getMin(23, 17);
        ?>
	</div>

</body>
</html>