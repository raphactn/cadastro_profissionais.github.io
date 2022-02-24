<?php

if(isset($_POST['submit']))
{

    include_once('config.php');


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $lagradouro = $_POST['lagraouro'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $estado = $_POST['estado'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,cep,cidade,lagradouro,bairro,numero,estado) 
    VALUES ('$nome','$email','$telefone','$cep','$cidade','$lagradouro','$bairro','$numero','$estado')");
    
}

?>
