<!doctype html>
<html lang="PT-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../../src/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../src/css/style.css">
    <link rel="stylesheet" href="../../src/css/pesquisa.css">

    <title>CRUD-PesquisaGrupo-Rafinha</title>
  </head>
  <body>

    <?php
    
    if (isset($_POST['busca'])) {
        $pesquisa = $_POST['busca'];
    } else {
        $pesquisa ='';
    }

    ?>


    <div class='conteiner'>
        <div class='row'>
            <div class='col'>    
                <h1>Pesquisar</h1>
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand">Tabela de produtos</a>
                        <form class="d-flex" action="./pesquisaCidade.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome do produto" aria-label="Search" name="busca" autofocus>
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>
                <table id='tabela-pesquisa' class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id Cidade</th>
                            <th scope="col">Nome da cidade</th>
                            <th scope="col">UF da cidade</th>
                            <th scope="col">Funções</th>                    
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include '../conexao.php';

                        $sql="SELECT * FROM tb_cidade WHERE nm_cidade LIKE '%$pesquisa%'";

                        $dados = mysqli_query($mysql,$sql);

                        while ($linha=mysqli_fetch_assoc($dados)) {
                            $id_cidade=$linha['id_cidade'];
                            $nm_cidade=$linha['nm_cidade'];
                            $uf_cidade=$linha['uf_cidade'];

                        echo "<tr>
                            <td>$id_cidade</td>
                            <td>$nm_cidade</td>
                            <td>$uf_cidade</td>
                            <td><a href='editarCidade.php?id=$id_cidade' class='btn btn-success'>Editar</a> 
                            <td><a href='excluirCidade.php?id=$id_cidade' class='btn btn-danger'>Excluir</a>
                            </tr>";
                        }

                        ?>         
                    </tbody>
                </table>
            </div>
        </div>
        <a id="btn-voltar" class="btn btn-info" href="../Menu/index.php" role="button">Voltar para Início</a>     
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