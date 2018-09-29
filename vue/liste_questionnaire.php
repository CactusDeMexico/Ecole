<?php
/**
 * Created by PhpStorm.
 * User: toshiba
 * Date: 29/09/2018
 * Time: 11:16
 */



include('menu.php');




foreach($resultats as $unResultat)
{
?>
<div class="container ">
<!-- AFFICHE LA MATIERE ET LES THEMES-->
    <h1 class="titreMatiere welcome"><?php  echo($matiere[$unResultat["IdQuestionnaire"]]["Nom"]); ?></h1>
    <div class="row choix">
        <a type="button" class="btn btn-primary btn-lg" href="index.php?page=4&lien=<?php echo $unResultat["IdQuestionnaire"]; ?>">Quizz 1 : <?php echo $unResultat["Theme"]; ?></a>
    </div>
    </div>
<?php } ?>

