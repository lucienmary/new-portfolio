<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#353535">
    <meta charset="utf-8">

    <?php
        $cpt = $_GET["project"];

        $json = file_get_contents("./assets/json/projects.json");
        $parsed_json = json_decode($json);
        $name = $parsed_json->{$cpt}->{'name'};

        echo '<title>'. $name .' | Projets | lucienmary.be</title>';
     ?>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/styles/app.css">

    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon-16x16.png">
</head>
<body class="mainEl">

    <div class="page-transition"></div>

    <header class="container main-header">

        <div class="noise-wrapper">
            <div class="noise"></div>
        </div>

        <div class="col-md-1">
            <a class="logo fadeTrans" href="./">
                <h2 class="logo__el">M<span class="logo__el--l">L</span></h2>
            </a>
        </div>
    </header>

    <main class="container">
        <section class="row">

                <?php

                $text = $parsed_json->{$cpt}->{'text'};
                $link = $parsed_json->{$cpt}->{'link'};
                $project = $parsed_json->{$cpt}->{'project'};
                $date = $parsed_json->{$cpt}->{'date'};
                $text = $parsed_json->{$cpt}->{'text'};
                $img = $parsed_json->{$cpt}->{'img'};

                    echo '
                    <div class="col-md-6">
                        <div>
                            <h1 class="glitch-cursor-select glitch-cursor glitch is-glitching desc" data-text="'. $name .'">'. $name .'</h1>
                            <p class="baseline">'. $project . ' – ' .$date .'</p>
                        </div>
                        <div>
                            <p>'. $text .'</p>
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5">
                        <img class="illu" src="'. $img .'" alt="Photo de '. $project .'">
                        <div class="button">
                            <a class="button__el glitch is-glitching fadeTrans" href="'. $link .'" data-text="Aller sur le site 💻">Aller sur le site 💻</a>
                        </div>
                    </div>
                    ';
                 ?>

                <!-- <div>
                    <h1 class="glitch-cursor-select glitch-cursor glitch is-glitching desc" data-text="The jungle snack! Jeu online">The jungle snack! Jeu online</h1>
                    <p class="baseline">Projet scolaire - Juin 2020</p>
                </div>

                <div>
                    <p>Je m’appelle Lucien Mary, j’ai 22 ans. Après une qualification en infographie, j'ai été diplomé en design web et mobile en 2020. Vous pouvez retrouver sur ce site mes meilleurs projets.</p>

                    <p>Je m’appelle Lucien Mary, j’ai 22 ans. Après une qualification en infographie, j'ai été diplomé en design web et mobile en 2020. Vous pouvez retrouver sur ce site mes meilleurs projets.</p>
                </div> -->
        </section>
    </main>

    <footer class="clearfix footer-page footer-page--bottom">
        <div class="container">
            <p class="float-right footer-page__p">Lucien Mary © 2020<a class="fadeTrans" href="./">Accueil</a><a class="button-filled fadeTrans" href="./">Me contacter!</a></p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="/scripts/app.js"></script>
</body>
</html>
