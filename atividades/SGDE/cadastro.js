
function validar() {
    var nome = form.nome.value;
    var email = form.email.value;
    var selec = form.selec.value;
    var telefone = form.telefone.value;
    var trabalho = form.trabalho.value;
    var senha = form.senha.value;
    var rep_senha = form.rep_senha.value;


    if (nome == "") {
        alert('Preencha o campo com seu nome');
        form.nome.focus();
        return false;
    }

    if (nome.length < 3) {
        alert('Digite seu nome completo');
        form.nome.focus();
        return false;
    }
    if( email.value==""
        || email.value.indexOf('@')==-1
        || email.value.indexOf('.')==-1 )
    {
        alert( "Por favor, informe um E-MAIL válido!" );
        form.email.focus();
        return false;
    }

    if (selec.value=="")
        {
            alert("Escolha um estado!");
            form1.selec.focus();
        }

    if (telefone = "") {
        alert("Digite o número do telefone!");
        form.telefone.focus();
        return false;
    }
    if (telefone.value.length != /^\d*$/) {
        alert("Digite apenas números!");
        form.telefone.focus();
        return false;
    }
    if (telefone.length < 9 && telefone.length > 9) {
        alert('Digite um número de telefone valido');
        form.telefone.focus();
        return false;
    }

    if (trabalho.value=="")
    {
        alert("Escolha um estado!");
        form.trabalho.focus();
    }
    if ((senha = " " ) || (senha.length <= 5)) {
        alert("A senha deve conter no minímo 6 digitos!");
        form.senha.focus();
        return false;
    }
    if (senha != rep_senha) {
        alert('Senhas diferentes');
        form.senha.focus();
        return false;
    }

}