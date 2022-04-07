<?php


include('conta.php');
$conta = new conta;


$nome = strval($_POST['nome']);
$email = strval($_POST['email']);
$senha = strval($_POST['senha']);

if(isset($_POST['cadastrar'])){
    $conta -> cadastro($nome,$email,$senha);
}



?>