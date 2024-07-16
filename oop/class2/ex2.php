<!-- Exercício 2
Objetivo: Adicione um método na classe Login que permita redefinir o email e a senha do usuário. -->

<?php

class Login
{
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $e;
    }

    public function setSenha($e){
        $this->senha = $e;
    }

    public function resetCredentials($newEmail, $newSenha){
        $this->email = $newEmail;
        $this->senha = $newSenha;
    }

    public function Logar(){
        if($this->getEmail() == "teste@gmail.com" and $this->getSenha() == '123456'):
            echo "Login com sucesso!<br>";
        else:
            echo "Login sem sucesso, revise as informações digitadas<br>";
        endif;
    }


}

$gabriel = new Login;

$gabriel->setEmail('teste@gmail.com');
$gabriel->setSenha('123456');
$gabriel->Logar();
$gabriel->resetCredentials('gabriel@gmail.com', 'abcd');
$gabriel->Logar();