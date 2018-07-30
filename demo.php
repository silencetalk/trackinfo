<?php
error_reporting( E_ALL );
include '_function.php';
$cid =  isset( $_GET['cid'] ) ? intval( $_GET['cid'] ) : 1; 
$file = dirname( __FILE__ ) . '/demo_' . intval( $cid ) . '.php';

if( !file_exists( $file ) ) $file = 'demo_1.php';

$demos = array_map( function ( $name )
{
    if( preg_match( '/demo_([0-9]+)/is' , $name , $out ) )  return intval($out[1]);
    else    return $name;  
} , glob( 'demo_*.php' ) );

sort( $demos );

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>方糖全栈课 PHP DEMO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://lib.sinaapp.com/js/jquery/3.1.0/jquery-3.1.0.js"></script>
    <style>
    body
    {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
             "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB", "Microsoft YaHei",
             SimSun, sans-serif;
    }

    a
    {
        text-decoration: none;
    }
    
    a:link
    {
        color:rgb(16, 101, 185);
    }

    a:hover
    {
        text-decoration: underline;
    }

    a:visited
    {
        color:rgb(65, 147, 230);
    }

    a.active
    {
        color:#eee;
    }

    #mrfangtang
    {
        position:fixed;
        bottom:0px;
        right:50px;
        width:150px;
    }

    h2
    {
        font-size: 20px;
        font-weight: normal;
        color:rgb(65, 147, 230);
    }

    ul.demolist
    {
        padding:0px;
    }

    ul.demolist > li
    {
        display: inline-block;
        border:1px solid #ccc;
        padding:10px;
        margin-bottom:10px;
    }

    #output
    {
        border: 3px dashed #ccc;
        padding:10px;
        height: 600px;
        overflow: auto;
        background-color:#f2f2f2;
        font-size:14px;
        font-family: 'Source code pro';
    }


    </style>
</head>
<body>
    <h2>PHP课程演示</h2>
    <ul class="demolist">
        <?php if( $demos ):?>
            <?php foreach( $demos as $demoid ): ?>
                <li><a href="?cid=<?=$demoid?>" 
                <?php if( $demoid === $cid ) :?>class="active"<?php endif; ?> >
                    <?=$demoid?></a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>

    <pre id="output"><?php include $file; ?></pre>
    <img src="fangtangjun.png" alt="方糖君" id="mrfangtang" />
    
</body>
</html>