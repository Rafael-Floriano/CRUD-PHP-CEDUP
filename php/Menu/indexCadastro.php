<!doctype html>
<html lang="PT-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../../src/css/bootstrap.min.css" rel="stylesheet">
    <!-- Meu CSS -->
    <link rel="stylesheet" href="../../src/css/MenuEstilos.css">
    <link rel="stylesheet" href="../../src/css/style.css">

    <title>CRUD-Cadastro</title>
  </head>
  <body>
    <div class='conteiner'>
      <div class='row'>
        <div class='col'>    
          <div class="jumbotron Menu">
            <div class="texto-Menu">
              <h1 class="display-4 titulo">Cadastros</h1>
              <p>Escolha o que você quer cadastrar:</p>
            </div>
            <div class= "opcoes-Menu">
              <a class="btn btn-primary btn-lg btn-funcao" href="../produto/cadastro.php" role="button">Produtos</a>
              <a class="btn btn-primary btn-lg btn-funcao" href="../grupo/cadastroGrupo.php" role="button">Categorias</a>
              <a class="btn btn-primary btn-lg btn-funcao" href="../cidade/cadastroCidade.php" role="button">Cidades</a>
              <a class="btn btn-primary btn-lg btn-funcao" href="../cliente/cadastroCliente.php" role="button">Clientes</a>
              <a class="btn btn-primary btn-lg btn-funcao" href="../fornecedor/cadastroFornecedor.php" role="button">Fornecedores</a>
              <a class="btn btn-info botao-voltar" href="../Menu/index.php" role="button">Voltar para Início</a>
            </div>
          </div>
        </div>
      </div>
    </div> 

  </body>
</html>