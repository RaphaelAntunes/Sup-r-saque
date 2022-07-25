
document.getElementById("botaostep2block","botaostep3block","botaostep4block","botaostep5block").addEventListener("click", function (event) {
    event.preventDefault()
});

document.getElementById("botaostep5").addEventListener("click", function (event) {
    event.preventDefault()


});



document.getElementById("check1").onclick = function () {

    document.getElementById("textos").innerHTML = "INSIRA OS DADOS PEDIDOS<br> PARA SOLICITAR SUA ANÁLISE <br> <h4>Você selecionou Acima de R$ 3.000,00</h4>";
    sessionStorage['count'] = 1;


};

document.getElementById("check2").onclick = function () {
    document.getElementById("textos").innerHTML = "INSIRA OS DADOS PEDIDOS<br> PARA SOLICITAR SUA ANÁLISE <br> <h4>Você selecionou Abaixo de R$ 3.000,00</h4>";
    sessionStorage['count'] = 2;

};



$(document).ready(function() {
    $('#btEnviar').click(function() {
        var sessao = sessionStorage.getItem('session');
        var count = sessionStorage.getItem('count');
        var form_data = new FormData();

        form_data.append('file', $('#file').prop('files')[0]);
        form_data.append('cpf', sessao);
        form_data.append('count', count);

        $.ajax({
            url: 'saldofgts.php',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(data) {
                if (data == 1) {
                    document.getElementById("btEnviar").style.display = 'none';
                    document.getElementById("label1").style.display = 'none';
                    document.getElementById("txt1").style.opacity = 1;
                    document.getElementById("txt1").style.color = "green";
                    document.getElementById("botaostep2block").style.display = "none";
                    document.getElementById("botaostep2").style.display = "block";


                }
            }
        });
    });
});

$(document).ready(function() {
    $('#btEnviar2').click(function() {
        var sessao = sessionStorage.getItem('session');
        var count = sessionStorage.getItem('count');

        var form_data = new FormData();

        form_data.append('file', $('#file2').prop('files')[0]);
        form_data.append('cpf', sessao);
        form_data.append('count', count);

        $.ajax({
            url: 'rgoucnh.php',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(data) {
                if (data == 1) {
                    document.getElementById("btEnviar2").style.display = 'none';
                    document.getElementById("label2").style.display = 'none';
                    document.getElementById("txt2").style.opacity = 1;
                    document.getElementById("txt2").style.color = "green";
                    document.getElementById("botaostep3block").style.display = "none";
                    document.getElementById("botaostep3").style.display = "block";

                }
            }
        });
    });
});

$(document).ready(function() {
    $('#btEnviar3').click(function() {
        var sessao = sessionStorage.getItem('session');
        var count = sessionStorage.getItem('count');

        var form_data = new FormData();

        form_data.append('file', $('#file3').prop('files')[0]);
        form_data.append('cpf', sessao);
        form_data.append('count', count);

        $.ajax({
            url: 'comp_residencia.php',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(data) {
                if (data == 1) {
                    document.getElementById("btEnviar3").style.display = 'none';
                    document.getElementById("label3").style.display = 'none';
                    document.getElementById("txt3").style.opacity = 1;
                    document.getElementById("txt3").style.color = "green";
                    document.getElementById("botaostep4block").style.display = "none";
                    document.getElementById("botaostep4").style.display = "block";

                }
            }
        });
    });
});

$(document).ready(function() {
    $('#btEnviar4').click(function() {
        var sessao = sessionStorage.getItem('session');
        var count = sessionStorage.getItem('count');

        var form_data = new FormData();

        form_data.append('file', $('#file4').prop('files')[0]);
        form_data.append('cpf', sessao);
        form_data.append('count', count);

        $.ajax({
            url: 'dadosbancarios.php',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(data) {
                if (data == 1) {
                    document.getElementById("btEnviar4").style.display = 'none';
                    document.getElementById("label4").style.display = 'none';
                    document.getElementById("txt4").style.opacity = 1;
                    document.getElementById("txt4").style.color = "green";
                    document.getElementById("botaostep5block").style.display = "none";
                    document.getElementById("botaostep5").style.display = "block";

                }
            }
        });
    });
});