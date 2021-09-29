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
function calendar(int $year)
{
    $leap=0;
    $w=date('w', strtotime("$year-1-1"));
    //输出月份
    $html="<div class='box'>";
    for ($m=1; $m <12 ; $m++) {
        //获取当前月份的天数
        $max_day=date('t', strtotime("$year-$m"));
        //输出年份
        $html.= '<table><tr class="title"><th colspan=7>' . $year . ' 年 ' . $m . ' 月</td></tr>';
        $html.= '<tr><td>日</td><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td>六</td></tr>';
        //输出每月天数
        for ($day=1; $day <= $max_day; $day++) {
            //每月一日换行
            if ($w && $day==1) {
                $html.= "<td colspan='".$w."'>";
            }
            $html.= '<td>'.$day.'</td>';
            //日期换行
            if ($w==6 && $day!==$max_day) {
                $html.= '</tr><tr>';
            }
            //重置星期
            if ($w<6) {
                $w++;
            } else {
                $w=0;
            }
        }
        $html.= '</table>';
    }
    $html .= '</div>';
    return $html;
}
echo calendar(2020);
?>