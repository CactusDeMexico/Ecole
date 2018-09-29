<?php
/**
 * Created by PhpStorm.
 * User: toshiba
 * Date: 29/09/2018
 * Time: 11:54
 */

   include('menu.php'); ?>

    <div class="container ">
        <?php
        foreach($resultats as $unResultat)
        {
        ?>
    <h3 class="titreQuestionnaire">Quizz 1 :<?php echo $unResultat["Theme"]; ?></h3>
        <div class="row questionnaire center">
            <form method="POST" action="index.php?page=1">

                <div class="form-group">
                    <div class="question">

                        <h1><?php echo $unResultat["Question"]; ?></h1>
                    </div>
                    <div class="reponse">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <a type="button" class="btn btnReponse"><?php echo $unResultat["BonneR"]; ?></a>
                                    <a type="button" class="btn btnReponse"><?php echo $unResultat["Reponse1"]; ?></a>
                                </div>

                                <div class="col-12">
                                    <a type="button" class="btn btnReponse"><?php echo $unResultat["Reponse2"]; ?></a>
                                    <a type="button" class="btn btnReponse"><?php echo $unResultat["Reponse3"]; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-primary" id="valider" name="valider" type="submit" value="Je valide ma réponde !" />

                </div> <?php }?>
            </form>
        </div>
    </div>
