<?php

require_once "06-conexion.php";

$sql = "SELECT * FROM products where prix > 300";

$statement = $pdo->query($sql);

$products = $statement->fetchAll(
    PDO::FETCH_ASSOC
);

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>Liste des produits</title>

</head>

<body>

    <h1>Liste des produits</h1>

    <?php

    if (count($products) > 0) {

        foreach ($products as $product) {

    ?>

            <div>

                <h2>
                    <?php
                    echo htmlspecialchars(
                        $product["name"]
                    );
                    ?>
                </h2>

                <p>

                    Prix :

                    <?php
                    echo $product["prix"];
                    ?>

                    DH

                </p>

                <p>

                    Quantité :

                    <?php
                    echo $product["quantité"];
                    ?>

                </p>

            </div>

            <hr>

    <?php

        }

    } else {

        echo "<p>Aucun produit trouvé.</p>";

    }

    ?>

</body>

</html>


