<?php
/**
 * User: hangche1
 * Date: 11/25/2014
 * Time: 1:41 PM
 */

class mysql {

    private static $con;

    /**
     * 报错函数
     *
     * @param string $error
     */
    function err($error){
        die("对不起，您的操作有误，错误原因为：".$error);//die相当于  echo 和 exit 的组合
    }
    /**
     * 连接数据库
     *
     * @param string $dbhost 主机名
     * @param string $dbuser 用户名
     * @param string $dbpsw  密码
     * @param string $dbname 数据库名
     * @param string $dbcharset 字符集/编码
     * @return bool  连接成功或不成功
     **/
    function connect($config){
//        extract($config);
        if(!(self::$con = mysql_connect($config['dbhost'], $config['dbuser'], $config['dbpsw']))){
            $this->err(mysql_error());
        }
//        var_dump(self::$con);
        if(!mysql_select_db($config['dbname'])){
            $this->err(mysql_error());
        }
//        mysql_query("set names ".$dbcharset);
    }
    /**
     * 执行sql语句
     *
     * @param string $sql
     * @return bool 返回执行成功、资源或执行失败
     */
    function query($sql){
        if(!($query = mysql_query($sql))){
            $this->err($sql."<br />".mysql_error());
        }else{
            return $query;
        }
    }

    /**
     * 关闭数据库
     */
    function close(){
        mysql_close(self::$con);
    }

}