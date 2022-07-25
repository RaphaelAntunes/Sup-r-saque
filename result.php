<?php
include("conect.php");

$datai = $_POST['datai'];
$dataf = $_POST['dataf'];



$result_busca = "SELECT * FROM saque WHERE dia = '$datai'";
$resultado = mysqli_query($connect, $result_busca);
$rowtotal = $resultado->num_rows;

echo $rowtotal;
?>









