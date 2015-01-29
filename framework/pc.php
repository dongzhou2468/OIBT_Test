<?php
/**
 * User: hangche1
 * Date: 11/25/2014
 * Time: 10:01 AM
 */

    $currentdir = dirname(__FILE__);
    include_once($currentdir.'/include.list.php');
    foreach($paths as $path){
        include_once($currentdir.'/'.$path);
    }
//    include_once('function/function.php');
//    include_once('libs/core/DB.class.php');
//    include_once('libs/core/VIEW.class.php');
//    include_once('libs/db/mysql.class.php');
//    include_once('libs/view/Smarty/Smarty.class.php');


    class PC {
        public static $controller;
        public static $method;
        public static $config;
        private static function init_db(){
            DB::init('mysql', self::$config['dbconfig']);
        }
        private static function init_view(){
            VIEW::init('Smarty', self::$config['viewconfig']);
        }
        private static function init_controller(){
            self::$controller = isset($_GET['controller'])?daddslashes($_GET['controller']):'index';
        }
        private static function init_method(){
            self::$method = isset($_GET['method'])?daddslashes($_GET['method']):'index';
        }
        public static function run($config){
            self::$config = $config;
            self::init_db();
            self::init_view();
            self::init_controller();
            self::init_method();
            C(self::$controller, self::$method);
        }
    }