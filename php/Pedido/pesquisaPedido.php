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
                        <a class="navbar-brand">Tabela das Pedido</a>
                        <form class="d-flex" action="./pesquisaPedido.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Id do pedido" aria-label="Search" name="busca" autofocus>
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>
                <table id='tabela-pesquisa' class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Código do pedido</th>
                            <th scope="col">Nome do Cliente</th>
                            <th scope="col">Nome do Vendedor</th>
                            <th colspan="2">Funções</th>                    
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include '../conexao.php';

                        $sql="SELECT ped.id_pedido, cli.nm_cliente, ved.nm_vendedor FROM tb_venda ped INNER JOIN tb_cliente cli 
                        ON ped.fk_id_cliente = cli.id_cliente INNER JOIN tb_vendedor ved ON ved.id_vendedor = ped.fk_id_vendedor WHERE ped.id_pedido LIKE '%$pesquisa%'";

                        $dados = mysqli_query($mysql,$sql);
                        $linha=mysqli_fetch_assoc($dados);

                        if($linha == 1){
                            $linha ="";
                        }elseif ($linha == 0) {
                            echo "<tr>
                                <td>Sem registros</td>
                                <td>Sem registros</td>
                                <td>Sem registros</td>
                                <td><a href='#' class='btn btn-warning'>Indisponível</a> 
                                <td><a href='#' class='btn btn-warning'>Indisponível</a>
                                </tr>";  
                        }
                        
                        $dados = mysqli_query($mysql,$sql);

                        while ($linha=mysqli_fetch_assoc($dados)) {
                            $id_pedido=$linha['id_pedido'];
                            $nm_cliente=$linha['nm_cliente'];
                            $nm_vendedor=$linha['nm_vendedor'];

                        echo "<tr>
                            <td style='color: #ffc107;'>$id_pedido</td>
                            <td style='color: #ffc107;'>$nm_cliente</td>
                            <td style='color: #ffc107;'>$nm_vendedor</td>
                            <td><a href='editarPedido.php?id=$id_pedido' class='btn btn-success'>Editar</a> 
                            <td><a href='excluirPedido.php?id=$id_pedido' class='btn btn-danger'>Excluir</a>
                            </tr>";
                        }

                        ?>         
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <a class="btn btn-primary" href="./cadastroPedido.php" role="button">Cadastrar Pedidos</a>
            <a id="btn-voltar" class="btn btn-info" href="../Menu/index.php" role="button" style="margin:0 0 0 20px;">Voltar para Início</a> 
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