<?php

session_start();ini_set('display_errors',1);
    error_reporting('e_all');
require ("head.php");
//$unC = new Controleur("localhost", "regroup", "root", "", "vueProduit");
include("controleur/Tableau.php");
include ("controleur/public_class_eleve.php");
//var_dump("test");


$page=(isset($_GET['page']))?$_GET['page']:0;
$unC = new Tableau("localhost", "ecolewlm", "root", "", "eleveinfo");
//var_dump($unC);

/*



    $resultats=$unC->selectAll();
    var_dump($resultats);
foreach($resultats as $unResultat)
{
    echo "<tr>
    <td>".$unResultat['Nom']."</td>
    <td>".$unResultat['Mdp']."</td>
    <td>".$unResultat['photo']."</td>
    <td>".$unResultat['Classe']."</td>
    <td>


</tr>";
}
*/
if(!$page) {
//Affichage de la page de connexion
   // include("./vue/login.php");
}

switch($page) {

//acceuil index.php?page=1
    case 0:

        session_start();
       // $resultats = $unC->selectAll();
        include("./vue/login.php");
        if(isset($_POST['connexion'])) //lancer fonction enregistrement Com
        {
            $uneCo = new Connexion();

            $uneCo->renseigner($_POST);
            $tab = $uneCo->serialiser();

            $unC->setTable("user");

            $num = $unC->login($uneCo->getUsername(), $uneCo->getPassword());

            if ($num == 1) {

                $_SESSION['user'] =$uneCo->getUsername();


            } else {
                echo "Your Login Name or Password is invalid";
            }
        }

        break;
        //AFFICHER ACCUEIL
    case 1://affichage de l'ACCUEIL

        $resultats = $unC->selectAll();
        include("./vue/home.php");

        break;
        //ADDITION
    case 2:

        $resultats = $unC->selectAll();
        include("./vue/addition.php");

        break;
        //LISTE TOUT LES QUESTIONNAIRE ET  LEURS MATIERES
    case 3:
        $unC->setTable("questionnaire");
        $resultats = $unC->selectAll();
       // var_dump($resultats);
        $unC->setTable("matiere");
        $matiere =$unC->selectAll();
        include("./vue/liste_questionnaire.php");

        break;
        //AFFICHAGE DU QUESTIONNAIRE SELECTIONNE
    case 4:

        $unC->setTable("questions");
        $lien = $_GET['lien'];

        $unC->setTable("questions");
        $resultats = $unC->selectUn($lien);


var_dump($resultats);
        include("./vue/questionnaire.php");

        break;


}
require ("footer.php");
?>