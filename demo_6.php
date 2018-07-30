<?php

//变量作用域demo

$best_language = 'PHP' ;
unset($best_language);
my_dump(@$best_language);


$GLOBALS['best_language'] = 'PHP';

//incclude & require

require 'demo.part.6.php';

//函数和global

function show_best_language()
{
    echo "最好的语言是" . @$best_language . "\r\n";
}
show_best_language();

function show_best_language2()
{
    global $best_language ;
    echo "最好的语言是" . $best_language . "\r\n";
    $best_language = 'PHP7';
}
show_best_language2();
my_echo($best_language);


//静态变量
//会逐项增加

function up()
{
    static $time = 0;
    echo ++$time. "\r\n";
}

up();
up();
up();

//递归时使用


//变量的变量  变量名也可以是变量

$type = 'best_language';
my_echo($$type);
my_echo(${$type});