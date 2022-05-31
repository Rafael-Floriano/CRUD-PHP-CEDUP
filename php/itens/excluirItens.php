<!doctype html>
<html lang="PT-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../../src/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../src/css/style.css">

    <title>CRUD-excluir</title>
  </head>
  <body>

    <div class='conteiner'>
        <div class='row'>
            <div class='col'>    
                    
                    <?php 

                    include '../conexao.php';

                    $id = $_GET['id'] ?? '';

                    $sql = "DELETE FROM tb_itens_venda WHERE id_itens_venda=$id";

                    $dados=mysqli_query($mysql,$sql);

                    if ($dados) {
                        mensagem('Dados deletados com sucesso','success');
                    }else{
                        mensagem('Não conseguimos deletar os dados, tente novamente mais tarde','danger');
                    }

                    header('location:pesquisaItens.php');

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

