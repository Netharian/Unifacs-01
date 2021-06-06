<?php

require 'ProdutoDAO.php';

class Produto
{
    private $id;
    private $name;
    private $price;
    private $type;
    private $description;
    private $image;
    private $promo;

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

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

    }

    public function getPromo()
    {
        return $this->promo;
    }

    public function setPromo($promo)
    {
        $this->promo = $promo;

    }

    public function listarTodos()
    {
        $produtoDAO = new ProdutoDAO();
        return $produtoDAO->listarTodos();
    }
    public function listarTipo($tipo)
    {
        $produtoDAO = new ProdutoDAO();
        return $produtoDAO->listarTipo($tipo);
    }
    public function buscarTexto($texto)
    {
        $produtoDAO = new ProdutoDAO();
        return $produtoDAO->buscarTexto($texto);

    }
}
