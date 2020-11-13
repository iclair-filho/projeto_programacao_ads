<?php

include 'conexao.php';
$id = $_GET['id'];

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/111db99c8a.js" crossorigin="anonymous"></script>
    <title>Editar produtos</title>

  </head>
  <body>
    <div class="container" id="tamanhoContainer">
      <h4>Formulário de Edição</h4>
      <form action="atualizar_produto.php" method="POST" style="margin-top: 20px;" >
      <?php 
        require_once 'consulta/consulta_edita.php';


      ?>
          <div class="form-group">
              <label>Nro do Livro</label>
              <input type="number" class="form-control" name="nrolivro" value="<?php echo $nrprodutos ?>" disabled>
              <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
          </div>
          <div class="form-group">
              <label>Nome do Livro</label>
              <input type="text" class="form-control" name="nomelivro"  value="<?php echo $nomelivro ?>">
          </div>
          <div class="row">
        <div class="col">
          <div class="form-group">
                  <label>Gênero</label>
                  <select class="form-control" name="genero"><option value="">Selecione o Gênero</option>
                  <?php
                  
                  $sql = "SELECT * from generos";
                  $busca = mysqli_query($conexao, $sql);

                                  
                      while ($linha = mysqli_fetch_assoc($busca)) {
                          $cod_genero = $linha["cod"];
                          $genero = $linha["genero"];
                          echo "<option value='$cod_genero'>$genero</option>";

                      }
                
                  ?>  
                  
                </select>
            </div>
        </div>
        <div class="col">
          <div class="form-group">
                  
                  <label>Autor</label>
                  <select class="form-control" name="autor"><option value="">Selcione o Autor</option>
                    <?php
                  
                  $sql2 = "SELECT * FROM autor";
                  $busca2 = mysqli_query($conexao,$sql2);

                                  
                      while ($linha = mysqli_fetch_assoc($busca2)) {
                          $cod_autor = $linha["cod"];
                          $autor = $linha["autor"];
                          echo "<option value='$cod_autor'>$autor</option>";

                      }
                
                  ?> 
                    
                  
                  
                  </select>
          </div>
        </div>
      </div>



          <div style="text-align: right;">
            <button type="submit" id="botao"class="btn btn-small">Atualizar</button>
          </div>
          
      </form>
    </div>    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>