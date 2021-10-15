<?php
function generate($elements)
{
    $items='';
    $default=[
    'tag'=>'',
    'text'=>'',
    'attr'=>'',
    'option'=>'',
    'default'=>''
];
    foreach ($elements as $v) {
        //填补剩余内容
        $v=array_merge($default, $v);
        // 提取tag
        $generate='generate_'. array_shift($v);
        $v['attr']=generate_attr($v['attr']);
        $items.='<tr>'. call_user_func_array($generate, $v).'</tr>';
    }
    return '<table>'. $items.'</table>';
}
function generate_input($text, $attr, $option, $default)
{
    if (empty($option)) {
        $items ="<input $attr value=\"$default\">";
    } else {
        $items ='';
        foreach ($option as $k => $v) {
            $checked =in_array($k, (array)$default, true)?'checked':'';
            $items .="<label><input $checked $attr value=\"$k\">$v</label>";
        }
    }
    return "<th>$text</th><td>$items</td>";
}
function generate_attr($attr, $items='')
{
    foreach ($attr as $k=>$v) {
        $items .= " $k=\"$v\" ";
    }
    return $items;
}
function generate_select($text, $attr, $option, $default)
{
    $items='';
    foreach ($option as $k=>$v) {
        $selected =($default===$k)?'selected':'';
        $items .="<option $selected velue=\"$k\">$v</option>";
    }
    $select="<select $attr>$items</select>";
    return "<th>$text</th><td>$select</td>";
}
function generate_textarea($text, $arr, $option, $default)
{
    $textarea ="<textarea $attr>$default</textarea>";
    return "<th>$text</th><td>$textarea</td>";
}
