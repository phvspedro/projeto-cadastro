<?php
require 'config.php';
session_start();

if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
    header("Location: login.php");
}

?>

<html>
    <head>
        
        <meta name="viewport" content="width=device,initial-scale=1,shrink-to-fit=no"/>

        <link rel="stylesheet" href="css/bootstrap.css"/>
    </head>

    <body >
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adicionar.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editar.php">Listar Usuários</a>
                    </li>
                    <li class="nav-item justify-content-end">
                        <a class="nav-link" href="sair.php">Sair</a>
                    </li>
                </ul>
            </nav>
            
        <div class="container mt-5">
            <table class="table table-hover" width="100%">
            <thead class="table-striped">
                <tr>
                    <th>Nome</th>
                    <th class="">Email</th>
                    <th>Ações</th>
                </tr>
            </thead>

    <?php

    $sql = "SELECT * FROM user";
    $sql = $pdo->query($sql);

   if($sql->rowCount() > 0){

    foreach($sql->fetchAll() as $usuarios){
        echo '<tr >';
        echo '<td >'.$usuarios['nome'].'</td>';
        echo '<td>'.$usuarios['email'].'</td>';
        echo '<td><a href="editar.php?id='.$usuarios['id'].'">Editar</a> - <a href="excluir.php?id='.$usuarios['id'].'">Excluir</a></td>';
        echo '</tr>';

    }

   }
?>

</table> 
  </div>
       <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

    </body>

</html>