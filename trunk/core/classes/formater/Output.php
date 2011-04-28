<?php
namespace Ky\Core\Formater;

class Output
{
    public static function textarea($string)
    {
        return nl2br(str_replace(' ', '&nbsp;',htmlspecialchars($string)));
    }
    public static function javascript($string)
    {
        return addslashes(str_replace(array("\r","\n"),array("",""),$string));
    }
    public static function jHeader($msg,$url)
    {
        echo '<script language="javascript">';
        echo 'alert("'.$msg.'");';
        echo 'window.location.href="'.$url.'"';
        echo '</script>';

        exit;
    }
    
    public static function cut($string,$length=80,$etc='...',$charset="utf-8")
    {
        $start = 0;
        if (function_exists ("mb_substr" ))
            return mb_substr ( $string, $start, $length, $charset );
        $re ['utf-8'] = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
        $re ['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
        $re ['gbk'] = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
        $re ['big5'] = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
        preg_match_all ( $re [$charset], $string, $match );
        $slice = join ( "", array_slice ( $match [0], $start, $length ) );

        return $slice.$etc;
    }

    public static function cutword($string, $length, $dot = '...', $charset = 'utf-8')
    {
        $strlen = strlen($string);
        if($strlen <= $length) return $string;
        $specialchars = array('&amp;', '&quot;', '&#039;', '&lt;', '&gt;');
        $entities = array('&', '"', "'", '<', '>');
        $string = str_replace($specialchars, $entities, $string);
        $strcut = '';
        if(strtolower($charset) == 'utf-8')
        {
            $n = $tn = $noc = 0;
            while($n < $strlen)
            {
                $t = ord($string[$n]);
                if($t == 9 || $t == 10 || (32 <= $t && $t <= 126)) {
                    $tn = 1; $n++; $noc++;
                } elseif(194 <= $t && $t <= 223) {
                    $tn = 2; $n += 2; $noc += 2;
                } elseif(224 <= $t && $t < 239) {
                    $tn = 3; $n += 3; $noc += 2;
                } elseif(240 <= $t && $t <= 247) {
                    $tn = 4; $n += 4; $noc += 2;
                } elseif(248 <= $t && $t <= 251) {
                    $tn = 5; $n += 5; $noc += 2;
                } elseif($t == 252 || $t == 253) {
                    $tn = 6; $n += 6; $noc += 2;
                } else {
                    $n++;
                }
                if($noc >= $length) break;
            }
            if($noc > $length) $n -= $tn;
            $strcut = substr($string, 0, $n);
        }
        else
        {
            $dotlen = strlen($dot);
            $maxi = $length - $dotlen - 1;
            for($i = 0; $i < $maxi; $i++)
            {
                $strcut .= ord($string[$i]) > 127 ? $string[$i].$string[++$i] : $string[$i];
            }
        }
        return $strcut.$dot;
    }

    public static function  iframeCallback($statusCode=200,$msg='添加成功！',$url="")
    {
        ?>
        <script type="text/javascript">
        var response = {
            statusCode:<?php echo $statusCode; ?>,
            message:"<?php echo $msg; ?>",
            navTabId:"",
            forwardUrl:"<?php echo $url; ?>",
            callbackType:"forward"
        };
        if(window.parent.donecallback) window.parent.donecallback(response);
        </script>
        <?php
    }
}
