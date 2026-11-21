<?php

if (
    isset($_POST["produit"])
    && isset($_POST["quantité"])
    && isset($_POST["prix"])
    && isset($_POST["categorie"])
) {

    $produit = $_POST["produit"];
    $quantité = $_POST["quantité"];
    $prix = $_POST["prix"];
    $categorie = $_POST["categorie"];
    if (
        $produit != ""
        && $prix > 0
        && $quantité > 0
    ) {
        $total =  $prix * $quantité ;

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

            <label for="quantité">
                Quantité :
            </label>

            <input type="number" id="quantité" name="quantité" min="1" required><br><br>
            <label for="categorie">
                catégorie :
            </label>

            <input type="text" id="categorie" name="categorie" min="1" required>

        </div>

        <br>

        <button type="submit">
            Calculer
        </button>

    </form>

<hr>
 


   

        <h2>Informations du produit</h2>

        <p>
            Produit :
            <?php echo htmlspecialchars($produit); ?>
        </p>

        <p>
            Prix :
            <?php echo htmlspecialchars($prix); ?>
            DH
        </p>

        <p>
            Quantité :
            <?php echo htmlspecialchars($quantité); ?>
        </p>

        <p>
            categorie :
            <?php echo htmlspecialchars($categorie); ?>

        </p>
        <p>
            Total :
            <?php echo htmlspecialchars($total); ?>
            DH
        </p>

        
</body>

</html>