<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/stylephone.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Tech - Home</title>
</head>
<body>
    <header>
        <div class="box">
        <?php include('entete.php'); ?>
            
            <div class="accroche">
                <div class="text">
                    <h3>LE FUTUR C'EST MAINTENANT</h3>
                    <h1>Chaque étape compte</h1>
                    <p>Globaltech est une entreprise 
                        spécialisée dans les solutions 
                        informatiques, la communication 
                        digitale, le marketing digital et la 
                        formation.</p>
                    <a class="bouton"href="#pourquoi">En savoir plus</a>
                </div>
                <div class="dessin">
                    <img height="400px" width="400px" src="images\logo-transparent-removebg1.png" alt="">
                </div>
            </div>

        </div>
    </header>
    <main>
        <div class="arriere-plan">
            <div class="box">
                <h2 class="service-title">NOS <br> SERVICES</h2>
                <div class="conteneur-service">
                    <div class="service">
                    <div class="card-service">
                        <div class="icone">
                        <img style="background-color:white; border-radius:100%;"  src="images\ordi-removebg-preview.png" alt="">
                        </div>
                        <h3 class="title">Ingénierie informatique</h3>
                        <p class="description">
                            Un petit texte opour tester l'espace  cest toujours mieux
                        </p>
                        <a href="services.php" class="bouton">Plus d'infos</a>
                    </div>
                    <div class="card-service">
                        <div class="icone">
                        <img style="background-color:white; border-radius:100%;"  src="images\sécur.png" alt="">
                        </div>
                        <h3 class="title">Cybersécurité</h3>
                        <p class="description">
                        Un petit texte opour tester l'espace  cest toujours mieux
                        </p>
                        <a href="services.php" class="bouton">Plus d'infos</a>
                    </div>
                    <div class="card-service">
                        <div class="icone">
                        <img style="background-color:white; border-radius:100%;"  src="images\formation.png" alt="">
                        </div>
                        <h3 class="title">Formations</h3>
                        <p class="description">
                        Un petit texte opour tester l'espace  cest toujours mieux
                        </p>
                        <a href="services.php" class="bouton">Plus d'infos</a>
                    </div>
                    <div class="card-service">
                        <div class="icone">
                        <img style="background-color:white; border-radius:100%;"  src="images\comdig.png" alt="">
                        </div>
                        <h3 class="title">Communication digitale</h3>
                        <p class="description">
                        Un petit texte opour tester l'espace  cest toujours mieux
                        </p>
                        <a href="services.php" class="bouton">Plus d'infos</a>
                    </div>
                    <div class="card-service">
                        <div class="icone">
                        <img style="background-color:white; border-radius:100%;"  src="images\res.png" alt="">
                        </div>
                        <h3 class="title">Réseaux et télécoms</h3>
                        <p class="description">
                        Un petit texte opour tester l'espace  cest toujours mieux
                        </p>
                        <a href="services.php" class="bouton">Plus d'infos</a>
                    </div>
                    <div class="card-service">
                        <div class="icone">
                        <img style="background-color:white; border-radius:100%;"  src="images\design.png" alt="">
                        </div>
                        <h3 class="title">Design graphique</h3>
                        <p class="description">
                        Un petit texte opour tester l'espace  cest toujours mieux
                        </p>
                        <a href="services.php" class="bouton">Plus d'infos</a>
                    </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <h2 id="pourquoi" class="faq-title">POURQUOI <br> GLOBAL TECH ?</h2>
            <div class="faq">
                <div class="question">
                    <div>
                        <span>1</span>
                        <p>Qu'est ce que global tech ?/Qui sommes-nous ?</p>
                        <button id="b1" onclick="faireApparaitre1()">+</button>
                    </div>
                    <div id="div1" class="cache1" >Globaltech est une société d'ingénierie web, mobile et réseau, d'intégrationde systèmes de communication,
                         de logiciels et de formations qui propose des solutions allant de la réflexion stratégique à la mise en oeuvre.</div>
                </div>
                <div class="question">
                    <div>
                        <span>2</span>
                        <p>Quelle est notre mission ?</p>
                        <button id="b2" onclick="faireApparaitre2()">+</button>
                    </div>
                    <div id="div2" class="cache2" >Notre mission est d'aider et d'accompagner les enttreprises à développer leur marques,
                         leurs identités visuelles, à promouvoir leur images, produits et services et à améliorer leur
                         e-réputationafin de leur permettre d'etre plus compétitives sur le marché local et international.</div>
                </div>
                <div class="question">
                    <div>
                        <span>3</span>
                        <p>Comment bénéficier de nos services ?</p>
                        <button id="b3" onclick="faireApparaitre3()">+</button>
                    </div>
                    <div id="div3" class="cache3" >Vous pouvez bénéficier de nos services à travers ce site web en nous contactant par un réseau social, en nous
                         rejoignant directement sur notre numéro de téléphone ou encore en nous envoyant une emal directement à travers la page contact.</div>
                </div>
                <div class="question">
                    <div>
                        <span>4</span>
                        <p>Quelles sont nos cibles ?</p>
                        <button id="b4" onclick="faireApparaitre4()">+</button>
                    </div>
                    <div id="div4" class="cache4" >Toutes entreprises,
                                                    toutes personnes (hommes et femmes) âgées de 18 ans à 65 ans et plus, 
                                                    faisant partir des forums d’entrepreneurs sur 
                                                    les médias sociaux,abonnés aux pages de système de sécurité en entreprise, et ayant pour centre d’intèret les métiers du 
                                                    digital.</div>
                </div>
        </div>
    </main>
    <?php include('pieddepage.php'); ?>

    <script src="js\button.js"></script>
</body>
</html>