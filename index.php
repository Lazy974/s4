<!-- 
Dans cet exercice, vous apprendrez à manipuler les boucles php.
Veillez à bien lire les instructions présentes en commentaires.

Good luck & happy coding !
-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Made with ❤️ by HelloDev</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="./assets/js/main.js"></script>
</head>

<body>
    <h1 class="text-center py-10">Learn PHP - Step 4</h1>

    <!-- Step 3.1 -->
    <!-- Écrivez la méthode manquante pour remplacer les ???. Dites le résultat pour chaque ligne d'instructions ci-dessous.
    -->
    <?php

    $index = 1;
    while ($index <= 10) {
        // ??? 'index :' . $i++ . '<br />';
    }
    // Résultat :

    ?>

    <!-- Step 3.2 -->
    <!-- Écrivez la méthode manquante pour remplacer les ???. Dites le résultat pour chaque ligne d'instructions ci-dessous.
    -->
    <?php

    $index = 0;
    do {
        // ??? $index;
    } while ($index > 0);
    // Résultat :

    ?>

    <!-- Step 3.3 -->
    <!-- Écrivez la méthode manquante pour remplacer les ???. Dites le résultat pour chaque ligne d'instructions ci-dessous.
    -->
    <?php

    // for ($index = 1; ???; ???) {
    echo $index;
    // }
    // Résultat :

    ?>

    <!-- Step 3.4 -->
    <!-- Écrivez la méthode manquante pour remplacer les ???. Dites le résultat pour chaque ligne d'instructions ci-dessous.
    -->

    <?php

    // $fruits = ???('orange', 'mango', 'watermelon', 'pineapple', 'kiwi');
    foreach ($fruits as $fruit) {
        if ($fruit === 'pineapple') {
            break;
        }
        // ??? $fruit . '<br />';
    }
    // Résultat :

    ?>

    <!-- Step 3.5 -->
    <!-- Écrivez la méthode manquante pour remplacer les ???. Dites le résultat pour chaque ligne d'instructions ci-dessous.
    -->

    <?php

    // ??? = 10;
    switch ($index) {
        case 0:
            echo "index vaut 0";
            // ???;
        case 10:
            echo "index vaut 10";
            break;
            // ??? 100:
            echo "index vaut 100";
            break;
    }
    // Résultat :

    ?>

    <!-- Step 3.6 -->
    <!-- Pour chacune des instructions ci-dessous, indiquez le résultat.
    -->

    <?php

    $index = 0;
    while (++$index) {
        switch ($index) {
            case 5:
                echo 'End at number 5' . '<br />';
                // break ???;  // Résultat :
            case 10:
                echo 'End at number 10' . '<br />';
                // break ???;  Résultat :
            default:
                echo 'Default';
                break;
        }
    }
    // Résultat :

    ?>

    <!-- Step 3.7 -->
    <!-- À quoi sert les méthodes require et include ? Quelles sont les différences entre require_once et require ? Pour les instructions ci-dessous, indiquez le résultat.
    -->

    <?php

    $foo = require('./assets/php/foo.php');
    echo $foo;
    // Résultat :

    require_once('./assets/php/bar.php');
    echo $number . ' ' . $string;
    // Résultat :

    ?>


    <!-- Step 3.8 -->
    <!-- Mettons en pratique ce que vous avez appris ! Déclarer une fonction new movie horror en snake case.
    Cette fonction doit avoir 3 paramètres de type string : NAME, DESCRIPTION et DATE. Leurs valeurs par défaut sont un string vide.
    Dans le bloc de portée de la fonction, faite un REQUIRE du fichier variables.php qui est dans assets/php. Ensuite, faites un IF stipulant que si les 3 paramètres sont vides, lever une exception avec la méthode EXCEPTION.
    Dans le ELSE, déclarer une variable INDEX ayant pour valeur le nombre 1. 
    Toujours dans le ELSE, déclarer un WHILE stipulant que tant que INDEX est inférieur à 2, la méthode RETURN qui est en commentaire s'exécutera.

    Enfin, faites un TRY/CATCH en appelant la fonction avec divers arguments.
    -->

    <?php

    function new_movie_horror()
    {
        // return 'Nom du film : ' . $name . '<br />' . 'Description :' . $description . '<br />' . 'Date de sortie :' . $date . '<br />' . 'Catégorie :' . $category;
    }

    ?>

    <!-- Step 3.9 -->
    <!-- Reprenez le code ci-dessous en déclarant une fonction new movie horrors en snake case. Dans le ELSE, supprimer le code et faites un REQUIRE de data.php.
    Remplacer les valeurs du tableau associatif DATA par les paramètres de la fonction new movie horrors. Ensuite, faites un var_dump de data.

    Enfin, faites un TRY/CATCH en appelant la fonction avec divers arguments.
    -->

    <?php

    function new_movie_horrors()
    {
    }

    ?>

    <!-- Step 4 -->
    <!--
    Bravo, vous venez de terminer la manipulation des boucles PHP ! Ils existent encore pleins d'autres méthodes consultables ici :

    Boucles : https://www.php.net/manual/en/language.control-structures.php

    Passons à la suite en vous rendant sur ce lien :

    https://github.com/Lazy974/s5

    Made with ❤️ by HelloDev
    -->

</body>

</html>