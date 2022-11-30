<?php
//$serverName = "ANDRO-PC\SQLEXPRESS";
$serverName = "ANDROLAPTOP\SQLEXPRESS"; //Cambiar
$connectionInfo = array( "Database"=>"Proyecto", "UID"=>"UsernameCon", "PWD"=>"Alejandro1298");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

//Verificar Conexión
/* 
if ($conn){
    echo "Conexión EXITOSA";
} else{
    echo "MALA";
}*/
?>