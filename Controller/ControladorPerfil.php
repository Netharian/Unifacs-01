<?php

require "Model/Cliente.php";

class ControladorPerfil
{

    private $cliente;

    public function processaRequisicao()
    {

        require "View/meuperfil.php";
    }
}
