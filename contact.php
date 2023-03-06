<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Tech - Contact</title>
</head>
<body>
    <div class="box">
    <?php include('entete.php'); ?>
    </div>
<main>
        <div class="arriere-plan">
            <div class="box-form">
                <div class="form">
                    <form method="get" action="">
                        <fieldset>
                            <legend >Envoyez nous un mail</legend> <!-- Titre du fieldset --> 
                            <div class="formulaire">
                                <div class="formulaire-droite">
                                    <div>
                                        <br><label for="prenom">Votre prénom </label> <br>
                                        <input type="text" name="prenom" id="prenom" placeholder="" . maxlength="20" required><br> <br>
                                    </div>
                                    <div>
                                        <label for="nom">Votre nom </label> <br>
                                        <input type="text" name="nom" id="nom" placeholder="" . maxlength="20" required><br> <br>
                                    </div>
                                </div>
                                <div class="formulaire-gauche">
                                    <div>
                                        <br><label for="mail">Votre email </label> <br>
                                        <input type="email" name="mail" id="mail" placeholder="" . required ><br> <br>
                                    </div>
                                    <div>
                                        <label for="message">Votre message </label> <br>
                                        <textarea name="message" id="message" .></textarea><br> <br>
                                    </div>
                                </div>
                            </div>
                            <div class="envoyer">
                                <input class="envoyer" type="submit" value="Envoyer">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include('pieddepage.php');?>
    </body>
</html>