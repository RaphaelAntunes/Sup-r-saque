<?php
   $cpf = $_POST['cpf'];
   $count = $_POST['count'];
if ( isset($_FILES['file']) && !empty($_FILES['file']['name']) )
    {   $extensao = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);    
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
        $file_tmp_name = $_FILES['file']['tmp_name'];           
        if($count == 1){
            $x = 'mais';
        }else{
            $x = 'menos';
        }
        $destino = 'comprovantes/'.$x.'/'.$cpf.'/';
        if(file_exists($destino) == true){           
        }else{
            mkdir(__DIR__.'/comprovantes/'.$x.'/'.$cpf.'/', 0777, true);           
        }
        if(move_uploaded_file($file_tmp_name,$destino.'RGOUCNH.'.$extensao) == true){
            echo 1;
        }   
    }