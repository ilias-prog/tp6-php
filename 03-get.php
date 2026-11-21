<?php 
$nom = "ilias";
if(isset($_GET["nom"])){
    $nom = $_GET["nom"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if($nom != "" ){
    echo "<p> bonjour ". $nom. "</p>";
    }else{
        echo "<p> aucun nom recue</p>";
    }
    ?>
</body>
</html>