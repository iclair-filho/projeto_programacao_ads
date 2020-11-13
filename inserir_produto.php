<?php
include 'conexao.php';

$nrolivro = $_POST['nrolivro'];
$nomelivro = $_POST['nomelivro'];
$genero = $_POST['genero'];
$autor = $_POST['autor'];

$sql = "INSERT INTO `estoque`(`nrlivro`, `nomelivro`, `codgenero`, `codautor`) VALUES ($nrolivro,'$nomelivro','$genero','$autor')";
$inserir = mysqli_query($conexao,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container" style="width: 500px; margin-top: 20px">
    <center>
        <h4>Produto Adicionado com Sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
    <center>
        <a href="adicionar_produto.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo ítem</a>
    </center>
    </div>
</div>