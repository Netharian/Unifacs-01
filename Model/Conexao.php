<?php
class Conexao
{
    public static function getConexao()
    {
        $servername = "localhost:3306";
        $username = "root";
        $password = "123456";
        $dbname = "compracerta";

        try {
            $minhaConexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $minhaConexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $minhaConexao;
        } catch (PDOException $e) {
            echo "entrou no catch" . $e->getMessage();
            return null;
        }
    }

}
