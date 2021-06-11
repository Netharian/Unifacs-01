<?php
require "ClienteDAO.php";

class Cliente
{
    private $id;
    private $name;
    private $email;
    private $cpf;
    private $rg;
    private $telephone;
    private $celphone;
    private $address;
    private $password;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

    }

    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;

    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

    }

    public function getCelphone()
    {
        return $this->celphone;
    }

    public function setCelphone($celphone)
    {
        $this->celphone = $celphone;

    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

    }

    public function cadastrar($cliente)
    {
        $clienteDAO = new ClienteDAO();
        $clienteDAO->cadastrar($cliente);

    }
    public function login($cliente)
    {
        $clienteDAO = new ClienteDAO();
        $clienteDAO->login($cliente);

    }

    public function deslogar($cliente)
    {
        $clienteDAO = new ClienteDAO();
        $clienteDAO->deslogar($cliente);

    }

}
