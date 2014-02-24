<?php
/**
 * 项目自定义方法
 * author ldm
 */
// 

//截取内容指定长度 UTF8
Function showShort($str,$len,$ext='...')
{
    $tempstr = CHsubstr($str,0,$len);
    if ($str<>$tempstr)
    $tempstr .= $ext; //要以什么结尾,修改这里就可以.

    return $tempstr;
}

function CHsubstr($string, $start, $length)
{
    if(strlen($string)>$length)
    {
        $str='';
        $len=$start+$length;
        $i = $start;
        while($i<$len)
        {
            if(ord(substr($string, $i, 1))>=128)
            {
                $str.=substr($string, $i, 3);
                $i = $i+ 3;
            }
            else
            {
                $str.=substr($string, $i, 1);
                $i ++;
            }
        }
        return $str;
    }
    else
    {
        return $string;
    }
}
?>