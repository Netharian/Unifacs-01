<?php

require "Model/Cliente.php";

class ControladorLogin
{

    private $cliente;

    public function processaRequisicao()
    {

        require "View/login.php";
    }

    public function cadastrar()
    {

        $this->cliente = new Cliente();

        $this->cliente->setName($_POST['nome']);
        $this->cliente->setEmail($_POST['email']);
        $this->cliente->setPassword($_POST['senha']);
        $this->cliente->setCpf($_POST['cpf']);
        $this->cliente->setRG($_POST['rg']);
        $this->cliente->setTelephone($_POST['telefone']);
        $this->cliente->setCelphone($_POST['celular']);

        $cadastro = $this->cliente;

        $this->cliente->cadastrar($cadastro);

        require "View/login.php";

    }

    public function login()
    {
        $this->cliente = new Cliente();

        $this->cliente->setEmail($_POST['email']);
        $this->cliente->setPassword($_POST['senha']);

        $logar = $this->cliente;

        $this->cliente->login($logar);
        require "View/index.php";

    }

    public function deslogar()
    {
        $this->cliente = new Cliente();

        $this->cliente->setEmail($_SESSION['usuario']);

        $deslogar = $this->cliente;

        $this->cliente->deslogar($deslogar);
        header("Location: ./index");

    }

}
