function checarSenha(){
    var senha = document.getElementById('campoSenha').value;
    var confirma_senha = document.getElementById('confirmaSenha').value;

    if (senha == confirma_senha){
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Senhas correspondem';
    } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Senhas não correspondem';
    }
}