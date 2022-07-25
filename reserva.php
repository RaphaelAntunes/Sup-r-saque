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
    <link rel="stylesheet" href="css/formulario.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


<body>

    <section class="main">
        <div class="parte1 d-flex justify-content-center align-items-center flex-column text-align ">
            <div class="d-flex">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="img/s.png" width="300px" alt="">
                    <h1 class="mb-5" id="textos">MARQUE UMA DAS OPÇÕES ABAIXO COM O VALOR REFERENTE AO SALDO DO SEU
                        FGTS</h1>
                    <p id="comments"></p>
                </div>
            </div>
    </section>

    <!-- Parte onde se seleciona a renda -->

    <section id="comeco" class="checkmodel justify-content-center align-items-center flex-column mt-5 container text-center">
        <h1>Para prosseguir, com a instituição<br> fincanceira selecione a caixa que<br> corresponde o seu FGTS e
            encaminhe os documentos que forem solicitados.</h1>
        <label class="container-label mt-5" data-toggle="modal" data-target=".bd-example-modal-lg">
            <p class="ml-2" class="btn btn-primary"> A partir de R$ 3.000,00 </p>
            <input type="checkbox" id="check1">
            <span class="checkmark"></span>
        </label>
        <label class="container-label " data-toggle="modal" data-target=".bd-example-modal-lg">
            <p class="ml-2" class="btn btn-primary"> A baixo de R$ 3.000,00</p>
            <input type="checkbox" id="check2">
            <span class="checkmark"></span>
        </label>
        <h1 class="mt-5" style="font-weight: bold;"> A DOCUMENTAÇÃO SÓ SERÁ ACEITA,<br> APÓS DE TER SELECIONADO O SAQUE
            ANIVERSÁRIO E AUTORIZADO O BANCO SAFRA.</h1>
    </section>

    <!-- Parte onde insere os dados -->

    <section id="sectionup3k" class="up3k justify-content-center align-items-center flex-column mt-5 container-fluid text-center ">
        <form class="formulariodoc d-flex justify-content-center align-items-center container-fluid  flex-column">

           

            <h5 class="mb-5"><span id="idnome"></span></h5>
            <div id="passo2">
                <h5 class="mb-5">Aqui você irá inserir a Captura de tela do saldo do seu <b>FGTS</b></h5>
                <div class="d-flex justify-content-center align-items-center container text-center mt-5 flex-lg-row flex-column">
                    <div class="boxi justify-content-center align-items-center ">
                        <div class="d-flex justify-content-between align-items-center boxicont  flex-column">
                            <img src="img/tel.svg" style="height: 110px;" alt="" class="mb-3">
                            <p>CAPTURA DE TELA<BR> DO SALDO DO FGTS</p>
                        </div>
                        <form enctype="multipart/form-data">
                            <label class="label" id="label1" for="file">Clique para Inserir</label>
                            <p style="opacity:0;" class="mt-3 mb-3" id="txt1">Inserido com sucesso !</p>
                            <input type="file" id="file" style="display: none;" />
                            <input type="text" id="campocpf1" style="display: none;">
                            <button type="button" id="btEnviar">Enviar</button>
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                <img src="img/bolaazul.svg" width="10px" class="mt-5">
                <img src="img/bolaazul.svg" width="10px" class="mt-5 ml-2 mr-2">
                <img src="img/bolacinza.svg" width="10px" class="mt-5">
                <img src="img/bolacinza.svg" width="10px" class="mt-5 ml-2 mr-2">
                <img src="img/bolacinza.svg" width="10px" class="mt-5">

                </div>
                <div class="d-flex flex-lg-row flex-column-reverse container justify-content-center align-items-center">
                    
                    <button id="botaostep2block" class="buttonsprincipal disablee mt-lg-5 mt-5 mb-lg-5 mb-3">PRÓXIMO</button>
                    <button id="botaostep2" class="buttonsprincipal mt-lg-5 mt-5 mb-lg-5 mb-3" onclick="step2()">PRÓXIMO</button>
                </div>
            </div>

            <!-- Tela 2 -->

            <div id="passo3">
                <h5 class="mb-5">Aqui, você irá inserir uma foto do seu <b>RG ou CNH</b></h5>
                <div class="d-flex justify-content-center align-items-center container text-center mt-5 flex-lg-row flex-column">
                    <div class="boxi justify-content-center align-items-center ">
                        <div class="d-flex justify-content-between align-items-center boxicont  flex-column">
                            <img src="img/char.svg" style="height: 110px;" alt="" class="mb-3">
                            <p>RG OU CNH</p>
                        </div>
                        <form enctype="multipart/form-data">
                            <label class="label" id="label2" for="file2">Clique para Inserir</label>
                            <p style="opacity:0;" class="mt-3 mb-3" id="txt2">Inserido com sucesso !</p>
                            <input type="file" id="file2" style="display: none;" />
                            <input type="text" id="campocpf2" style="display: none;">
                            <button type="button" id="btEnviar2">Enviar</button>
                        </form>
                    </div>
                   
                </div>
                <div class="d-flex justify-content-center align-items-center">
                <img src="img/bolaazul.svg" width="10px" class="mt-5">
                <img src="img/bolaazul.svg" width="10px" class="mt-5 ml-2 mr-2">
                <img src="img/bolaazul.svg" width="10px" class="mt-5">
                <img src="img/bolacinza.svg" width="10px" class="mt-5 ml-2 mr-2">
                <img src="img/bolacinza.svg" width="10px" class="mt-5">

                </div>
                <div class="d-flex flex-lg-row flex-column-reverse container justify-content-center align-items-center">
                    <button id="botaostep3block" class="buttonsprincipal disablee mt-lg-5 mt-5 mb-lg-5 mb-3">PRÓXIMO</button>
                    <button id="botaostep3" class="buttonsprincipal mt-lg-5 mt-5 mb-lg-5 mb-3" onclick="step3()">PRÓXIMO</button>
                </div>
            </div>

            <!-- Tela 3 -->

            <div id="passo4">
                <h5 class="mb-5">Aqui, você irá inserir seu <b>COMPROVANTE DE RESIDÊNCIA</b></h5>
                <div class="d-flex justify-content-center align-items-center container text-center mt-5 flex-lg-row flex-column">
                    <div class="boxi justify-content-center align-items-center ">
                        <div class="d-flex justify-content-between align-items-center boxicont  flex-column">
                            <img src="img/casa.svg" style="height: 110px;" alt="" class="mb-3">
                            <p>COMPROVANTE<BR>DE RESIDÊNCIA</p>
                        </div>
                        <form enctype="multipart/form-data">
                            <label class="label" id="label3" for="file3">Clique para Inserir</label>
                            <p style="opacity:0;" class="mt-3 mb-3" id="txt3">Inserido com sucesso !</p>
                            <input type="file" id="file3" style="display: none;" />
                            <input type="text" id="campocpf3" style="display: none;">
                            <button type="button" id="btEnviar3">Enviar</button>
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                <img src="img/bolaazul.svg" width="10px" class="mt-5">
                <img src="img/bolaazul.svg" width="10px" class="mt-5 ml-2 mr-2">
                <img src="img/bolaazul.svg" width="10px" class="mt-5">
                <img src="img/bolaazul.svg" width="10px" class="mt-5 ml-2 mr-2">
                <img src="img/bolacinza.svg" width="10px" class="mt-5">

                </div>
                <div class="d-flex flex-lg-row flex-column-reverse container justify-content-center align-items-center">
                    <button id="botaostep4block" class="buttonsprincipal disablee mt-lg-5 mt-5 mb-lg-5 mb-3">PRÓXIMO</button>
                    <button id="botaostep4" class="buttonsprincipal mt-lg-5 mt-5 mb-lg-5 mb-3" onclick="step4()">PRÓXIMO</button>
                </div>
            </div>

            <!-- Tela 4 -->

            <div id="passo5">
                <h5 class="mb-5">Aqui, você irá inserir um compravante de <b>DADOS BANCÁRIOS</b></h5>
                <div class="d-flex justify-content-center align-items-center container text-center mt-5 flex-lg-row flex-column">
                    <div class="boxi justify-content-center align-items-center ">
                        <div class="d-flex justify-content-between align-items-center boxicont  flex-column">
                            <img src="img/pig.svg" style="height: 110px;" alt="" class="mb-3">
                            <p>COMPROVANTE DE<br>DADOS BANCARIOS</p>
                        </div>
                        <form enctype="multipart/form-data">
                            <label class="label" id="label4" for="file4">Clique para Inserir</label>
                            <p style="opacity:0;" class="mt-3 mb-3" id="txt4">Inserido com sucesso !</p>
                            <input type="file" id="file4" style="display: none;" />
                            <input type="text" id="campocpf4" style="display: none;">
                            <button type="button" id="btEnviar4">Enviar</button>
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                <img src="img/bolaazul.svg" width="10px" class="mt-5">
                <img src="img/bolaazul.svg" width="10px" class="mt-5 ml-2 mr-2">
                <img src="img/bolaazul.svg" width="10px" class="mt-5">
                <img src="img/bolaazul.svg" width="10px" class="mt-5 ml-2 mr-2">
                <img src="img/bolaazul.svg" width="10px" class="mt-5">

                </div>
                <div class="d-flex flex-lg-row flex-column-reverse container justify-content-center align-items-center">
                    
                    <button id="botaostep5block" class="buttonsprincipal disablee mt-lg-5 mt-5 mb-lg-5 mb-3">PRÓXIMO</button>
                    <button id="botaostep5" class="buttonsprincipal mt-lg-5 mt-5 mb-lg-5 mb-3" onclick="step5()">PRÓXIMO</button>
                </div>
            </div>
        </form>
      

        <!-- Parte onde se insere dados pessoais -->

        <form class="formulariodoc d-flex justify-content-center align-items-center container-fluid  flex-column">
            <div id="passo1">
                <h5 class="mb-5">Primeiro para começar, precisamos de algumas informações. <br> Insira os dados corretamente abaixo:</h5>
                <div class="d-flex justify-content-center align-items-center container text-center flex-lg-row flex-column" required>
                    <input id="nome" type="text" placeholder="NOME" name="nome">
                    <input id="cpf" class="mr-lg-3 ml-lg-3 mb-lg-0 mb-5 mt-lg-0 mt-5" type="text" placeholder="CPF" oninput="mascara(this)" name="cpf" value="70716058405">
                    <input id="whatsapp" type="text" placeholder="TELEFONE / WHATSAPP" name="whatsapp" >
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="d-flex">
                <img src="img/bolaazul.svg" width="10px" class="mt-5">
                <img src="img/bolacinza.svg" width="10px" class="mt-5 ml-2 mr-2">
                <img src="img/bolacinza.svg" width="10px" class="mt-5">
                <img src="img/bolacinza.svg" width="10px" class="mt-5 ml-2 mr-2">
                <img src="img/bolacinza.svg" width="10px" class="mt-5">

                </div>

                <button id="botaostep1" class="buttonsprincipal mt-lg-5 mt-3 mb-lg-5 mb-3" onclick="step1()">PRÓXIMO</button>

                </div>
            </div>
        </form>
    </section>

    

    <section class="footer container-fluid d-flex justify-content-center align-items-center flex-column">
        <img src="img/logo.svg" width="100%" style="max-width: 350px;" class="mb-3" alt="">
        <h1>2021 Super Saque - Todos os Direitos Reservados</h1>
    </section>
</body>




<style>
   
.tra{
	
	animation: saida .2s linear;
	margin-left: -10000px;
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



    #passo3 {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
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