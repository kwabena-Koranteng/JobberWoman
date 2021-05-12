<?php
defined('server') ? null : define("server", "us-cdbr-east-03.cleardb.com");
defined('user') ? null : define ("user", "bea28d40262729") ;
defined('pass') ? null : define("pass","ce3bbc12");
defined('database_name') ? null : define("database_name", "heroku_f7d2d42a143fdb0") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>
