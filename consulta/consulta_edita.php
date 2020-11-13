<?php
$sql = "SELECT e.id_estoque, e.nrlivro, e.nomelivro, e.codgenero, g.genero, e.codautor, a.autor FROM estoque e join generos g on e.codgenero = g.cod JOIN autor a on e.codautor = a.cod WHERE id_estoque = $id";
        
$buscar = mysqli_query($conexao,$sql);
  while($linha = mysqli_fetch_assoc($buscar)){
      $id_estoque = $linha["id_estoque"];
      $nrprodutos = $linha["nrlivro"];
      $nomelivro = $linha["nomelivro"];
      $genero = $linha["genero"];
      $cod_genero = $linha["codgenero"];
      $autor = $linha["autor"];
      $cod_autor = $linha["codautor"];
  }
?>