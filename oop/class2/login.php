<?php

class Login{
    private $email;//quando atributos privados precisam ser acessados, é necessários usar getter e setters
    private $senha;

    //getters
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



    public function Logar(){
        if($this->email == 'teste@gmail.com' and $this->senha == '123456'):
            echo 'Login com sucesso!';
        else:
            echo 'Login falhou, revise suas credencias digitadas.';
        endif;
    }
}

// Quando atribuos publicos
// $logar = new Login;
// $logar->email = 'teste@gmail.com';
// $logar->senha = '123456';

// $logar->Logar();

// Quando atributos privados
$logar = new Login;
$logar->setEmail("teste()/@gmail.com");
$logar->setSenha("123456");
$logar->Logar();
echo "<br>";

echo $logar->getEmail();

?>