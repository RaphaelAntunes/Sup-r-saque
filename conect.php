<?php




$host = "localhost";
$user = "admin";
$pass = "";
$banco="test";

$connect = new mysqli($host, $user, $pass, $banco);

if(!$connect){

	die("Falha na Conexão:" . mysqli_connect_error());
}

	
?>