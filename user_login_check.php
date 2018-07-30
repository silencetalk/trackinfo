<?php

error_reporting( E_ALL & ~E_NOTICE );

// 获取输入参数
$gonghao = trim( $_REQUEST['gonghao'] );
$password = trim( $_REQUEST['password'] );

// 参数检查
if( strlen( $gonghao ) < 1 ) die("工号不能为空");
if( mb_strlen( $password ) < 6 ) die("密码不能短于6个字符");
if( mb_strlen( $password ) > 12 ) die("密码不能长于12个字符");

if( !filter_var( $gonghao , FILTER_VALIDATE_GONGHAO ) )
{
    die("工号错误");
}

// die("数据OK");
// 链接数据库
try
{
    $dbh = new PDO('mysql:host=mysql.ftqq.com;dbname=trackinformdb', 'track', 'track123');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `user` WHERE `gonghao` = ? LIMIT 1";

    $sth = $dbh->prepare( $sql );
    $ret = $sth->execute( [ $gonghao ] );
    $user = $sth->fetch(PDO::FETCH_ASSOC);

    if( !password_verify( $password , $user['password'] ) )
    {
        // print_r( $user );
        die("错误的工号或者密码");
    }

    session_start();
    $_SESSION['gonghao'] = $gonghao;
    $_SESSION['uid'] = $user['id'];

    die("登录成功<script>location='index.php'</script>");


    
    // header("Location: user_login.php");
    die("用户注册成功<script>location='user-login.php'</script>");
}
catch( PDOException $Exception )
{
    if( $Exception->getCode() == 23000 )
    {
        die("Email地址已被注册");
    }
    else
    {
        die( $Exception->getMessage() );
    }  
}
catch( Exception $Exception )
{
    die( $Exception->getMessage() );
}


// echo $sql;