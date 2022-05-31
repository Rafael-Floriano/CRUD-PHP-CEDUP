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

    <title>CRUD-Cadastro</title>
  </head>
  <body class="fundoCadastro">

    <div class='conteiner'>
        <div class='row'>
            <div class='col'>    
             <h1>Cadastro de Vendedor</h1>
             <form class='formulario' action="gravaVendedor.php" method='post'>
                
               <div class="mb-3">
                  <label for="nm_produto" class="form-label" >Id da venda</label>
                  <input type="text" class="form-control" name="id_venda">
               </div>
               <div class="mb-3">
                  <label for="nm_produto" class="form-label">Id do produto</label>
                  <input type="text" class="form-control" name="id_produto">
               </div>
               <div class="mb-3">
                  <label for="nm_produto" class="form-label" >Quantidade vendida</label>
                  <input type="text" class="form-control" name="qtdv">
               </div>
               <div class="mb-3">
                  <label for="nm_produto" class="form-label" >Preço da unidade</label>
                  <input type="text" class="form-control" name="preco_uni">
               </div>
               <div class="mb-3 d-flex align-items-center justify-content-end">
                  <button type="submit" class="btn btn-primary" style="margin-right:585px;">Enviar</button>
                  <a class="btn btn-primary" href="../Menu/index.php" role="button">Voltar para Início</a>         
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