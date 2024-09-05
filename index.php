<?php

require("config/commandes.php");

$mesProduits = afficher();
$mesFormateur = afficher();


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>MangaDev</title>




</head>

<body class="bg-dark text-light">


    <?php include('header.php'); ?>

    <div class="img">
        <div class="center">
            <div class="title">Bienvenue chez MangaDev</div>
            <div class="sub_title">Vous cherchez à découvrir le monde de la programmation ?<br>
                Alors rejoignez notre communauté !</div>
            <div class="btns">
                <button>
                    <a href="Formation.php">Formation</a>
                </button>
                <button>
                    <a href="contact.php">Contact</a></button>
            </div>
        </div>
    </div>
    <br><br>

    <section class="py-12 py-md-16 py-lg-24 ">
        <div class="container position-relative">
            <div class="mw-md mw-md-xl mx-auto mw-lg-6xl">
                <div class="mb-20 mb-md-32">
                    <div class="row">
                        <div class="col-12 col-lg-5 mb-12 mb-lg-0">
                            <div class="mw-lg-md h-100">
                                <img class="img-fluid d-block h-100 w-100 rounded-5 " style="object-fit: cover;" src="asset/booba.png.png">
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="mw-lg py-lg-16">

                                <h2 class="display-3 fw-bold mb-4"><span class="titre">Notre Mission :</span> <br> vous former chez MangaDev !</h2>
                                <p style="font-size: 200px;" class="fs-5  text-white--dark mb-0 justify-content-center bg-dark opacity-100 rounded-3">Bienvenue dans notre boutique en ligne, votre destination ultime pour des formations en programmation informatique, où les légendaires héros des mangas deviennent vos mentors personnels. <br><br>Plongez dans l'univers captivant de la technologie avec des formateurs emblématiques comme Sangoku de Dragon Ball, Itachi de Naruto, et Eren de l'Attaque des Titans. <br><br>Chaque formation est conçue pour vous offrir une expérience d'apprentissage unique, alliant la rigueur du code à la passion et à la persévérance de vos héros préférés. Apprenez les secrets du développement avec Sangoku, dont la détermination inébranlable vous guidera à travers les complexités du code, ou laissez-vous inspirer par la précision stratégique d'Itachi et la ténacité indomptable d'Eren. <br>

                                    Nos cours de programmation ne se contentent pas d'enseigner les bases, mais vous plongent dans une aventure épique où chaque ligne de code est une nouvelle bataille. <br><br> Sous la tutelle de Sangoku, vous découvrirez comment transformer la persévérance en puissance de codage, tandis qu'Itachi vous enseignera à déjouer les bugs et optimiser vos scripts avec la précision d'un maître ninja. <br><br> Avec Eren à vos côtés, vous apprendrez à affronter et surmonter les défis techniques avec le même courage et la même résilience qu'il déploie contre les Titans. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <br><br><br><br>

                <div class="mb-20 mb-md-32 mb-xl-40">

                    <div class="row">
                        <div class="col-12 col-lg-6 mb-8 mb-lg-0 ">
                            <div class="position-relative ps-8 mw-lg bg-dark bg-opacity-100 rounded-3">
                                <div class="position-absolute start-0 top-0 border-4 border-start border-white py-3"></div>
                                <h3 class="display-3 fw-bold mb-4 text-light ">Passion pour l'innovation</h3>
                                <p class="text-light">Rejoignez notre communauté de passionnés de manga et de technologie et laissez vos héros préférés vous guider vers l'excellence en programmation informatique. Plongez dans des discussions animées, participez à des ateliers interactifs, et collaborez sur des projets innovants. Ensemble, nous explorerons les dernières tendances technologiques tout en partageant notre amour pour les mangas. Que vous soyez débutant ou expert, il y a une place pour vous dans notre aventure numérique. Rejoignez-nous et transformez votre passion en compétences concrètes !</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="position-relative ps-8 mw-lg bg-light bg-opacity-75">
                                <div class="position-absolute start-0 top-0 border-4 border-start border-dark py-3"></div>
                                <h3 class="display-3 fw-bold mb-4 text-dark">Esprit shonen ? vous etes au bon endroit</h3>
                                <p class="text-dark">Parcourez les différents univers d'anime pour apprendre les secrets de la programmation. Devenez l'un de nos futurs membres et laissez-vous inspirer par les histoires et les personnages qui vous passionnent. En rejoignant notre communauté, vous aurez accès à des ressources exclusives, des tutoriels détaillés, et des sessions de mentorat personnalisées. Ensemble, nous transformerons votre passion pour les anime en compétences techniques solides. Rejoignez-nous dès aujourd'hui et commencez votre voyage vers l'excellence en programmation ! </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>

                <br><br>
                <h2 class="display-3 fw-bold mb-4">
                    <center>Nos Academies</center>
                </h2>
                <p class="bg-dark bg-opacity-75">"Apprenez à coder avec la puissance de Sangoku, la précision d'Itachi et la détermination d'Eren plongez dans une aventure épique de programmation avec vos héros manga préférés comme mentors ! <br>
                    bientot de nouveau formateur feront leur appararition rester connecter "</p>

            </div>


            <div class="row row-cols-1 row-cols-md-2 g-4">

                <?php foreach ($mesFormateur as $formateur) : ?>
                    <div class="col ">
                        <div class="card w-75 rounded-5">
                            <img src="<?= $formateur->image ?>" class="card-img-top rounded-5" alt="...">
                            <div class="card-body bg-warning">
                                <h5 class="card-title"><?= $formateur->nom ?></h5>
                                <p class="card-text"><?= $formateur->description ?></p>
                                <button type="button" class="btn btn-primary"><a href="http://examen/Catégorie.php" class="text-white">Voir plus</a></button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>



            </div>



            <br><br>
            <div class="text-center mb-16">
                <h2 class="mdisplay-3 fw-bold mb-4">Dirigeant</h2>

            </div>

            <div class="col-12 col-lg-4">
                <div class="position-relative rounded-3 overflow-hidden">
                    <img class="position-relative img-fluid d-block w-100" src="asset/boobarepre.png" alt="">
                    <div class="position-absolute bottom-0 start-0 px-8 py-4 bg-white" style="border-top-right-radius: 24px;">
                        <span class="d-block display-3 fw-bold mb-2 text-dark">Boubacar Bah</span>
                        <span class="small text-light-dark">Directeur</span>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>

    </section>


    <br><br><br>













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