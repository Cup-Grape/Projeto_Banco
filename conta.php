<?php
class conta
{
    private $user = "root";
    private $password = "";
    private $database = "banco";
    private $hostname = "localhost";
    private $conexao;


    private $nome;
    private $email;
    private $senha;

    function cadastro($nome, $email,$senha)
    {
        $conta = new conta;
        $conta->conexao = mysqli_connect($conta->hostname, $conta->user, $conta->password, $conta->database) or die("Erro na conexão");
        mysqli_select_db($conta->conexao, $conta->database) or die("Erro na conexão");

        $saldo = 0.00;
        $comandosql = "INSERT INTO conta (nome, email, senha, saldo) VALUES ('$nome', '$email', '$senha', '$saldo')";
        mysqli_select_db($conta->conexao, $conta->database) or die("erro na conexão com database");
        if (mysqli_query($conta->conexao, $comandosql)) {
            echo "Cadastro concluido";
        } else {
            echo "Erro! Dados não enviado";
        }
    }
}
