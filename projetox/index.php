<?php
require 'config.php';
session_start();

if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
    header("Location: login.php");
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8"/> 
        <meta name="viewport" content="width=device,initial-scale=1,shrink-to-fit=no"/>

        <link rel="stylesheet" href="css/bootstrap.css"/>
    </head>

    <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adicionar.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editar.php">Editar</a>
                    </li>
                    <li class="nav-item justify-content-end">
                        <a class="nav-link" href="sair.php">Sair</a>
                    </li>
                </ul>
            </nav>
            
            <h1 class="h1 text-center mt-5 mb-2">Seja bem-vindo!</h1>
            <h3 class="h3 text-center">No menu você será direcionado as funcionalidades desse sistema.</h3>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

    </body>

</html>