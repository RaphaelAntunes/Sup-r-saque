<?php

include("conect.php");



$nome = $_POST['nome'];
$cpf = $_POST['CPFtratado'];
$whatsapp = $_POST['whatsapp'];
$cont = $_POST['count'];
$data = date('Y-m-d');


if($cont == 1){
    $tipo = 'mais';
}else{
    $tipo = 'menos';
}

$link = 'comprovantes/'.$tipo.'/'.$cpf.'/'.$cpf.'.zip';
$link2 = 'comprovantes/'.$tipo.'/'.$cpf;

$result_busca = "SELECT * FROM saque WHERE CPF = '$cpf'";
$resultado = mysqli_query($connect, $result_busca);
$rowtotal = $resultado->num_rows;



if($rowtotal == 0){
    $result_busca2 = "INSERT INTO saque (nome, cpf, tel, tipo, dia) VALUES ('$nome', '$cpf', '$whatsapp', '$cont', '$data')";
    $resultado2 = mysqli_query($connect, $result_busca2);
    
    echo $resultado2;

}else{
    echo 'repetido';
}

if($resultado2 == 1){
    

    $zip = new ZipArchive();

    if( $zip->open( $link , ZipArchive::CREATE )  === true){
    
    $zip->addFile($link2.'/RGOUCNH.svg' , 'RG.svg' );
    $zip->addFile($link2.'/DADOSBANCARIOS.svg' , 'BANCO.svg' );
    $zip->addFile($link2.'/SALDOFGTS.svg' , 'FGTS.svg' );
    $zip->addFile($link2.'/COMP_RESIDENCIA.svg' , 'RESIDENCIA.svg' );
  
  //  $zip->addFromString('Registro.txt' , "Nome: $nome \nCPF: $cpf \nRenda: $cont    " );

    $zip->close();
}
    }






?>