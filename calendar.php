<style>
    .box{
        width: 980px;
        margin: 0 auto;
    }
    .title{
        background: #ccc;
    }
    table{
        width: 300px;
        height: 300px;
        float:left;
        font-size:20px;
    }

</style>
<?php
//判断年份
$year=2021;
$leap=0;
if (($year%4==0&&$year%100!=0) || ($year%400==0&&$year%3200!=0)) {
    $leap=1;
}
//根据公式计算
$y=$year-1;
$m=13;
$d=1;
$w = ($d + 1 + 2 * $m + (int)(3 * ($m + 1) / 5) + $y + (int)($y / 4) - (int)($y / 100) + (int)($y / 400)) % 7;
echo '<div class="box">';
//输出月份
for ($m=1; $m <12 ; $m++) {
    //30或者31天判断



    if ($m==1||$m==3||$m==5||$m==7||$m==8||$m==10||$m==12) {
        $max_day=31;
    } elseif ($m==2) {
        $max_day=$leap?29:28;
    } else {
        $max_day=30;
    }
    echo '<table><tr class="title"><th colspan=7>' . $year . ' 年 ' . $m . ' 月</td></tr>';
    echo '<tr><td>日</td><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td>六</td></tr>';
    //输出每月天数
    for ($day=1; $day <= $max_day; $day++) {
        //每月一日换行
        if ($w && $day==1) {
            echo "<td colspan='".$w."'>";
        }
        echo '<td>'.$day.'</td>';
        //日期换行
        if ($w==6 && $day!==$max_day) {
            echo '</tr><tr>';
        }
        //重置星期
        if ($w<6) {
            $w++;
        } else {
            $w=0;
        }
    }
    echo '</table>';
}
echo '</div>'
?>

