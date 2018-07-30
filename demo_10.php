<?php
//函数

//重复定义系统函数会导致页面终止
/* function reset()
{
    //
}
 */

 // 2.可变函数

 function salary_beijing()
 {
     return 28713;
 }
 function salary_shanghai()
 {
     return 23824;
 }
 function salary_shenzhen()
 {
     return 19935;
 }
 $_REQUEST['city'] = $_REQUEST['city'] ?? 'beijing';

 if( function_exists( 'salary_' . $_REQUEST['city'] ) )
    my_echo( call_user_func( 'salary_' . $_REQUEST['city'] ) ) ;

//和switch相比，好在调用的地方没有城市列表，增加城市时，只需要添加函数即可

// 3.引用
$salary_data = new stdClass();
$salary_data->city = 'beijing';
$salary_data->position = 'php';
$salary_data->salary_min = 16501;
$salary_data->salary_max = 28713;

my_echo($salary_data);

function salary_increace( &$data)
{
    $data->salary_min += 10000;
    $data->salary_max += 10000;
}
salary_increace($salary_data);
my_echo( $salary_data);

function salary_decreace( $data)
{
    $data->salary_min -= 10000;
    $data->salary_max -= 10000;
    return $data;
}
salary_decreace($salary_data);
my_echo( $salary_data);

// 4.默认值
function show_day( $today = '2018-7-24')
{
    echo "Today is " . date( "l" ,strtotime( $today) );
}
show_day();

function show_day2( $today = '2018-7-24',$lang)
{
    echo "Today is " . date( "l" ,strtotime( $today) )."\r\n";
}
//show_day2();

/* function show_day3( $today = time() )
{
    echo "Today is " . date( "l" ,strtotime( $today) );
} */
function show_day3( $today = null)
{
    if( $tody === null) $today = time();
    echo "Today is " . date( "l" ,$today )."\r\n";
}
show_day3();

// 5.变长参数
function show_items( ...$items)  // ...表示可接收任意类型
{
    print_r($items);
}
show_items(1,2);
show_items(1,2,3);

// 6.生命参数类型
function show_item2( int ...$items)
{
    print_r($items);
}
show_items2(1,2,"good");