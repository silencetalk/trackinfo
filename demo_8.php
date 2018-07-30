<?php

//运算符

// 1。 次方

$a = 2;
my_echo($a ** 10);

// 2.引用赋值
$b = &$a; //引用
my_echo( $b );

//修改别名会影响原变量
$b = 3;
my_echo( $a );

//删除别名不会影响原变量，PHP采用计数模式，一个变量没有其它别名时才会被删除
unset( $b );
my_echo( $a );

$c = &$a;
unset( $a );
my_echo( $c );

// 3.比较运算符

//太空船运算符

my_echo( 1 <=> 1);
my_echo( 1 <=> 2);
my_echo( 2 <=> 1);


// null合并运算
//从左往右取第一个不为null的值
my_echo( $a ?? $b ?? $c ?? $d );

// 4.错误控制运算符

print_r( $data['book'] );
print_r( @$data['book'] ); //屏蔽错误信息

// 5.逻辑运算符
if( true and false or true ) echo "PHP除了 && 和 || 还支持 and 和 or \r\n\r\n";

// 6.运行运算符
echo `php -v`;
//出于安全考虑，一般不直接调用命令行命令

// 7。数组运算符

$city = [ 1=>'beijing' , 2=>'shanghai' , 3=>'shenzhen' ];
$city2 = [ 1=>'chongqing' , 2=>'chengdu' ];
$city3 = [ 2=>'shanghai' , 1=>'beijing' , 3=>'shenzhen' ];

my_echo( $city + $city2 ); //加号类似于追加，如果key已有相应值，不会覆盖原有值
my_echo( $city2 + $city3 );
my_dump( $city == $city3 );
my_dump( $city === $city3 ); // 三个等号要求数组中顺序也一致

// 8.类运算

class Dog{};
class Cat{}; 

$🐶 = new Dog();

my_dump( $🐶 instanceof Dog );
my_dump( $🐶 instanceof Cat );

