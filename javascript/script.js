function funclogin(usuario, senha){
    var BDuser = ['recepcao', 'medico1', 'medico2'];
    var BDpassword = ['1234', 'abcd', 'www9'];

    user = document.getElementById(usuario).value;
    password = document.getElementById(senha).value;

    var indice = BDuser.indexOf(user);
    
    //se o usuário não foi encontrado
    if(indice == -1){
        alert("usuário não encontrado!");
    }
    else{
        //verifica a senha
        if (BDpassword[indice] == password){
            //redirecionar para a página



        }
        else{
            alert("Senha incorreta!");
        }
    }
}