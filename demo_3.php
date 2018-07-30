<?php

//数据类型

// 1.数值类型

$fe_beijing_salary = 30319;
$javascript_fe_hot = 68.28;
$javascript_cost = $fe_beijing_salary * $javascript_fe_hot/100;
var_dump($fe_beijing_salary);

my_dump($fe_beijing_salary);
my_dump($javascript_fe_hot);
my_dump($javascript_cost);


// 2.字符串类型

$desp = "北京1-3年前端岗平均招聘薪资（高）";
$desp2 = '北京1-3年前端岗平均招聘薪资（高）';
my_dump($desp === $desp2);

//PHP中但双引号有区别，双引号支持变量替换

$position = "PHP";
$desp3 = "北京1-3年${position}岗平均招聘薪资（高）";
$desp4  = '北京1-3年${position}岗平均招聘薪资（高）';
my_dump($desp3);
my_dump($desp4);

// 3.数值类型和字符串类型之间的转换


// 数值  -> 字符

$string1 = (string)$fe_beijing_salary;
my_dump( $string1 );

// 字符 => 数值

$number1 = (int)$string1;
my_dump($number1);

$number2 = intval($string1);
my_dump($number2);


// 4.数组

//PHP7
$fe_beijing_salary_array = [19422,30919];
my_echo($fe_beijing_salary_array);


//通过函数创建

$fe_beijing_salary_array2 = array(19422,30919);
my_echo($fe_beijing_salary_array2);

//指定key
$fe_beijing_salary_array3 = array('low' =>19422 ,'height' =>30919 );
my_echo($fe_beijing_salary_array3);

//数组追加

$fe_beijing_salary_array3[] = '20000';
my_echo($fe_beijing_salary_array3);

//指定key

$fe_beijing_salary_array3['low'] = '20000';
my_echo($fe_beijing_salary_array3);


// 5.对象

$city_salary = new stdClass();
$city_salary->city = 'beijing';
$city_salary->position = 'fe';
$city_salary->salary_min = 19422;
$city_salary->salary_max = 30919;

my_echo($city_salary);
//PHP的对象不能动态添加方法

// 6.资源 resource

$redis = new Redis();
$redis->connect("redis.ftqq.com");
$redis->set("book","程序员修炼之道");
my_echo($redis->get("book"));

my_dump($redis);


// 7.可调用类型 callable

function goodbook()
{
    my_echo("程序员修炼之道");
}
call_user_func("goodbook");


// 8.NULL

unset($fe_beijing_salary);
my_dump($fe_beijing_salary);


$fe_beijing_salary_array = NULL;
my_dump($fe_beijing_salary_array);
