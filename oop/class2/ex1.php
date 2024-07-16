<!-- Exercício 1
Objetivo: Modifique a classe Login para adicionar um método que valida se o email fornecido é um endereço de email válido. -->

<?php


class Login{
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
        $this->email = $email;
    }

    public function setSenha($e){
        $this->senha = $e;
    }

    public function isValidEmail($e){
        return filter_var($e, FILTER_SANITIZE_EMAIL) !== false;
        // echo filter_var($e, FILTER_SANITIZE_EMAIL) == true;
        // echo filter_var($e, FILTER_SANITIZE_EMAIL);
        
    }

    public function Logar(){
        if($this->email == "teste@gmail.com" and $this->senha == "123456"):
            echo "Login realizado com sucesso!<br>";
        else:
            echo "Login falhou, revise suas credencias<br>";
        endif;
    }
}


$gabriel = new Login;
// $gabriel->email = 'gabriel@gmail.com';
$gabriel->setEmail('teste@gmail.com');
// $gabriel->senha = 'abc';
$gabriel->setSenha('123456');

// displays email e senha
echo "Meu email é: " . $gabriel->getEmail() . " e minha senha é: " . $gabriel->getSenha();

echo "<br>";
$gabriel->isValidEmail("gabriel@gmail.com");
echo "<br>";
$gabriel->Logar();