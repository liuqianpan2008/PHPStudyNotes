<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表格各行换行</title>
    <style>
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5" width="100" style="text-align:center;margin:0 auto">
        <caption>表格换行</caption>
        <?php
            for ($i=0; $i < 10; $i++) {
                if ($i%2==0) {
                    echo "<tr style='background: red;'><td>偶数行</td><td>雅虎</td></tr>";
                } else {
                    echo "<tr><td>奇数行</td><td>阿巴阿巴</td></tr>";
                }
            }
        ?>  
    </table> 
</body>
</html>