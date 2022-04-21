<!doctype html>
<html lang="PT-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../../src/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../src/css/style.css">

    <title>CRUD-Cadastro</title>
  </head>
  <body>

    <div class='conteiner'>
        <div class='row'>
            <div class='col'>    
                <?php
                    include "../conexao.php";

                    $nm_cliente = $_POST['nm_cliente'];
                    $cpf_cliente = $_POST['cpf_cliente'];
                    $fk_id_cidade = $_POST['fk_id_cidade'];


                    $sql="INSERT INTO tb_cliente(nm_cliente, cpf_cliente, fk_id_cidade) 
                    VALUES ('$nm_cliente','$cpf_cliente','$fk_id_cidade')";

                    $hack = "SET FOREIGN_KEY_CHECKS=0";
                    mysqli_query($mysql,$hack);
                    $hackcancel = "SET FOREIGN_KEY_CHECKS=1";
                    if (mysqli_query($mysql,$sql)) {
                        mensagem("Cliente cadastrado com sucesso!!",'success');
                        mysqli_query($mysql,$hackcancel);
                    } else {
                        mensagem("O cadastro não pode ser feito, tente novamente :(",'danger');
                    }

                ?>

                <a href="./pesquisaCliente.php" class="btn btn-primary">Voltar</a>
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