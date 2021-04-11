

const validaSenha = () => {
    let senha = document.forms['registerForm']['senha'].value;
    let confirmeSenha = document.forms['registerForm']['confirmeSenha'].value;

    if (senha != confirmeSenha){
        alert('Senhas não são iguais. Digite-as novamente.')
        return false;
    }

    return true;
}