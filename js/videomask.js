

    
//RESETANDO TELAS QUE NAO IRÃO APARECER NA PRIMEIRA IMPRESSAO

document.getElementById("sectionup3k").style.display = "none";


// SETANDO OUTRAS PROPRIEDADES

document.getElementById("sectionup3k").style.display = "flex"; /// botar em none








/// VALIDADOR CPF
function TestaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000") return false;

    for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10))) return false;

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11))) return false;
    return true;
}




///// CAMPO CPF

function mascara(i) {

    var v = i.value;

    if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
        i.value = v.substring(0, v.length - 1);
        return;
    }

    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-";

}



///PARTE 1





function step1() {
    var nome = document.getElementById("nome").value;
    var CPF = document.getElementById("cpf").value;
    var CPFtratado = CPF.replace(".", "");
    var CPFtratado = CPFtratado.replace(".", "");
    var CPFtratado = CPFtratado.replace("-", "");
    var valida = TestaCPF(CPFtratado);
    if (valida == true) {
        document.getElementById("cpf").style.color = 'green';
        sessionStorage['session'] = CPFtratado;
        sessionStorage['nome'] = nome;
        var sessao = sessionStorage.getItem('session');
        var vname = sessionStorage.getItem('nome');
        document.getElementById("idnome").innerHTML = vname;
    
        // ajax
        var nome = document.getElementById("nome").value;
        var whatsapp = document.getElementById("whatsapp").value;
        document.getElementById("botaostep1").addEventListener("click", function (e) {
            var dados = new FormData();
            dados.append('nome', nome);
            dados.append('whatsapp', whatsapp);
            dados.append('CPFtratado', CPFtratado);
           
            $.ajax({
                url: "step1.php",
                method: 'post',
                data: dados,
                contentType: false,
                processData: false,
                success: function (resposta) {
                    console.log(resposta);
                    step2();
                }
            })

        });


    }
}






