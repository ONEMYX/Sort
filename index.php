<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/19
 * Time: 16:30
 */

//echo phpinfo();die();
//入口文件
//echo phpinfo();
defined('CONF_EXT') or define('CONF_EXT', '.php');
define('NOW_URL', $_SERVER['REQUEST_URI']);
define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']) or define('REQUEST_METHOD','NOT');
define('HTTP_REFERER', isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');
define('IS_GET', REQUEST_METHOD == 'GET' ? true : false);
define('IS_POST', REQUEST_METHOD == 'POST' ? true : false);
define('HTTP_URL',$_SERVER['DOCUMENT_URI']);
$ruleList = explode('/', rtrim(HTTP_URL, '$'));
$name = end($ruleList);
if ($name =='phpinfo'){
    phpinfo();
    exit();
}
$file = 'sort/'.$name.'.php';
if (is_file($file)){
    include_once $file;
}elseif(!$name){
    echo '没有此文件';
}else{
    var_dump($ruleList,$name);
}
