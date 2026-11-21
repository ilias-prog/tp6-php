<?php
$nom = "ilias";
$age = 21;
$ville = "marrakech";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php et html</title>
</head>
<body>
    <h1>Mon profil</h1>
    <p>bonjour <?php echo $nom; ?></p>
    <p>votre age est <?php echo $age; ?> ans</p>
    <p>vous habitez à <?php echo $ville; ?></p>
</body>
</html>