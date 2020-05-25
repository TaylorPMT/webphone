<?php
    namespace App\Library;

class library{
    public static function unserialize($str)
    {
        $strArray = explode("&", $str);
        foreach($strArray as $item) {
            $array = explode("=", $item);
            $returndata[] = $array;
        }
        return $returndata;
    }

}    