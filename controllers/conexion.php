<?php

function conectar(){

    $user="root";
    $pass="";
    $server="localhost";
    $db="dragon-match-batalla";
    $con= mysql_connect ($server,$user,$pass) or die ("error al conectar".mysql_error());
    mysql_select_db($db,$con);

    return $con;
}

?>