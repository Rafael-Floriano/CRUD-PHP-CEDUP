<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "301internet";

    $mysql = mysqli_connect($server,$user,$password,$database);

    if($mysql) {
        //echo "Conectado!";
    } else {
    echo "Erro!";
    }

    function mensagem($texto,$tipo){
        echo "<div class='alert alert-$tipo' role='alert'>
            $texto
            </div>";
    }


?>