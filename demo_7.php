<?php

//常量

define("APP_ROOT",dirname(__FILE__));
my_dump(APP_ROOT);
my_dump(constant("APP_ROOT"));

if(defined("APP_ROOT")) my_echo("APP_ROOT 已经被定义啦");


//魔法常量
echo "当前行". __LINE__."\r\n";
echo "当前文件".__FILE__."\r\n";


//PHP 5.3之后，支持const语法，const是在编译时定义，不能在函数内、循环内、if语句内使用它定义常量
// const不支持函数运算
// const APP_ROOT2 = dirname(__FILE__);

const DATA_ROOT = APP_ROOT.DIRECTORY_SEPARATOR."data";


my_echo(get_defined_constants());