<?php
$zip = new ZipArchive();
  
if( $zip->open( 'comprovantes/arquivo.zip' , ZipArchive::CREATE )  === true){
      
    $zip->addFile(  'comprovantes/mais/70716058405/RGOUCNH.svg' , 'RG.svg' );
    $zip->addFile(  'comprovantes/mais/70716058405/DADOSBANCARIOS.svg' , 'BANCO.svg' );
    $zip->addFile(  'comprovantes/mais/70716058405/SALDOFGTS.svg' , 'FGTS.svg' );
    $zip->addFile(  'comprovantes/mais/70716058405/COMP_RESIDENCIA.svg' , 'RESIDENCIA.svg' );
  
    $zip->addFromString('string.txt' , "Nome: \nCPF: \nRenda:" );

    $zip->close();
}
?>