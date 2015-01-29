<?php
/**
 * User: hangche1
 * Date: 11/25/2014
 * Time: 1:37 PM
 */

class DB {

    private static $db;
    private static $config;

    public static function init($dbtype, $config) {
        self::$db = new $dbtype;
        self::$config = $config;
//        self::$db->connect($config);
    }

    public static function query($sql){
        self::$db->connect(self::$config);
        return self::$db->query($sql);
    }

    public static function dbClose() {
        self::$db->close();
    }

}