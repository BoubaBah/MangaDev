<?php

require("config/commandes.php");

$mesProduits = afficher();
$mesFormateur = afficher();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="cards.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>FormeDev</title>




</head>

<body>
    <?php
    include("header.php");
    ?>


    <div class="mb-20 mb-md-32 text-white">
        <h1 class="display-3 fw-bold mb-4">Pourquoi nous rejoindre ?</h1>
        <br>
        <div class="row">
            <div class="col-12 col-lg-5 mb-12 mb-lg-0">
                <div class="mw-lg-md h-100">
                    <img class="img-fluid d-block h-100 w-100 rounded-5" style="object-fit: cover;" src="asset/Design sans titre.png">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="mw-lg py-lg-16">



                    <p class="fs-5 text-light-dark bg-dark opacity-75 rounded-3 mb-0 justify-content-center">Découvrez l'Excellence de Nos Formateurs en Programmation Informatique

                        Chez MangaDev, nous sommes fiers de vous offrir une formation en programmation informatique de la plus haute qualité, dispensée par des experts reconnus dans le domaine. <br><br>Nos formateurs, Sangoku, Itachi Uchiha, Eren Yeager et Edward Elric, sont des professionnels passionnés et dévoués, chacun apportant une richesse d'expérience et de connaissances uniques. Voici pourquoi vous devriez choisir de vous former avec eux :
                        Sangoku

                        Sangoku est un véritable maître de la programmation. Avec une énergie inépuisable et une détermination sans faille, il sait comment motiver ses étudiants à donner le meilleur d'eux-mêmes. <br><br>Sa capacité à simplifier les concepts complexes et à les rendre accessibles à tous est l'une de ses plus grandes forces. Sangoku vous guidera avec patience et persévérance, vous aidant à surmonter tous les obstacles sur votre chemin vers la maîtrise de la programmation.
                        Itachi Uchiha

                        Itachi Uchiha est connu pour sa rigueur et son sens aigu du détail. Expert en sécurité informatique et en développement de logiciels, il apporte une perspective unique et précieuse à nos formations. <br><br>Itachi est un formateur exigeant mais juste, qui pousse ses étudiants à atteindre l'excellence. Sa méthodologie structurée et son approche analytique vous permettront de développer des compétences solides et durables.
                        Eren Yeager

                        Eren Yeager est un innovateur passionné par les nouvelles technologies et les tendances émergentes. Toujours à l'avant-garde des dernières avancées en programmation, il inspire ses étudiants à penser de manière créative et à explorer de nouvelles possibilités. <br><br>Eren est particulièrement doué pour enseigner les langages de programmation modernes et les frameworks les plus récents, vous préparant ainsi à relever les défis de demain.
                        Edward Elric

                        Edward Elric est un véritable alchimiste de la programmation. Sa capacité à transformer des idées abstraites en solutions concrètes et fonctionnelles est impressionnante. Edward est un formateur charismatique et engageant, qui sait comment captiver son audience et rendre l'apprentissage agréable. <br><br>Son expertise en développement d'applications et en ingénierie logicielle vous permettra de créer des projets innovants et de haute qualité.

                        En choisissant de vous former avec Sangoku, Itachi Uchiha, Eren Yeager et Edward Elric, vous bénéficierez d'une expérience d'apprentissage exceptionnelle, alliant rigueur académique, innovation et passion. Rejoignez-nous chez MangaDev et laissez nos formateurs vous guider vers l'excellence en programmation informatique.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>


    <h1 class="text-white">Choisi ton Academies !</h1>

    <!-- <div class="wrapper">
        <div class="container1">
            <input type="radio" name="slide" id="c1">
            <label for="c1" class="card1"><a href="#goku">

                    <div class="row1">
                        <div class="icon1">1</div>
                        <div class="description1">
                            <h4>Goku</h4>
                            <p>Formateur spécialiser front-end</p>

                        </div>
                    </div>
            </label></a>

            <input type="radio" name="slide" id="c2">
            <label for="c2" class="card1"><a href="#Itachi">
                    <div class="row1">
                        <div class="icon1">2</div>
                        <div class="description1">
                            <h4>Itachi Uchiha</h4>
                            <p>Formateur spécialiser dans l'IA et l'illusion</p>
                        </div>
                    </div>
            </label></a>
            <input type="radio" name="slide" id="c3">
            <label for="c3" class="card1"><a href="#edward">
                    <div class="row1">
                        <div class="icon1">3</div>
                        <div class="description1">
                            <h4>Edward Elric</h4>
                            <p>Formateur spécialiser dans l'echange et cybersécurité</p>
                        </div>
                    </div>
            </label></a>
            <input type="radio" name="slide" id="c4">
            <label for="c4" class="card1"><a href="#eren">
                    <div class="row1">
                        <div class="icon1">4</div>
                        <div class="description1">
                            <h4>Eren Yeager</h4>
                            <p>Formateur spécialiser dans le back-end </p>
                        </div>
                    </div>
            </label></a>
        </div>
    </div> -->















    <hr class="featurette-divider">


    <div class="row featurette">
        <div class="col-md-7 bg-dark opacity-75 rounded-3" id="Itachi">
            <h2 style="font-weight: 800; " class="featurette-heading text-danger bg-dark">Venez apprendre le ninjutsu de l'informatique avec Itachi. </h2>
            <p style="font-weight: 800;" class="lead text-danger">Découvrez les secrets du développement informatique avec Itachi, le shinobi légendaire de l'univers de Naruto. Maître de la stratégie et de l'illusion, Itachi vous enseignera l'art du code avec la même finesse et précision que son ninjutsu. Sous sa guidance, vous apprendrez à déjouer les bugs et à optimiser vos scripts, transformant chaque défi en une opportunité de perfectionnement. Rejoignez Itachi pour une formation où discipline, perspicacité et excellence sont les maîtres mots, et où chaque ligne de code devient une œuvre d'art.</p>
        </div>
        <div class="col-md-5 bg-dark opacity-75 rounded-3">
            <img class="featurette-image img-fluid mx-auto" src="asset/itachi_uchiha_mangekyo_sharingan_sharingan_hd_naruto-2560x1440.jpg" width="700px alt=" Generic placeholder image">
        </div>
    </div>

    <br><br><br>
    <hr class="featurette-divider text-white ">

    <div class="row featurette">
        <div class="col-md-7 order-md-2 bg-dark opacity-75 rounded-3" id="goku">
            <h2 style="font-weight: 800; " class="featurette-heading text-info  bg-dark">Venez apprendre le super "Code" saiyen avec Goku. </h2>
            <p style="font-weight: 800;" class="lead text-info">Plongez dans l'univers du développement informatique avec Sangoku, le guerrier légendaire de Dragon Ball. Fort de sa détermination sans limite et de son esprit combatif, Sangoku vous guidera à travers les complexités du code avec la même intensité qu'il met dans ses entraînements. Apprenez à maîtriser les langages de programmation et à surmonter les obstacles techniques avec la puissance d'un Super Saiyan. Sous la tutelle de Sangoku, chaque défi devient une opportunité de croissance, et chaque ligne de code, une étape vers l'excellence. Rejoignez-le pour une aventure inoubliable où persévérance et innovation sont les clés de la réussite.</p>
        </div>
        <div class="col-md-5 order-md-1 bg-dark opacity-75 rounded-3">
            <img class="featurette-image img-fluid mx-auto" src="asset/gokupc.png" width="400px" alt="Generic placeholder image">
        </div>
    </div>

    <br><br><br>
    <hr class="featurette-divider text-white ">
    <div class="row featurette" id="eren">
        <div class="col-md-7 bg-dark opacity-75 rounded-3">
            <h2 style="font-weight: 800; " class="featurette-heading text-success bg-dark">Venez vous transformer en Titans du code avec Eren. </h2>
            <p style="font-weight: 800;" class="lead text-success">Plongez dans le monde du développement informatique avec Eren, le héros intrépide de l'Attaque des Titans. Avec une volonté indomptable et une passion inébranlable, Eren vous guidera à travers les complexités du code, brisant les barrières et repoussant les limites comme il l'a fait contre les Titans. Sous sa tutelle, vous apprendrez non seulement à coder avec précision et efficacité, mais aussi à affronter et surmonter les plus grands défis du monde numérique avec courage et détermination. Rejoignez Eren pour une aventure où chaque ligne de code est une bataille gagnée.</p>
        </div>
        <div class="col-md-5 bg-dark opacity-75 rounded-3">
            <img class="featurette-image img-fluid mx-auto" src="asset/ere1.jpg" width="700px alt=" Generic placeholder image">
        </div>
    </div>

    <br><br><br>
    <hr class="featurette-divider text-white ">
    <div class="row featurette" id="edward">
        <div class="col-md-7 order-md-2 bg-dark opacity-75 rounded-3">
            <h2 style="font-weight: 800; " class="featurette-heading text-warning  bg-dark  ">Venez apprendre l'echange equivalent de la cybersécurité. </h2>
            <p style="font-weight: 800;" class="lead text-warning  ">Rejoignez Edward Elric, l'Alchimiste d'Acier, dans une aventure unique où la cybersécurité rencontre l'alchimie. Avec son esprit analytique et sa détermination inébranlable, Edward vous guidera à travers les mystères du monde numérique, vous enseignant comment transformer les vulnérabilités en forces et comment protéger vos systèmes avec la même rigueur et ingéniosité qui caractérisent ses exploits alchimiques. Préparez-vous à une formation où chaque leçon est une transmutation vers une sécurité infaillible</p>
        </div>
        <div class="col-md-5 order-md-1 bg-dark opacity-75">
            <img class="featurette-image img-fluid mx-auto" src="asset/edward.jpg" width="500px alt=" alt="Generic placeholder image">
        </div>
    </div>

    <br><br>

    <!-- <center><img src="asset/Nouveau-formateur.gif" height="600px" width="25%" alt=""> -->







        <h1 class="text-white mb-5" id="cours">Les cours disponibles</h1>

        <div class="row row-cols-1 row-cols-md-2 g-1 p-5 mr-5" id="produits">

            <?php foreach ($mesProduits as $produit) : ?>
                <div class="col ">
                    <div class="card w-50 rounded-5 bg-warning mb-3 ">
                        <h5 class="card-title text-dark text-center rounded-5"><?= $produit->nom ?></h5>
                        <img src="<?= $produit->image ?>" class="card-img-top rounded-5" alt="...">
                        <div class="card-body bg-dark rounded-5">
                            <p class="card-text text-white bg-dark"><?= $produit->description ?></p>
                            <button type="button" class="btn btn-success"><a href="Formation.php" class="text-white">Voir plus</a></button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>



        </div>


























        <footer>
            <!-- Remove the container if you want to extend the Footer to full width. -->
            <div class="container my-5">

                <!-- Footer -->
                <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
                    <!-- Section: Social media -->
                    <section class="d-flex justify-content-between p-4" style="background-color: black">
                        <!-- Left -->
                        <div class="me-5 ">
                            <span>Connectez-vous avec nous sur les réseaux sociaux:</span>
                        </div>
                        <!-- Left -->

                        <!-- Right -->
                        <div>
                            <a href="" class="text-white me-4">
                                <box-icon type='logo' name='facebook-circle'></box-icon>
                            </a>
                            <a href="" class="text-white me-4">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="text-white me-4">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="" class="text-white me-4">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="" class="text-white me-4">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="" class="text-white me-4">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                        <!-- Right -->
                    </section>
                    <!-- Section: Social media -->

                    <!-- Section: Links  -->
                    <section class="">
                        <div class="container text-center text-md-start mt-5">
                            <!-- Grid row -->
                            <div class="row mt-3">
                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                    <!-- Content -->
                                    <h3 class="text-uppercase fw-bold">MangaDev</h3>
                                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                                    <p>
                                        Here you can use rows and columns to organize your footer
                                        content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h3 class="text-uppercase fw-bold">Créateur</h3>
                                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                                    <p>
                                        <a href="#!" class="text-white">Boubacar Bah</a>
                                    </p>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h3 class="text-uppercase fw-bold">Horraire</h3>
                                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />

                                    <p>
                                        <a href="#!" class="text-white">Lundi-Vendredi : 8h-20h</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-white">Samedi : 8h-17h</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-white">Dimanche : Ferme</a>
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                    <!-- Links -->
                                    <h3 class="text-uppercase fw-bold">Contact</h3>
                                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                                    <p><i class="fas fa-home mr-3"></i> Planete Namek, 00000</p>
                                    <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                        </div>
                    </section>
                    <!-- Section: Links  -->

                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                        © 2024 Copyright:
                        <a class="text-white" href="https://mdbootstrap.com/">Bah Boubacar</a>
                    </div>
                    <!-- Copyright -->
                </footer>
                <!-- Footer -->

            </div>
            <!-- End of .container -->
        </footer>








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>