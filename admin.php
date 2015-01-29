<?php
/**
 * User: hangche1
 * Date: 11/25/2014
 * Time: 9:56 AM
 */

    header("Content-type: text/html; charset=utf-8");
    require_once('config.php');
    require_once('framework/pc.php');
    PC::run($config);
