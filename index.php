<?php

//testa a variável url que veio lá do htaccess
if (isset($_GET['url'])) //se estiver preenchida, pega o valor
{
    $url = strtoupper($_GET['url']);
    // echo $url;
    switch ($url) {
        case "RASTREIO":
            require "Controller/ControladorRastreio.php";
            $controlador = new ControladorRastreio();
            $controlador->processaRequisicao();
            break;
        case "NOVOCLIENTE":
            require "Controller/ControladorLogin.php";
            $controlador = new ControladorLogin();
            $controlador->cadastrar();
            break;
        case "DESLOGAR":
            require "Controller/ControladorLogin.php";
            $controlador = new ControladorLogin();
            $controlador->deslogar();
            break;
        case "MEUPERFIL":
            require "Controller/ControladorPerfil.php";
            $controlador = new ControladorPerfil();
            $controlador->processaRequisicao();
            break;
        case "EXCLUIRPRODUTO":
            require "Controller/ControladorExcluirProduto.php";
            $controlador = new ControladorLivroExcluir();
            $controlador->processaRequisicao();
            break;
        case "LISTARPRODUTOS":
            require "Controller/ControladorHomePage.php";
            $controlador = new ControladorHomePage();
            $controlador->processaRequisicao();
            break;
        case "MONITORES":
            require "Controller/ControladorHomePage.php";
            $controlador = new ControladorHomePage();
            $controlador->processaRequisicaoMonitores();
            break;
        case "PROCESSADORES":
            require "Controller/ControladorHomePage.php";
            $controlador = new ControladorHomePage();
            $controlador->processaRequisicaoProcessadores();
            break;
        case "PLACASDEVIDEO":
            require "Controller/ControladorHomePage.php";
            $controlador = new ControladorHomePage();
            $controlador->processaRequisicaoPDV();
            break;
        case "PLACASMAE":
            require "Controller/ControladorHomePage.php";
            $controlador = new ControladorHomePage();
            $controlador->processaRequisicaoPM();
            break;
        case "MEMORIASRAM":
            require "Controller/ControladorHomePage.php";
            $controlador = new ControladorHomePage();
            $controlador->processaRequisicaoMemRAM();
            break;
        case "LOGIN":
            require "Controller/ControladorLogin.php";
            $controlador = new ControladorLogin();
            $controlador->processaRequisicao();
            break;
        case "CARRINHO":
            require "Controller/ControladorCarrinho.php";
            $controlador = new ControladorCarrinho();
            $controlador->processaRequisicao();
            break;
        case "BUSCAR":
            require "Controller/ControladorBusca.php";
            $controlador = new ControladorBusca();
            $controlador->buscarTexto();
            break;
        case "LOGAR":
            require "Controller/ControladorLogin.php";
            $controlador = new ControladorLogin();
            $controlador->login();
            break;
        case "FINALIZARPEDIDO":
            require "Controller/ControladorPedido.php";
            $controlador = new ControladorPedido();
            $controlador->processaRequisicao();
            break;
        default:
            require "Controller/ControladorHomePage.php";
            $controlador = new ControladorHomePage();
            $controlador->processaRequisicao();
            break;

    }

} else //senão, vai para uma página padrão, neste caso a home do site
{
    $url = '404.php';
}
