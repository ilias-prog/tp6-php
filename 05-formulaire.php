<?php
$produit = "";
$quantité = "";
$prix = "";
$message = "";
if (
    isset($_POST["produit"])
    && isset($_POST["quantité"])
    && isset($_POST["prix"])
) {

    $produit = $_POST["produit"];
    $quantité = $_POST["quantité"];
    $prix = $_POST["prix"];
    if (
        $produit != ""
        && $quantité > 0
        && $prix > 0
    ) {
        $totale = $quantité * $prix;
        $message = "produit traite avec succes";
    } else {
        $message = "veuillez saisir des donneés valides";
    }
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


    <h1>Ajouter un produit</h1>

    <form method="POST">

        <div>

            <label for="produit">
                Nom du produit :
            </label>

            <input type="text" id="produit" name="produit" required>

        </div>

        <br>

        <div>

            <label for="prix">
                Prix :
            </label>

            <input type="number" id="prix" name="prix" min="1" required>

        </div>

        <br>

        <div>

            <label for="quantite">
                Quantité :
            </label>

            <input type="number" id="quantite" name="quantite" min="1" required>

        </div>

        <br>

        <button type="submit">
            Calculer
        </button>

    </form>


    <?php

    if ($message != "") {

        echo "<hr>";

        echo "<h2>" . $message . "</h2>";

    }

    ?>


    <?php

    if (
        isset($total)
        && $message == "Produit traité avec succès."
    ) {

        ?>

        <h2>Informations du produit</h2>

        <p>
            Produit :
            <?php echo htmlspecialchars($produit); ?>
        </p>

        <p>
            Prix :
            <?php echo $prix; ?>
            DH
        </p>

        <p>
            Quantité :
            <?php echo $quantite; ?>
        </p>

        <p>
            Total :
            <?php echo $total; ?>
            DH
        </p>

        <?php

    }

    ?>

</body>

</html>