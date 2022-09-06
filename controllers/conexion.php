<?php

function conectar(){

    $user="root";
    $pass="";
    $server="localhost";
    $db="dragon-match-batalla";
    $con=mysql_connect($server,$user,$pass) or die ("error connecting to server".mysql_error());
    mysql_select_db($db,$con);
    
    return $con;
}

?>