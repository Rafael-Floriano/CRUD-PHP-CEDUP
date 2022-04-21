<!doctype html>
<html lang="PT-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../../src/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../src/css/style.css">

    <title>CRUD-UPDATE</title>
  </head>
  <body>

    <div class='conteiner'>
        <div class='row'>
            <div class='col'>    
                <?php
                    include "../conexao.php";
                    $id_produto = $_POST['id_produto'];
                    $nm_produto = $_POST['nm_produto'];
                    $valorCompra = $_POST['valorCompra'];
                    $valorVenda = $_POST['valorVenda'];
                    $obs = $_POST['obs'];
                    $id_grupo = $_POST['id_grupo'];
                    echo "$id_grupo";
                    echo "$nm_produto";
                    echo "$valorCompra";
                    echo "$valorVenda";
                    echo "$obs";
                    echo "$id_produto";


                    $sql="UPDATE tb_produto SET nm_produto='$nm_produto',valorCompra=$valorCompra,
                    valorVenda=$valorVenda,obs='$obs',fk_id_grupo=$id_grupo WHERE id_produto=$id_produto";

                    if (mysqli_query($mysql,$sql)) {
                        mensagem("Produto alterado com sucesso!!",'success');
                    } else {
                        mensagem("Não foi possivel alterar, tente novamente :(",'danger');
                    }

                ?>

                <a href="../Menu/index.php" class="btn btn-primary">Voltar</a>
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