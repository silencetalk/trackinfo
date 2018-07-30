<?php
//控制结构

// 1. elseif

$feel_good = false ;
$product_expired = true ;

if ($feel_good)
    $price = 200;
else
    if( $product_expired )
        $price = 201;
    else
        $price = 300;

my_echo( $price );

$product_expired = false ;

if ($feel_good)
    $price = 200;
elseif( $product_expired )
    $price = 201;
else
    $price = 300;

my_echo( $price );

// 2.foreach

foreach( $demos as $key => $value )
{
    //key = 3 以后，不打印内容
    //if( $key == 3 ) break;

    //key = 3时,不打印内容
    //if( $key == 3) continue;
    echo "KEY = $key , VALUE = $value \r\n";  
}

// 3.include & require

//include只会造成警告
include 'nofile';

//require会造成fatal error（终止）

//require 'nofile';

//重复加载可能导致问题
//require( '_function.php' );
//require_once( '_function.php' );


//return可以返回值
$number = require 'demo.pert.9.php';
my_echo ( $number );

//return 以后的函数定义、类定义依然有效
// 参考_function.php
$jump = 0;

back: 
    echo "time";
    if( ++$jump < 5 ) goto back;