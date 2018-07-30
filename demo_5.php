<?php

//服务器信息，可以在Nginx配置中指定

my_echo($_SERVER);


//可以在apache配置中指定
my_echo($_ENV);

my_echo( $_GET);

my_echo( $_POST);

my_echo( $_REQUEST);

//同名覆盖 http://php.net/manual/zh/ini.core.php#ini.variables-order
my_echo($_FILES);

setcookie('cookie_username','@Easy');
my_echo($_COOKIE);

$_SESSION['session_username'] = '@Easy';
my_echo($_SESSION);