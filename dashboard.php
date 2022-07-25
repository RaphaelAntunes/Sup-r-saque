<head>
    <title>Home - Super Saque</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/logozinha.svg" rel="shortcut icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


<body>

    <section class="main">
        <div class="parte1 d-flex justify-content-center align-items-center flex-column text-align ">
            <div class="d-flex">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="img/s.png" width="100px" alt="">
                    <h1 class="mb-5" id="textos">Pesquise e Baixe dados FGTS</h1>
                    <p id="comments"></p>
                </div>
            </div>
    </section>

    <section class="dashboard d-flex justify-content-center align-items-center flex-column text-center">
        <div>
            <h1 class="mt-5">Pesquise aqui pelos seguntes dados:</h1>

            <div class="d-flex flex-column justify-content-center align-items-center ">
                <p class="mt-4 mb-4">CPF:</p>
                <div>
                    <form action="busca_cpf.php" method="POST">
                    <input type="text" name="cpf" placeholder="Digite o CPF">
                    <button type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center ">
                <p class="mt-4 mb-4">Nome:</p>
                <div>
                <form action="busca_nome.php" method="POST">

                    <input type="text" name="nome" placeholder="Digite o nome">
                    <button type="submit">Pesquisar</button>
                </form>
                </div>

            </div>
        </div>
        <div>
            <h1 class="mt-5">Pesquisa por datas</h1>

            <div class="datas d-flex flex-column justify-content-center align-items-center mb-5">
                <h5 class="mt-4 mb-4">Digite as datas:</h5>
                <div class="d-flex flex-lg-row flex-column justify-content-center align-items-center">
                    <form action="busca_data.php" method="post">
                    <div>
                        <p>Data Inicial</p>
                        <input type="date" name="datai"  class="mr-lg-3" required>
                    </div>
                    <div>
                        <p>Data Final</p>
                        <input type="date" name="dataf" required>
                    </div>

                    <div>
                        <p>-</p>
                         <button class="ml-lg-3" type="submit">Pesquisar</button>
                    </div>
                </form>
                </div>
            </div>

        </div>
    </section>



    <section class="footer container-fluid d-flex justify-content-center align-items-center flex-column">
        <img src="img/logo.svg" width="100%" style="max-width: 350px;" class="mb-3" alt="">
        <h1>2021 Super Saque - Todos os Direitos Reservados</h1>
    </section>
</body>




<style>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
    crossorigin="anonymous"></script>