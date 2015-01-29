<?php
/**
 * User: hangche1
 * Date: 11/25/2014
 * Time: 10:15 AM
 */

    function C($name, $method){
        require_once('/libs/Controller/'.$name.'Controller.class.php');
        //eval('$obj = new '.$name.'Controller();$obj->'.$method.'();');
        $controller = $name.'Controller';
        $obj = new $controller();
        $obj -> $method();
    }

    function daddslashes($str){
        return (!get_magic_quotes_gpc())?addslashes($str):$str;
    }