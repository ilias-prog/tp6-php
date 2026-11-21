# TP PHP

Projet pédagogique PHP regroupant plusieurs exercices de bases du langage, du traitement des formulaires HTML et de l'accès à une base de données MySQL avec PDO.

## Objectifs

Ce TP permet de pratiquer :

- l'affichage de texte et la manipulation de variables PHP ;
- l'intégration de PHP dans une page HTML ;
- la récupération de données avec `$_GET` et `$_POST` ;
- la validation de formulaires côté serveur ;
- la protection des sorties HTML avec `htmlspecialchars()` ;
- la connexion à MySQL avec PDO ;
- l'exécution de requêtes `SELECT` et l'affichage des résultats.

## Structure du projet

| Fichier | Description |
| --- | --- |
| `01-hello.php` | Premier programme PHP : affichage de texte, saut de ligne et heure du serveur. |
| `02-php-html.php` | Utilisation de variables PHP dans une page HTML représentant un profil. |
| `03-get.php` | Réception du paramètre `nom` via la méthode GET. |
| `04-post.php` | Formulaire d'inscription utilisant POST, avec affichage des données saisies. |
| `05-formulaire.php` | Formulaire de gestion d'un produit : nom, prix, quantité et calcul du total. |
| `database/06-conexion.php` | Configuration et création de la connexion PDO vers MySQL. |
| `database/07-select.php` | Récupération de tous les produits et affichage de leurs informations. |
| `database/dataBase.sql` | Emplacement prévu pour le script SQL du TP (actuellement vide). |

## Prérequis

- PHP 7 ou supérieur ;
- serveur web compatible PHP, comme Apache ou le serveur intégré de PHP ;
- MySQL ou MariaDB ;
- extension PHP `pdo_mysql`.

## Installation

1. Copier le projet dans le dossier web du serveur, par exemple `htdocs/tp-php`.
2. Démarrer Apache et MySQL.
3. Créer une base nommée `tp-php` avec l'encodage UTF-8.
4. Créer une table `products` adaptée aux données utilisées par `07-select.php` :

```sql
CREATE DATABASE IF NOT EXISTS `tp-php`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `tp-php`;

CREATE TABLE IF NOT EXISTS products (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  quantity INT UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO products (name, price, quantity) VALUES
  ('Laptop', 8500.00, 2),
  ('Mouse', 200.00, 10);
```

## Exécution

Depuis un serveur web local :

- `http://localhost/tp-php/01-hello.php`
- `http://localhost/tp-php/02-php-html.php`
- `http://localhost/tp-php/03-get.php?nom=Ilias`
- `http://localhost/tp-php/04-post.php`
- `http://localhost/tp-php/05-formulaire.php`
- `http://localhost/tp-php/database/07-select.php`

Le fichier `03-get.php` peut aussi être testé sans paramètre : il utilise alors « ilias » comme valeur par défaut.



## Points observés dans le rapport

- Les exercices de HTML, GET et POST sont principalement des démonstrations sans persistance dans une base de données.
- `04-post.php` affiche les données soumises et échappe les valeurs affichées avec `htmlspecialchars()`.
- `05-formulaire.php` doit être harmonisé : le champ HTML utilise `quantite`, tandis que le code PHP traite `quantité` avec un nom accentué.
- `05-formulaire.php` définit `totale` mais tente ensuite d'afficher des variables nommées `$total` et `$quantite`.
- `06-conexion.php` définit `$localhost`, mais la chaîne PDO utilise une variable `$host` non définie.
- Le nom réel du fichier est `06-conexion.php`, alors que `07-select.php` demande `06-connexion.php` ; ces noms doivent être identiques.
- `07-select.php` utilise correctement PDO avec `fetchAll(PDO::FETCH_ASSOC)`.
- `database/dataBase.sql` est vide et doit contenir le script de création de la base si ce fichier est utilisé pour l'installation.
- Le prix est affiché en dirhams (DH).


