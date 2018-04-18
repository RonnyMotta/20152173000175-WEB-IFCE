/**
 * “Função criada em um ficheiro
 externo que mostra uma mensagem
 */
function funcao1()
{
    alert("AIA");
}

function funcao2(){
    var x = Math.floor((Math.random() * 50) + 0);
    document.getElementById("demo").innerHTML = x;
    }
function funcao3(){
        window.open('http://www.imdb.com');
    }
function funcao4() {

    window.parent.document.title = "AIA 2009-2010”.";
    window.onload = funcao4();
    }
function funcao5() {
    var x = 26;
    var y = 3;
    var temp = Math.trunc(x / y); //pega a parte inteira, então o 2,3 vira 2
    var modulo = x - temp * y; //pega o dividendo menos o maior valor inteiro divisível
document.body.innerHTML += "<br>" + modulo;
    }
function funcao6t1()
    {document.getElementById("txt").innerHTML = "Primeira caixa ativada :)";}
function funcao6t2()
    {document.getElementById("txt").innerHTML = "Perdeu o foco :(";}


function funcao7() {
    var op = document.getElementById("valor").value;
    if (op >= 0 && op<10) {
        document.getElementById("texto").innerHTML="Insuficiente";
    }else if (op >=10 && op<14) {
        document.getElementById('texto').innerHTML="Bom";
    }else if (op >= 14) {
        document.getElementById('texto').innerHTML="Muito bom";
    }
}

function funcao8(op) {
    switch (op) {
        case '1':
            document.getElementById("textoo").innerHTML="AIA 1";
            break;
        case '2':
            document.getElementById('textoo').innerHTML="AIA 2";
            break;
        case '3':
            document.getElementById('textoo').innerHTML="AIA 3";
            break;
        default:
            document.getElementById('textoo').innerHTML="Sem especificação";
            break;
    }
}