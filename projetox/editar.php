<?php
require 'config.php';
session_start();

if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
    header("Location: login.php");
}



$id = 0;

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = addslashes($_GET['id']);
}

if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $end = addslashes($_POST['end']);

    $sql = "UPDATE user SET nome ='$nome', email = '$email', end = '$end' WHERE id = '$id'";
    $pdo->query($sql);

    header("Location: listagem.php");
}

$sql = "SELECT * FROM user WHERE id = '$id'";
$sql = $pdo->query($sql);
if ($sql->rowCount()>0) {
    $dado = $sql->fetch();
}else{
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
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adicionar.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editar.php">Listar Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sair.php">Sair</a>
                    </li>
                </ul>
            </nav>
        <div class="container mt-5">

            <h2 class="h2 mb=4 mt-3 text-center"> Editar usuário</h2>

            <form method="POST" >

            Nome:<br/>
            <input type="text" name="nome" style=" max-width: 250px;" class="form-control mx-sm-3" value="<?php echo $dado['nome']; ?>"/><br/>
            E-mail:<br/>
            <input type="text" name="email" style=" max-width: 250px;" class="form-control mx-sm-3" value="<?php echo $dado['email']; ?>"/><br/>
            Endereço:<br/>
            <input type="text" name="end" style=" max-width: 250px;" class="form-control mx-sm-3 " value="<?php echo $dado['end']; ?>"/><br/><br/>

            <input type="submit" class="btn btn-warning" value="Atualizar" /><br/>

            </form>
        </div>


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

    </body>

</html>
