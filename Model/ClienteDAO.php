<?php
//require "Conexao.php";

class ClienteDAO
{

    public function cadastrar($cliente)
    {
        $name = $cliente->getName();
        $email = $cliente->getEmail();
        $password = $cliente->getPassword();
        $rg = $cliente->getRg();
        $cpf = $cliente->getCpf();
        $celphone = $cliente->getCelphone();
        $telephone = $cliente->getTelephone();

        $strcon = mysqli_connect('localhost:3306', 'root', '123456', 'compracerta');

        $sql = "SELECT * from compracerta.clients where email='$email' "; //selecionar tudo da tabela quando o email for igual ao $email
        $query = mysqli_query($strcon, $sql); //executa o query
        $busca = mysqli_num_rows($query); //pega o total das linhas encontradas

        if (($busca) == '0') { //verifica se existe alguma linha com o $email, caso não registra
            $sql = "INSERT INTO compracerta.clients (name, email, password, cpf, rg, telephone, celphone) VALUES ('$name', '$email', '$password', '$cpf', '$rg', '$telephone', '$celphone')";
        } else {
            echo "<script language='javascript' type='text/javascript'>
                alert('Esse email já está registrado, tente outro.');window.location
                .href='./login';</script>";
        }
        mysqli_query($strcon, $sql) or die("Erro ao cadastrar");
        mysqli_close($strcon);

        echo "<script language='javascript' type='text/javascript'>
                alert('Cadastrado com sucesso');window.location
                .href='./login';</script>";

    }

    public function login($cliente)
    {

        $email = $cliente->getEmail();
        $password = $cliente->getPassword();

        $strcon = mysqli_connect('localhost:3306', 'root', '123456', 'compracerta');

        $sql = "SELECT * from compracerta.clients where email='$email' AND password = '$password' "; //selecionar tudo da tabela quando o email for igual ao $email
        $query = mysqli_query($strcon, $sql); //executa o query
        $busca = mysqli_num_rows($query);

        if (($busca) == '0') { //verifica se existe alguma linha com o $email, caso não registra
            echo "<script language='javascript' type='text/javascript'>
                alert('Email ou senha informada está incorreto.');window.location
                .href='./login';</script>";

        } else {
            echo "<script language='javascript' type='text/javascript'>
                alert('Login efetuado com sucesso');window.location
                .href='./index';</script>";

            session_start();
            $_SESSION['usuario'] = $email;

            mysqli_close($strcon);

        }

    }

    public function deslogar($cliente)
    {

        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
        }

        session_destroy();

    }

    // public function cadastrar($cliente)
    // {
    //     try {
    //         $minhaConexao = Conexao::getConexao();

    //         $sql = $minhaConexao->prepare("insert into compracerta.clients (name, email, rg, cpf, celphone, telephone) values (:name, :email, :rg, :cpf, :celphone, :telephone)");
    //         $sql->bindParam("name", $name);
    //         $sql->bindParam("email", $email);
    //         $sql->bindParam("rg", $rg);
    //         $sql->bindParam("cpf", $cpf);
    //         $sql->bindParam("celphone", $celphone);
    //         $sql->bindParam("telephone", $telephone);
    //         $name = $cliente->getName();
    //         $email = $cliente->getEmail();
    //         $rg = $cliente->getRg();
    //         $cpf = $cliente->getCpf();
    //         $celphone = $cliente->getCelphone();
    //         $telephone = $cliente->getTelephone();

    //         $sql->execute();
    //         //echo "incluido com sucesso";
    //         $last_id = $minhaConexao->lastInsertId();
    //         $cliente->setId($last_id);
    //         //echo "o numero gerado foi ",$last_id;
    //         return $last_id;
    //         echo "Cadastro realizado com sucesso";

    //     } catch (PDOException $e) {
    //         return "erro no cadastro" . $e->getmessage();
    //         return 0;
    //     }
    // }
}
