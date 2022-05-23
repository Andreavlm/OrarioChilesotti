<?php
class Foo {
        public static function jsonToDebug($jsonText = '')
    {
        $arr = json_decode($jsonText, true);
        $html = "";
        if ($arr && is_array($arr)) {
            $html .= self::_arrayToHtmlTableRecursive($arr);
        }
        return $html;
    }

    private static function _arrayToHtmlTableRecursive($arr) {
        $str = "<table><tbody>";
        foreach ($arr as $key => $val) {
            $str .= "<tr>";
            $str .= "<td>$key : </td>";
            $str .= "<td>";
            if (is_array($val)) {
                if (!empty($val)) {
                    $str .= self::_arrayToHtmlTableRecursive($val);
                }
            } else {
                $str .= "<strong>$val</strong>";
            }
            $str .= "</td></tr>";
        }
        $str .= "</tbody></table>";

        return $str;
    }
    
}



?>