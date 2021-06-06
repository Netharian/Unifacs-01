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

    public function __construct($name, $cpf, $email, $rg, $telephone, $celphone)
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->rg = $rg;
        $this->telephone = $telephone;
        $this->celphone = $celphone;

    }
}
