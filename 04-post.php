<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulaire d'inscription</h1>

    <form method="POST">

        <div>

            <label for="nom">
                Nom :
            </label>

            <input type="text" id="nom" name="nom" required>

        </div>

        <br>

        <div>

            <label for="email">
                Email :
            </label>

            <input type="email" id="email" name="email" required>

        </div>

        <br>

        <div>

            <label for="age">
                Âge :
            </label>

            <input type="number" id="age" name="age" min="1" required>

        </div>

        <br>
<div>

            <label for="ville">
                ville
            </label>

            <input type="text" id="ville" name="ville" min="1" required>

        </div>

        <br>
        <div>

            <label for="message">
                Message :
            </label>

            <br>

            <textarea id="message" name="message" rows="4" cols="40"></textarea>

        </div>

        <br>

        <button type="submit">
            Envoyer
        </button>

    </form>
    <?php
    if (
        isset($_POST["nom"])
        && isset($_POST["email"])
        && isset($_POST["age"])
        && isset($_POST["message"])
        && isset($_POST["ville"])
    ) {
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $message = $_POST["message"];
        $message = $_POST["message"];
        $ville = $_POST["ville"];
        echo "<hr/>";
        echo "<h2> donnée recue du formulaire </h2> <br/>";
        echo "votre nom " . htmlspecialchars($nom) ."<br/>";
        echo "vous avez " . htmlspecialchars($age) . "ans <br/>";
        echo "votre email est " . htmlspecialchars($email). "<br/>";
        echo "Message : " . htmlspecialchars($message);
        echo "<p>";
        echo "votre ville est " . $ville;
        echo  "</p>";
    } 


    ?>

</body>

</html>