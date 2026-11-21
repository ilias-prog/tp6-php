<?php 
$localhost = "localhost";
$username = "root"; 
$password = "";
$dbname= "tp-php";
try{


    $pdo = new PDO( "mysql:host=$host; dbname=$dbname; charset=utf8mb4 ",
    $username, 
    $password);
    
$pdo->setAttribute(
     PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
);
}catch(PDOException $e){
    die("erreur de conexion:" . $e->getMessage());
}

?>