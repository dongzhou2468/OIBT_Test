<?php
/**
 * User: hangche1
 * Date: 11/25/2014
 * Time: 1:39 PM
 */

class VIEW {

    public static $view;

    public static function init($viewtype,$config){
        self::$view = new $viewtype;
        /*$smarty = new Smarty();
        $smarty->left_delimiter=$config["left_delimiter"];
        $smarty->right_delimiter=$config["right_delimiter"];
        $smarty->template_dir=$config["template_dir"];
        $smarty->compile_dir=$config["compile_dir"];
        $smarty->cache_dir=$config["cache_dir"];*/
        foreach($config as $key=>$value){
            self::$view -> $key = $value;
        }

    }

    public static function assign($data){
        foreach($data as $key=>$value){
            self::$view->assign($key, $value);
        }
    }

    public static function display($template){
        self::$view->display($template);
    }
}