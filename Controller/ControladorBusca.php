 <?php
require "Model/Produto.php";

class ControladorBusca
{

    public function __construct()
    {
        $this->produto = new Produto();
    }

    public function buscarTexto()
    {
        $listaProdutos = $this->produto->buscarTexto($_POST['busca']);
        require "View/index.php";

    }

}
