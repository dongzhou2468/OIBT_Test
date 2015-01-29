<?php
/**
 * User: hangche1
 * Date: 11/25/2014
 * Time: 2:15 PM
 */

class adminController {

    public static $var = 'hello world';

    public function __construct(){
        session_start();
        if(!(isset($_SESSION['auth']))){
            VIEW::$view->assign('user', '登录');
        }else{
            VIEW::$view->assign('user', $_SESSION['auth']['name']);
        }
    }

    public function home(){
        ob_start();
        $var = array();

        $query = 'select * from apps';
        $result = DB::query($query);
        DB::dbClose();

        $num = mysql_num_rows($result);
        for($a = 0; $a < $num; $a++){
            $var[] = mysql_fetch_assoc($result);
        }
        var_dump($var);

        ob_end_clean();                                                                //清除输出缓冲区
//        echo '<script language="JavaScript">document.body.innerHTML="";</script>';   //js清除页面内容
        VIEW::assign(array('data'=>$var));
        VIEW::assign(array('count'=>array(1, 2)));
        VIEW::display('admin/home.html');
    }

    public function loginCheck(){
        ob_start();
        $useremail = daddslashes($_POST['useremail']);
        $password = daddslashes($_POST['password']);
        if($auth = $this->checkAuth($useremail, $password)){
            $_SESSION['auth'] = $auth;
            ob_clean();
            echo "";
        }else{
            ob_end_clean();
            echo "用户名或密码错误";
        }
    }

    public function loginSuccess(){
//        $this->showmessage('登录成功', 'admin.php?controller=admin&method=home');
        echo "<script>window.location.href='tpl/admin/loginwait.html'</script>";
    }

    private function checkAuth($useremail, $password){
        $sql = 'select * from user where email="'.$useremail.'"';
        $result =  DB::query($sql);
        DB::dbClose();
        $rs = mysql_fetch_array($result, MYSQL_ASSOC);
        if((!empty($rs))&&$rs['password']==$password){
            return $rs;
        }else{
            return false;
        }
    }

}