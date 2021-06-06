<?php
require "Model/Produto.php";

class ControladorHomePage
{
    private $produto;

    public function __construct()
    {
        $this->produto = new Produto();
    }
    public function processaRequisicao()
    {
        $listaProdutos = $this->produto->listarTodos();
        require "View/index.php";
    }
    public function processaRequisicaoMonitores()
    {
        $listaProdutos = $this->produto->listarTipo("Monitores");
        require "View/index.php";
    }
    public function processaRequisicaoProcessadores()
    {
        $listaProdutos = $this->produto->listarTipo("Processadores");
        require "View/index.php";
    }
    public function processaRequisicaoPDV()
    {
        $listaProdutos = $this->produto->listarTipo("Placas de Vídeo");
        require "View/index.php";
    }
    public function processaRequisicaoPM()
    {
        $listaProdutos = $this->produto->listarTipo("Placas-Mãe");
        require "View/index.php";
    }
    public function processaRequisicaoMemRAM()
    {
        $listaProdutos = $this->produto->listarTipo("Memórias RAM");
        require "View/index.php";
    }

}
