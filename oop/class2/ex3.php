<!-- Exercício 3
Objetivo: Adicione um método na classe Login que retorna uma string com a mensagem de status do login sem exibir diretamente. -->

<?php

class Login{
    private $email;
    private $senha;
    private $status_login;

    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setEmail($e){
        return $this->email = $e;
    }

    public function setSenha($e){
        return $this->senha = $e;
    }

    public function getStatusLogin($status_login){
        return $this->status_login;
    }

    public function Logar(){
        if($this->email == 'teste@gmail.com' and $this->senha == '1234'):
            $this->status_login = 'Login efetuado com sucesso!';
            echo $this->getStatusLogin($this->status_login);
        else:
            $this->status_login = 'Login não realizado.';
            echo $this->getStatusLogin($this->status_login);
        endif;
    }

}


$gabriel = new Login();
$gabriel->setEmail('teste@gmai.com');
$gabriel->setSenha('1234');
echo $gabriel->getEmail() . "<br>";
echo $gabriel->getSenha() . "<br>";
echo "Senha e email definidos.<br>";
$gabriel->Logar();
