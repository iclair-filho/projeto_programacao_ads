<?php

include 'conexao.php';

$id = $_POST['id'];
//$nrprodutos = $_POST['nrlivro'];
$nomelivro = $_POST['nomelivro'];
$genero = $_POST['genero'];
$autor = $_POST['autor'];

$sql = "UPDATE `estoque` SET `nomelivro`='$nomelivro',`genero`='$genero',`autor`='$autor' WHERE id_estoque = $id";
$atualizar = mysqli_query($conexao,$sql)


?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class="container" style="width: 400px;">
    <center>
        <h3>Atualizado com sucesso</h3>
        <div style="margin-top: 10px">
            <a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
        </div>
    </center>
</div>