<?php
require 'config.php';
session_start();

if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
    header("Location: login.php");
}


if(isset($_POST['nome']) && !empty($_POST['nome']) &&
 isset($_POST['email']) && !empty($_POST['email']) &&
 isset($_POST['senha']) && !empty($_POST['senha'])){

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    $end = addslashes($_POST['end']);

    $sql = "INSERT INTO user SET nome ='$nome', email = '$email', senha = '$senha', end = '$end' ";
    $pdo->query($sql);
    header("Location: listagem.php");
    
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
                        <a class="nav-link" href="index.php">Home</a>
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
        <div class="container mt-5">

        <h2 class="h2 mb=4 mt-3 text-center"> Cadastrar usuário</h2>

        <form method="POST">

            Nome:<br/>
            <input type="text" class="form-control col-2" name="nome" /><br/>
            E-mail:<br/>
            <input type="text" class="form-control col-2" name="email" /><br/>
            Senha:<br/> 
            <input type="text" class="form-control col-2" name="senha" /><br/>
            Endereço:<br/>
            <input type="text" class="form-control col-2" name="end" /><br/><br/>

            <input type="submit" class="btn btn-warning" value="Cadastrar" /><br/>

        </form>
        </div>


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

    </body>

</html>
