<?php
/**
 * User: hangche1
 * Date: 11/27/2014
 * Time: 3:07 PM
 */

class indexController {

    public static $str = 'hello world user test<br />';

    public function __construct(){
        session_start();
        if(!(isset($_SESSION['auth']))){
            VIEW::$view->assign('user', self::$str);
        }else{
            VIEW::$view->assign('user', $_SESSION['name']);
        }
    }

    public function index(){
        $rs = array();
//        $pwd = md5('123456');
        $query = "select * from apps";
        $result =  DB::query($query);

        DB::dbClose();
        if($result){
            echo "query success";
            var_dump($result);
        }else{
            echo "query fail!";
        }
        $num = mysql_num_rows($result);
        for($a = 0; $a < $num; $a++){
            $rs[] = mysql_fetch_assoc($result);
        }
        var_dump($rs);

        echo '<script language="JavaScript">document.body.innerHTML="";</script>';   //js清除页面内容
        VIEW::assign(array('data'=>$rs));
        VIEW::display('admin/index.html');
    }

}