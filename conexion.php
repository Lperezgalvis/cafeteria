<?php 
function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $bd="cafeteria";
    $con=mysqli_connect($server,$user,$pass,$bd) or die ("error al conectar".mysql_error());
    

    return $con;
}
/*$conexion=mysql_connect("localhost","root","12345");
mysql_select_db("cafeteria", $conexion); //selec de bd y direc del server//
mysql_query("SET NAME 'utf8'");           //ejecucion de consulta*/
?>