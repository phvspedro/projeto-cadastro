<?php
require 'config.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = addslashes($_GET['id']);

    $sql = "DELETE FROM user WHERE id = '$id'";
    $pdo->query($sql);

    header("Location: listagem.php");

} else{
    header("Location: listagem.php");
}


?>