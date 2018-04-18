/**
 * Created by Windows on 10/04/2018.
 */
function validar() {
    var nome = form1.nome.value;
        var email = form1.email.value;
            var senha = form1.senha.value;
    var rep_senha = form1.rep_senha.value;
    if (nome == "") {
        alert('Preencha o campo com seu nome');
        form1.nome.focus();
        return false; }
            if ((email.length != 0) && ((email.indexOf("@") < 1) || (email.indexOf('.') < 1))) {
                alert('email inválido!');
                     form1.email.value = "";
                         form1.email.focus();
        return false; }
    alert('Enviados com sucesso!');
    return true;
}



