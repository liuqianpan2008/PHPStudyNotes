<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            width:15px;
            height:15px
        }
        </style>
</head>
<body>
    <table>
        <?php
                $n = 1;
                $row = 36;
                for ($i = 0; $i <= 5; ++$i) {
                    echo '<tr>';
                    for ($j = 0; $j <= 5; ++$j) {
                        for ($k = 0; $k <= 5; ++$k) {
                            $red = str_pad(dechex($i * 51), 2, '0', STR_PAD_LEFT);
                            $green = str_pad(dechex($j * 51), 2, '0', STR_PAD_LEFT);
                            $blue = str_pad(dechex($k * 51), 2, '0', STR_PAD_LEFT);
                            echo '<td style="background:#'.$red.$green.$blue.';"></td>';
                        }
                    }
                    echo '</tr>';
                }
            ?>
    </table>
</body>
</html>