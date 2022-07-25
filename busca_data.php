<?php
session_start();
include("conect.php");
mysqli_set_charset($connect, "utf8");

/// SE EXISTE UMA SESSÃO

$i = $_POST['datai'];
$f = $_POST['dataf'];


    
$result_busca = "SELECT * FROM saque where dia between '$i' and '$f'";
$resultado = mysqli_query($connect, $result_busca);
$con = $connect->query($result_busca) or die($mysqli->error);

?>


<head>
    <title>Resultado - Super Saque</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/logozinha.svg" rel="shortcut icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/callback.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


<body>

    <section class="main">
        <div class="parte1 d-flex justify-content-center align-items-center flex-column text-align ">
            <div class="d-flex">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="img/s.png" width="100px" alt="">
                    <h1 class="mb-5" id="textos">Aqui está os dados que encontramos</h1>
                    <p id="comments"></p>
                </div>
            </div>
    </section>

    <section class="dashboard d-flex justify-content-center align-items-center flex-column text-center">


    <?php 




/* LENDO DADOS DO BANCO DE DADOS */
  while($dado = $con->fetch_array()) { ?>
  
  <?php 
  if($dado['tipo'] == 1){
    $tipo = 'mais';
}else{
    $tipo = 'menos';
}   
  
  
  $link = 'comprovantes/'.$tipo.'/'.$dado['CPF'].'/'.$dado['CPF'].'.zip'; ?>
<h2>
<table class="">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Cadastro</th>
                    <th>Tel/WhatsApp</th>
                    <th>Baixar Dados</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $dado['nome'] ?></td>
                    <td><?php echo $dado['CPF'] ?></td>
                    <td><?php echo $dado['dia'] ?></td>
                    <td><?php echo $dado['Tel'] ?></td>
                    <td><a href='<?php echo $link; ?>'>Download</a></td>
                </tr>
            </tbody>
        </table>
    
    
    <?php } 

  


?>
</section>

    
    <section class="footer container-fluid d-flex justify-content-center align-items-center flex-column">
        <img src="img/logo.svg" width="100%" style="max-width: 350px;" class="mb-3" alt="">
        <h1>2021 Super Saque - Todos os Direitos Reservados</h1>
    </section>
</body>




<style>
    th,
    td {
        text-align: center;
        justify-content: center;
        padding: 10px;
    }

    .label {
        transition: .5s;
        outline-style: none !important;
        cursor: pointer;
        color: white;
        font-family: Inter;
        font-style: normal;
        font-weight: 900;
        font-size: 18px;
        line-height: 32px;
        max-width: 300px;
        width: 100%;
        background: #2FCC71;
        border-radius: 10px;
    }
</style>





<!-- Bootstrap JS -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/videomask.js"></script>
<script src="js/steps.js"></script>

<script src="js/owl.carousel.min.js"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>