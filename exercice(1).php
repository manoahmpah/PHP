
<!-- vérification des données saise par l'utilsateur Part 1/2 (partie refléchie) -->
<?php
  if( isset($_POST['result']) ) {
    $allGood = true;           

    // boucle foreach qui va vérifier toute les variable result
    foreach($_POST['result'] as $key => $value) {  // explication : La première forme passe en revue le tableau $_POST['result']. À chaque itération, la valeur de l'élément courant est assignée à $value. La seconde forme assignera en plus la clé de l'élément courant à la variable $key à chaque itération.

        // voici le calcule faite par la machine
      if( (intval($key)+1) * intval($_POST['table']) !== intval($value)) {
          $allGood = false;
          break;
      }
    }
  }
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Table de multiplication</title>

    <!-- Police d'ecriture google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="./exercice(1).css">
</head>
<body>

<section>
    <?php if(isset($_POST['booleen'])):?>
        <!-- si l'utilisateur veut prendre des cours de maths -->
        <?php if ($_POST['booleen'] == "OUI"): ?>
          <img id="img_front_page1" src="./img/pexels-andrea-piacquadio-3771074.jpg" alt="">
                <section id="separation">
                    
                    <div id="container_texte_bouton">
                        <h2 class="texte_pub">Avez-vous besoin de cours de Maths ?</h2>
                        <p class="texte_pub">Les maths aident à comprendre comment fonctionnent le monde et toutes les autres sciences, comme la physique, la chimie, l'informatique… Internet, avions, fusées, cartes bleues : tout cela n'existerait pas sans les maths !</p>
                        <div id="container_bouton_aide">
                          <a href="https://sherpas.com/professeurs?subject=Maths&sv=maths&address=Tours,%20France&lng=0.68484&lat=47.394144" target="_bank">Cliquez ici</a>
                        </div>
                        
                    </div>
              
                </section>
                
        <!-- sinon -->
            <?php else: ?>
              <img id="img_front_page1" src="./img/pexels-andrea-piacquadio-3768126.jpg" alt="">
                <section id="separation">
                    
                    <div id="container_texte_bouton2">
                        <h2>Bienvenue, nous allons tester vos connaissances</h2>
                        
                    </div>
              
                </section>

        <?php endif; ?>
    <?php endif;?>
</section>



<section id="model-table">
    <div >
        <form action="./exercice(1).php" method="post">
            <?php if(isset($_POST['nombre'])): ?>

                <!-- table est une variable envoyé invissiblement a la vérification 1/2, qui va part la suite faire le calcule -->
                <input type="hidden" name="table" value="<?= $_POST['nombre'] ?>" />

                <!--création d'une boucle qui va de 1 jusqu'a 10 de 1 en 1 -->
                <div id="container_input_decor"></div>
                <div id="container_input">
                  
                    <?php for($i = 1 ; $i <= 10 ; $i++ ): ?>
                      <label>
                          <!-- partie visuelle -->
                          <span id="clo">
                              <?= $_POST['nombre'] ?> x <?= $i ?> = 
                        </span>
                          <input id="input_table" name="result[]" type="number"/><br>
                      </label>
                    <?php endfor; ?>
                    
                    <button>Valider</button>
                </div>
                
            <?php endif;  ?>

            <!-- vérification des données saise par l'utilsateur Part 2/2 (partie visuelle) -->
          <?php if(isset($allGood)): ?>
            <div id="response">
              <?php if($allGood): ?>
                <h1 class="réponse-resultat">Tout est bon !</h1>
                <a class="bouton_retour_reviser" href="./index.php">retour</a>
              <?php else: ?>
                <h1 class="réponse-resultat">Vous ne connaissez pas la table de multiplication saisie !!</h1>
                <a class="bouton_retour_reviser" href="./index.php">retour</a>
                <a class="bouton_retour_reviser" href="https://img-31.ccm2.net/84IUH_FoMYA1E5bTOS5l4X_wvak=/1080x/smart/5ad6f5d21eab4fe1b1b314ca005a8c00/ccmcms-hugo/10628773.jpg">réviser</a>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </form>
    </div>

    <!-- je ne veux plus le model 3D au resultat de la réponse -->
    <?php if(isset($_POST['booleen'])) : ?>
      <!-- Pour comprendre le model 3D est injecter dans la div avec la class scenne regarder ./app.js -->
      <div class="scene">

          <!-- Model Information:
                * title:	Low Poly Retro Calculator
                * source:	https://sketchfab.com/3d-models/low-poly-retro-calculator-895e0c5280a6438bb3126fa2b3f08ae7
                * author:	Macky (https://sketchfab.com/mackybtw)

                Model License:
                * license type:	CC-BY-4.0 (http://creativecommons.org/licenses/by/4.0/)
                * requirements:	Author must be credited. Commercial use is allowed.

                If you use this 3D model in your project be sure to copy paste this credit wherever you share it:
                This work is based on "Low Poly Retro Calculator" (https://sketchfab.com/3d-models/low-poly-retro-calculator-895e0c5280a6438bb3126fa2b3f08ae7) 
                by Macky (https://sketchfab.com/mackybtw) 
                licensed under CC-BY-4.0 (http://creativecommons.org/licenses/by/4.0/)-->


          <p id="croix-rouge">❌ Vous n'avez pas le droit à la calculatrice</p>
      </div>
    <?php endif ?>

</section>

<footer>
          
           <div>
                <h1>Mes reseaux</h1>
                <!-- Voici la réfernce des logos (le site demande de le referencer) :  https://icones8.fr/ -->
                <a href="https://github.com/manoahmpah"><img src="https://img.icons8.com/cute-clipart/64/000000/github.png"/> GitHub</a>
                <a href="https://www.instagram.com/leon_en_photo/"><img src="https://img.icons8.com/wired/64/000000/instagram-new--v1.png"/> Instagram</a>
                <a href="https://www.youtube.com/channel/UCRHfUEiqSQGi8x1fyVmwLDg"><img src="https://img.icons8.com/dusk/64/000000/youtube--v2.png"/> YouTube</a>
                <a href="mailto: mpahmanoah@gmail.com"><img src="https://img.icons8.com/dusk/64/000000/gmail.png"/> Mail</a>
                <a href="./maquette.html" target="_bank"><img src="https://img.icons8.com/color/64/000000/figma--v1.png"/>maquette</a>
           </div>
  </footer>

<!-- THREEJS = https://threejs.org/ -->
<script src="./three.min.js"></script>
<script src="./GLTFLoader.js"></script>
<script src="./app.js"></script>
</body>
</html>