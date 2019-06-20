<?php
namespace Config;
/**
 * mysql配置
 * @author walkor
 */
class Db
{
    /**
     * 数据库的一个实例配置，则使用时像下面这样使用
     * $user_array = Db::instance('db1')->select('name,age')->from('users')->where('age>12')->query();
     * 等价于
     * $user_array = Db::instance('db1')->query('SELECT `name`,`age` FROM `users` WHERE `age`>12');
     * @var array
     */
    // public static $db1 = array(
    //     'host'    => '192.168.1.215',
    //     'port'    => 3306,
    //     'user'    => 'layui_com',
    //     'password' => 'layui_com',
    //     'dbname'  => 'layui_com',
    //     'charset'    => 'utf8'
    // );
    public static $db1 = array(
        'host'    => getenv('MYSQL_HOST'),
        'port'    => getenv('MYSQL_PORT'),
        'user'    => getenv('MYSQL_USER'),
        'password' => getenv('MYSQL_PASSWORD'),
        'dbname'  => getenv('MYSQL_DATABASE'),
        'charset'    => 'utf8'
    );
}