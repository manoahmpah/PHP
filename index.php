<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- la police d'ecriture de google utiliser -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./style(2).css">
    <title>Table de multiplication</title>
</head>
<body>

    <!-- section du haut de page -->
    <section>
        <div>
            <div class="container">
                <img id="img_first_page" src="./img/pexels-jeshootscom-442574.jpg" alt="">
            </div>
            <div id="texte_first_page">
                <h2>Vous voulez apprendre <br> vos tables de multiplication</h2>
                <a href="#formulaire">Cliquer ici</a>
            </div>
        </div>
    </section>

    <!-- section du formulaire -->
    <section id="formulaire" class="size">
        <div id="place_formulaire">
            <h2>POUR SAVOIR VOS BESOINS VEUILLIEZ REPONDRE A CES QUESTIONS :</h2>
            <form action="./exercice(1).php" method="POST">


                <!-- demande la table que l'utilisateur veux apprendre -->
                <label>
                    <legend>Quelles tables de multiplication veux tu apprendre * :</legend>
                    <br>

                    <!-- Boucle for pour choisir la table a reviser (de 1 jusqu'a 10 en avancant de 1 en 1) -->
                    <?php for($i = 1; $i <= 10 ; $i++ ): ?>
                        <input id="boutton" type="radio" name="nombre" value=<?= $i ?> required>
                        <?= $i ?>
                    <?php endfor; ?>

                </label>
                <br>
                <br>

                <!-- demande si besoin de cours de Maths -->
                <label>
                    Pensez vous avoir besoins de cours de maths *
                    <input id="booleen" type="radio" value="OUI" name="booleen" required>
                    OUI
                    <input id="booleen" type="radio" value="NON" name="booleen" required>
                    NON
                </label>


                <br>
                <br>


                <!-- demande la boite email -->
                <label>
                    veulliez sasir votre email * :
                    <input id="email" name="email" type="email" placeholder="mutiplication37@example.fr" required>
                </label>


                <br>
                
                <!-- description champs obligatoire -->
                <p id="resizing">* Champs obligatoires</p>


                <!-- Bouton de validation -->
                <input type="submit" id="bouton">
            </form>
        </div>
        <div>
            <img id="img_section2" src="./img/pexels-koshevayak-4170628.jpg" alt="">
        </div>
    </section>

    <!-- le bas de page -->
    <footer>
        <div>

            <!-- Voici la réfernce des logos (le site demande de le referencer) :  https://icones8.fr/ -->
             <h1>Mes reseaux</h1>
             <a href="https://github.com/manoahmpah"><img src="https://img.icons8.com/cute-clipart/64/000000/github.png"/> GitHub</a>
             <a href="https://www.instagram.com/leon_en_photo/"><img src="https://img.icons8.com/wired/64/000000/instagram-new--v1.png"/> Instagram</a>
             <a href="https://www.youtube.com/channel/UCRHfUEiqSQGi8x1fyVmwLDg"><img src="https://img.icons8.com/dusk/64/000000/youtube--v2.png"/> YouTube</a>
             <a href="mailto: mpahmanoah@gmail.com"><img src="https://img.icons8.com/dusk/64/000000/gmail.png"/> Mail</a> 
             <a href="./maquette.html" target="_bank"><img src="https://img.icons8.com/color/64/000000/figma--v1.png"/>maquette</a> 
        </div>
  </footer>


</body>
</html>