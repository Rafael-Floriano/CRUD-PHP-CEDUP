<!doctype html>
<html lang="PT-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../../src/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../src/css/MenuEstilos.css">
    <link rel="stylesheet" href="../../src/css/style.css">

    <title>CRUD-Editar</title>
  </head>

  <?php
   include '../conexao.php';
   
   $id = $_GET['id'] ?? '';
   $sql= "SELECT * FROM tb_venda WHERE id_pedido=$id";
   $dados = mysqli_query($mysql,$sql);
   $linha= mysqli_fetch_assoc($dados);

  ?>
  <body class="fundoCadastro">

    <div class='conteiner'>
        <div class='row'>
            <div class='col'>    
             <h1>Editor de registros(Cidade)</h1>
             <form class='formulario' action="gravaCidade-edit.php" method='post'>
            
             <div class="mb-3">
                <label for="nm_produto" class="form-label" >Codigo do pedido</label>
                <input type="text" class="form-control" name="id_pedido" value="<?php echo $linha['id_pedido'] ?>">
             </div>
             <div class="mb-3">
                  <select name="id_cliente" class="form-select">
                    <option selected="selected">Clientes</option>
                    <?php
                      $sql = "SELECT * FROM tb_cliente";
                      $resultado = mysqli_query($mysql,$sql);
                      while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='$linha[id_cliente]'>$linha[nm_cliente]</option>";
                      }
                    ?>
                  </select>
               </div>
               <div class="mb-3">
                  <select name="id_vendedor" class="form-select">
                    <option selected="selected">Vendedores</option>
                    <?php
                      $sql = "SELECT * FROM tb_vendedor";
                      $resultado = mysqli_query($mysql,$sql);
                      while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='$linha[id_vendedor]'>$linha[nm_vendedor]</option>";
                      }
                  ?>
               </div>     
             <div class="mb-3">
               <input type="submit" class="btn btn-primary" value="Salvar Alterações">
               <a class="btn btn-info" href="../Menu/index.php" role="button">Voltar para Início</a>
             </div>       
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