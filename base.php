<?php
/**
 * Simple Balance Theme based on Maupassant (cho)
 * 
 * @package SimpleBalance
 * @author Forpikus Team
 * @version 0.9.5
 * @link https://github.com/forpikus/typecho-theme-simplebalance
 */
class _simpblc
{
    static private $_simpblc_uacl = array(
                    -1=>"",
                    0=>"administrator",
                    1=>"editor",
                    2=>"contributor",
                    3=>"subscriber",
                    4=>"visitor"
                );


    static public function getulevel($groupname)
    {
        foreach (self::$_simpblc_uacl as $key => $value) {
            if ($value == $groupname) return $key;
        }
        return -1;
    }

    static public function getuacl($level)
    {
        if (empty($level)) $level = 4;
        else $level = (int)$level;
        if ($level > 4 || $level < 0) $level = -1;
        return self::$_simpblc_uacl[$level];
    }

    static public function isuacl($user, $level)
    {
        $group = self::getuacl($level);
        if (empty($group))  // 'private' is valid
            return true;
        else return $user->pass($group, true);
    }
}


?>