<?php
require "Conexao.php";

class ProdutoDAO
{
    public function listarTodos()
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from compracerta.products");

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

            $listaProdutos = array();
            $i = 0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $produto = new Produto();
                $produto->setId($linha['idProducts']);
                $produto->setName($linha['name']);
                $produto->setType($linha['type']);
                $produto->setImage($linha['image']);
                $produto->setPromo($linha['promo']);
                $produto->setPrice($linha['price']);

                $listaProdutos[$i] = $produto;
                $i++;
            }
            return $listaProdutos;

        } catch (PDOException $e) {
            return array();
        }
    }

    public function listarTipo($tipo)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from compracerta.products where type = '$tipo'");

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

            $listaProdutos = array();
            $i = 0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $produto = new Produto();
                $produto->setId($linha['idProducts']);
                $produto->setName($linha['name']);
                $produto->setType($linha['type']);
                $produto->setImage($linha['image']);
                $produto->setPromo($linha['promo']);
                $produto->setPrice($linha['price']);

                $listaProdutos[$i] = $produto;
                $i++;
            }
            return $listaProdutos;

        } catch (PDOException $e) {
            return array();
        }
    }

    public function buscarTexto($texto)
    {
        try {
            $minhaConexao = Conexao::getConexao();
            $sql = $minhaConexao->prepare("select * from compracerta.products where type like '%$texto%'");

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

            $listaProdutos = array();
            $i = 0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $produto = new Produto();
                $produto->setId($linha['idProducts']);
                $produto->setName($linha['name']);
                $produto->setType($linha['type']);
                $produto->setImage($linha['image']);
                $produto->setPromo($linha['promo']);
                $produto->setPrice($linha['price']);

                $listaProdutos[$i] = $produto;
                $i++;
            }
            return $listaProdutos;

        } catch (PDOException $e) {
            return array();
        }
    }
}
