<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exos John codeu</title>
</head>

<body>
    <?php

    // exemple Scope

    /*  function AddOneAndEcho()
    {
        static $variable1 = 7;
        $variable1++;
        echo $variable1;

    }

    AddOneAndEcho();
    AddOneAndEcho();
    AddOneAndEcho(); */

    use function PHPSTORM_META\map;

    ?>

    <?php
    // $var1 = "apprendre-a-coder.com";
    // $var2 = "apprendre-a-coder.fr";
    // $var3 = "Le site apprendre-a-coder.com c'est de la balle !";
    // echo strlen($x); // il y a 49 caractères dans la variable x
    // echo str_word_count($x); // compte le nombre de mot entre espaces
    // echo strrev($x); // Met la phrase à l'envers
    // echo strpos($x, "balle"); // position du caractère dans la string
    // echo str_replace($var1, $var2, $var3);
    // le premier c'est le mot à remplacer $var1
    // le $var2 remplace le mot dans la $var1
    // dans la string $var3

    // CONSTANTE 
    /* define("MON_URL", "http://apprendre-a-coder.com"); // c'est une constante
    // C'est accesible partout c'est connu dans les scopes

    function myFunction()
    {
        echo "Le site " . MON_URL . " c'est de la balle !";
    }

    myFunction(); */

    // LES OPERATEURS

    // $x = 20;
    // $y = 6;

    // echo $x % $y; // modulo c'est le reste de la division, si je divise 20
    // par 6 (donc il y a combien de fois 6 dans 20 = 3 fois entier de 6
    // mais si apres le 3 fois 6 ca fait 18 si j'enleve ce 18 à 20 il reste
    // 2; dans ce cas l'operateur modulo m'affichera 2)

    // $x = 5;
    // $y = 2;
    // echo $x ** $y; // Puissance 


    // Operateur stricte (qui pose une question et qui répond à une certaine condition)

    // $age = 25;
    // $boisson = ($age > 18)? "biere" : "eau";

    // echo $boisson

    // Operateur avec PHP 7 NEW !

    // $bleu = "Bleu";
    // // question est-ce que le bleu est défini ?
    // $maCouleur = $bleu ?? $orange ?? $rouge ?? "Pas de couleur";

    // echo $maCouleur;

    // Operateur de comparaison
    /* 
    $x = 10;
    $y = 2;
 
    // spaceship

    echo $x <=> $y; // soit 1 soit 0 soit -1
    */

    // Operateur logique (and &&) et (or ||) et différent (!)

    // $x = 10;
    // $y = 50;

    // var_dump($x > 20 || $y > 20);

    // Operateur logique xor

    /* $x = 10;
    $y = 50;

    var_dump($x > 20 xor $y > 10); // xor n'accepte qu'une seule condition vraie
    */

    // Conditions

    /* $motivation = 5;

    if($motivation < 3) {
        echo "Oulala, il faut se motiver !";
    } elseif($motivation < 7){
        echo "Ton cas n'est pas grave, il faut juste se motiver !";
    } else {
        echo "C'est génial, tu es motivé !";
    } */

    /*  $objectif = "travailler de la maison";

    switch($objectif) {
        case "travailler en freelance":
            echo "Tu es un bon freelancer !";
            break;
        case "travailler de la maison":
            echo "T'as raison, c'est de la balle !";
            break;
        case "coder mon site web":
            echo "Bonne chance !";
            break;
        default:
            echo "Choisis un objectif !";
    } */

    // Boucle

    // $x = 100;

    // while(/*condition*/ $x <= 10) {
    // code a executer si la condition est vraie
    /* echo "La valeur de x est : " . $x . "<br>";
        $x++;
    } */

    /* do {
        echo "La valeur de x est : " . $x . "<br>";
        $x++;
    } while($x <= 10); */

    /* for($i = 0; $i <= 10; $i++) {
        echo "La valeur de x est : " . $i . "<br>";
    } */

    // Fonction

    // Déclaration d'une fonction elle prend un paramètre $message
    /* function maFonction($message = "Pas de message") {
        echo $message;
    } */
    // Appel de la fonction avec un message
    // maFonction("Voici mon message");
    // Appel de la fonction sans paramètre (donc sans message)
    // maFonction();

    // Fonction avec paramètre et retour de valeur

    /* function addition($x, $y) {
        return $x + $y; // retourne la valeur de la somme de x et y
    }

    echo addition(2, 5); */

    // ceci est un commentaire sur une ligne

    /* Ceci est un commentaire
    sur plusieurs lignes */

    # ceci est un commentaire sur une ligne

    // Tableaux

    /* $joursdelasemaine = array("Lundi", "Mardi", "Mercredi", "Jeudi", 
    "Vendredi", "Samedi", "Dimanche"); */

    // var_dump($joursdelasemaine);

    // echo $joursdelasemaine[3]; // affiche le 4ème élément du tableau

    // echo count($joursdelasemaine); // compte le nombre d'éléments dans le tableau

    /* for($i = 0; $i < count($joursdelasemaine); $i++){
        echo "$joursdelasemaine[$i] <br>"; // affiche tous les éléments du tableau
    }
 */
    // autre type de array (tableau associatif) avec clé et valeur
    // clé = index et valeur = valeur de l'index

    /* $etat = array("France" => "Paris", "Italie" => "Rome", 
    "Espagne" => "Madrid"); */

    // var_dump($pays);

    // Comment faire une itération
    // $pays est la clé et $ville la valeur
    /* foreach($etat as $pays => $ville) {
        echo "$pays se situe a $ville <br>";
    } */

    // Les objets

    /* class Etudiant {
        // Attributs (propriétés)
        public $etudie = true;
        public $prenom;
        public $age;
        public $note;

        // fonction constructeur
        // elle est appelée automatiquement lors de l'instanciation de la classe
        // elle peut prendre des paramètres
        // elle est appelée avec le mot clé new
        // le mot clé this permet d'accéder aux attributs de la classe
        public function __construct($prenomDeLetudiand, $age, $notes) {
            $this->prenom = $prenomDeLetudiand;
            $this->age = $age;
            $this->note = $notes;
        }

        // Méthodes (fonctions)
        public function sePresente() {
            if($this->etudie) {
                echo "Je m'appelle $this->prenom et j'ai $this->age ans. <br>";
                foreach($this->note as $matiere => $note) {
                    echo "En $matiere, j'ai obtenu $note/20.<br>";
                }
            }

        }
    }

    $notesJohn = array("Maths" => 15, "Français" => 14, "Anglais" => 13);
    $john = new Etudiant("John", "31", $notesJohn);

    $john->sePresente();

    var_dump($john); // affiche toutes les informations de l'objet avec ses
                    // attributs (propriétés) et ses méthodes (fonctions)
                    // pour chaque valeur de l'objet $john */

    // Les includes et les requires

    // La différence entre les deux est que le require ne charge que le fichier
    // qu'une seule fois, mais l'include charge le fichier à chaque fois que
    // on l'appelle
    // Le require est plus sécurisé, mais l'include est plus rapide

    // Les Supers Globales

    $x = 5;
    $y = 18;

    /* function maFonction()
    {
        echo $GLOBALS['x']; // Les super globals sont des arrays de
                            // type asscoiative
    }

    maFonction(); */

    // var_dump($_SERVER); // affiche toutes les informations du serveur

    // echo $_SERVER["SERVER_NAME"]; // affiche le nom du serveur

    /* var_dump($_REQUEST); // affiche toutes les informations de la requête

    var_dump($_POST); // affiche toutes les informations du formulaire

    var_dump($_COOKIE); // affiche toutes les informations des cookies

    var_dump($_SESSION); // affiche toutes les informations des sessions */

    // Super globale get exemple: fichier presentation.php

    // Super globale post

    ?>

    <!-- <div class="menu">
        <!-- <?php // include "menu.php" 
                ?>
    </div> -->

    <!-- <h1>Page d'Acceuil</h1> -->

    <!-- Super globales get -->

    <!-- <p>
        <a href="presentation.php?nom=John&age=31">Presentation</a>
    </p> -->

    <!-- Formulaires super globale post -->

    <form action="presentation.php" method="post">
        Nom: <input type="text" name="nom"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit">
    </form>

</body>

</html>