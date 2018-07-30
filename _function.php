<?php
return false;
function my_dump( $var , $show_file = false )
{
    var_dump( $var );
    $trace = @reset( debug_backtrace( DEBUG_BACKTRACE_PROVIDE_OBJECT , 1 ) );
    $fileinfo = $show_file ? "@" . $trace['file'] : "";
    echo " -- in LINE " . $trace['line'] . $fileinfo . "\r\n\r\n" ;
}

function my_echo( $var , $show_file = false )
{
    print_r( $var );
    $trace = @reset( debug_backtrace( DEBUG_BACKTRACE_PROVIDE_OBJECT , 1 ) );
    $fileinfo = $show_file ? "@" . $trace['file'] : "";
    echo " -- in LINE " . $trace['line'] . $fileinfo . "\r\n\r\n" ;
}