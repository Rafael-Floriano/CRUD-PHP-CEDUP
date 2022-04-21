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

    <style>
        *{
            color:#FFFFFF;
            text-align:center;
        }
        body{
            background-color: #2c2f33;
        }
    </style>

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
            <nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand">Tabela de clientes</a>
                        <form class="d-flex" action="./pesquisaCliente.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Nome do cliente" aria-label="Search" name="busca" autofocus>
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>
                <table id='tabela-pesquisa' class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Código do Cliente</th>
                            <th scope="col">Nome do cliente</th>
                            <th scope="col">CPF do cliente</th>
                            <th scope="col">Cidade do Cliente</th>
                            <th colspan="2">Funções</th>                    
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include '../conexao.php';

                        $sql="SELECT cli.id_cliente,cli.nm_cliente,cli.cpf_cliente, ci.nm_cidade FROM tb_cliente cli INNER JOIN
                        tb_cidade ci ON cli.fk_id_cidade=ci.id_cidade WHERE nm_cliente LIKE '%$pesquisa%'";

                        $dados = mysqli_query($mysql,$sql);
                        $linha=mysqli_fetch_assoc($dados);

                        if($linha == 1){
                            $linha ="";
                        }elseif ($linha == 0) {
                            echo "<tr>
                                <td>Sem registros</td>
                                <td>Sem registros</td>
                                <td>Sem registros</td>
                                <td>Sem registros</td>
                                <td><a href='#' class='btn btn-warning'>Indisponível</a> 
                                <td><a href='#' class='btn btn-warning'>Indisponível</a>
                                </tr>";  
                        }
                        
                        $dados = mysqli_query($mysql,$sql);

                        while ($linha=mysqli_fetch_assoc($dados)) {
                            $id_cliente=$linha['id_cliente'];
                            $nm_cliente=$linha['nm_cliente'];
                            $cpf_cliente=$linha['cpf_cliente'];
                            $fk_id_cidade=$linha['nm_cidade'];


                        echo "<tr>
                            <td>$id_cliente</td>
                            <td>$nm_cliente</td>
                            <td>$cpf_cliente</td>
                            <td>$fk_id_cidade</td>
                            <td><a href='editarCliente.php?id=$id_cliente' class='btn btn-success'>Editar</a> 
                            <td><a href='excluirCliente.php?id=$id_cliente' class='btn btn-danger'>Excluir</a>
                            </tr>";
                        }

                        ?>         
                    </tbody>
                </table>
                <div class="d-flex align-items-center justify-content-center">
                    <a class="btn btn-primary" href="../cliente/cadastroCliente.php" role="button">Cadastro de Clientes</a>
                    <a id="btn-voltar" class="btn btn-info" href="../Menu/index.php" role="button" style="margin:0 0 0 20px;">Voltar para Início</a>
                </div>   
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