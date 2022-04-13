<!doctype html>
<html lang="PT-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../../src/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../src/css/style.css">

    <title>CRUD-Editar</title>
  </head>

  <?php
   include '../conexao.php';
   
   $id = $_GET['id'] ?? '';
   $sql= "SELECT * FROM tb_grupo WHERE id_grupo=$id";
   $dados = mysqli_query($mysql,$sql);
   $linha= mysqli_fetch_assoc($dados);

  ?>
  <body>

    <div class='conteiner'>
        <div class='row'>
            <div class='col'>    
             <h1>Editando</h1>
             <form class='formulario' action="gravaGrupo-edit.php" method='post'>
            
             <div class="mb-3">
                <label for="nm_produto" class="form-label" >Id do grupo</label>
                <input type="text" class="form-control" name="id_grupo" value="<?php echo $linha['id_grupo'] ?>">
             </div>
             <div class="mb-3">
                <label for="valorCompra" class="form-label">Nome do Grupo</label>
                <input type="text" class="form-control" name="nm_grupo" value="<?php echo $linha['nm_grupo'] ?>">
             </div>      
             <div class="mb-3">
               <button type="submit" class="btn btn-primary">Salvar Alterações</button>
             </div>       
             <a class="btn btn-info" href="../Menu/index.php" role="button">Voltar para Início</a>
             </form>
            </div>
        </div>
    </div>  




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>