<?php

$dsn = "mysql:dbname=id10353953_p;host=localhost";
$dbuser = "id10353953_p";
$dbpass = "pedro101";
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){

    echo "falhou".$e->getMessage();

}
?>