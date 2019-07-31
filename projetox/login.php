<?php
require 'config.php';
session_start();


if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

$sql = $pdo->query("SELECT * FROM user WHERE email ='$email' AND senha ='$senha'");

if ($sql->rowCount() > 0) {
    
    $dado = $sql->fetch();

    $_SESSION['id'] = $dado['id'];

    header("Location: index.php");

} else {
   echo "não achei";
}
}
?>


<!doctype html>
<html>
    <head>
        
        <meta name="viewport" content="width=device,initial-scale=1,shrink-to-fit=no"/>

        <link rel="stylesheet" href="css/bootstrap.css"/>
    </head>
 
    <body>
        <div class="container col-6">  
        <h2 class="text-center mt-5">Gerenciar usuarios</h2>
            <form method="POST" class="text-center" style="margin: 20%">

                E-mail:<br/>
                <input type="email" name="email"  placeholder="E-mail" class="form-control "  /><br/><br/>
                Senha:<br/> 
                <input type="text" name="senha" style="max-width:200px; min-width:200px; margin-left: 32%" placeholder="Senha" class="form-control"/><br/><br/>

                <input type="submit" value="Entrar" class="btn btn-primary" /><br/>

            </form>
        </div>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

    </body>

</html>
