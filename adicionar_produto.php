<?php
  include_once 'hearder.php';
  require_once 'conexao.php';
?>
  <div class="container" id="tamanhoContainer">
    <div style="text-align: right;">
      <a href="index.php" role="button" class="btn btn-small btn-primary">Voltar</a>
    </div>

            

    <h4>Formulário de Cadastro</h4>
    <form action="inserir_produto.php" method="POST" style="margin-top: 20px;">
      <div class="form-group">
        <label>Nro do Livro</label>
        <input type="number" class="form-control" name="nrolivro" placeholder="Insira o numero do livro" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label>Nome do Livro</label>
        <input type="text" class="form-control" name="nomelivro" placeholder="Insira o nome do livro" autocomplete="off" required>
      </div>
      <hr>
      <!-- <div class="form-group">
        <label>Gênero</label>
        <input type="text" class="form-control" name="genero" placeholder="Insira o gênero do livro" autocomplete="off" required>
      </div> -->
      <div class="row">
        <div class="col">
          <div class="form-group">
                  <select class="form-control" name="genero"><option value="undefined">Selecione o Gênero</option>
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
                    <select class="form-control" name="autor"><option value="undefined">Selecione o Autor</option>
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
      
      <!-- <div class="form-group">
        <label>Autor</label>
        <input type="text" class="form-control" name="autor" placeholder="Insira o autor do livro" autocomplete="off" required>
      </div> -->
      <div style="text-align: right;">
        <button type="submit" id="botao" class="btn btn-small">Cadastrar</button>
      </div>
    </form>
  </div>
<?php
  include_once 'footer.php';
?>