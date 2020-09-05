<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#353535">
    <meta charset="utf-8">
    <title>Accueil | lucienmary.be</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/styles/app.css">

    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon-16x16.png">

    <!-- Primary Meta Tags -->
    <meta name="title" content="Lucien Mary – Retrouvez tous mes projets sur ce site!">
    <meta name="description" content="Ce site contient tous mes plus beaux projets. Vous trouverez également tous mes réseaux et moyen de contact.">

<!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Lucien Mary – Retrouvez tous mes projets sur ce site!">
    <meta property="og:description" content="Ce site contient tous mes plus beaux projets. Vous trouverez également tous mes réseaux et moyen de contact.">
    <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Lucien Mary – Retrouvez tous mes projets sur ce site!">
    <meta property="twitter:description" content="Ce site contient tous mes plus beaux projets. Vous trouverez également tous mes réseaux et moyen de contact.">
    <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
</head>

<body class="body-height mainEl">

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
        <section>
            <header class="col-md-12">
                <h1 class="glitch-cursor-select glitch-cursor glitch is-glitching" data-text="Lucien Mary">Lucien Mary</h1>
                <p class="baseline">Front end developer Junior</p>
            </header>

            <div class="col-md-5">
                <p>Je m’appelle Lucien Mary, j’ai 22 ans. Après une qualification en infographie, j'ai été diplomé en design web et mobile en 2020. Vous pouvez retrouver sur ce site mes meilleurs projets.</p>
            </div>
            <div class="float-md-right">
                <img class="me col-xl-5 col-lg-5 col-md-5 offset-md-0 offset-3 col-6" src="assets/images/lucien@2x.jpg" alt="Photo de Lucien Mary travaillant sur un ordinateur.">
            </div>

            <div class="contact col-md-5">
                <ul class="list-socials">
                    <li>
                        <a href="https://twitter.com/marylucien1998" class="socials fadeTrans">
                            <img class="socials__el" src="assets/images/twitter.png" alt="Logo Twitter lié au compte Twitter de Lucien Mary">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/lucien-mary-437598177/" class="socials fadeTrans">
                            <img class="socials__el" src="assets/images/linkedin.png" alt="Logo Linkedin lié au compte Linkedin de Lucien Mary">
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/lucienmary" class="socials fadeTrans">
                            <img class="socials__el" src="assets/images/github.png" alt="Logo Github lié au compte Github de Lucien Mary">
                        </a>
                    </li>
                </ul>

                <a class="coord fadeTrans" href="mailto:marylucien1998@gmail.com">marylucien1998@gmail.com</a>
                <a class="coord fadeTrans" href="tel:+32479528839">+32 (0)479 52 88 39</a>
            </div>

            <footer class="float-right">
                <a id="scroll" class="scroll" href="">Scroll</a>
            </footer>
        </section>

        <section class="section-projects clearfix">
            <header>
                <h2 class="title-section col-md-12">Projets</h2>
            </header>

            <div class="arrow">
                <a id="arrowLeft" class="arrow__el--left" href="#"></a>
                <a id="arrowRight" class="arrow__el--right" href="#"></a>
            </div>

            <ul id="slider" class="project-container clearfix">

                <?php
                    $json = file_get_contents("./assets/json/projects.json");
                    $parsed_json = json_decode($json);

                    foreach ($parsed_json as $key => $value) {
                        $cpt++;
                        $name = $parsed_json->{$cpt}->{'name'};
                        $desc = $parsed_json->{$cpt}->{'desc'};
                        $date = $parsed_json->{$cpt}->{'date'};
                        $text = $parsed_json->{$cpt}->{'text'};
                        $img = $parsed_json->{$cpt}->{'img'};
                        $current = '';

                        if (($cpt-1) == 0) {
                            $current = 'project--current';
                        }else{
                            $current = 'project--right';
                        }

                        echo '
                        <li class="project '. $current .'" value="'. ($cpt-1) .'">
                            <h3 class="project__h3 col-md-8 col-12">'. $name .'</h3>
                            <p class="project__date col-md-6 col-12">'. $date .'</p>
                            <p class="project__desc col-md-6 col-12">'. $desc .'</p>
                            <div>
                                <a href="desc.php?project='. $cpt .'" class="project__link fadeTrans">
                                    <img class="project__img col-md-7 col-12" src="'. $img .'" alt="Image du projet '. $name .'">
                                </a>
                            </div>

                            <div class="button offset-md-4 col-md-4">
                                <a class="button__el glitch is-glitching fadeTrans" href="desc.php?project='. $cpt .'" data-text="Plus d\'infos">Plus d\'infos</a>
                            </div>
                        </li>';
                    }
                 ?>
            </ul>

            <footer class="offset-md-4 col-md-4 offset-3 col-6">
                <div class="">
                    <ul class="number">
                        <li class="number__li number__li--active">
                            <p value="0">1</p>
                        </li>
                        <li class="number__li">
                            <p value="1">2</p>
                        </li>
                        <li class="number__li">
                            <p value="2">3</p>
                        </li>
                        <li class="number__li">
                            <p value="3">4</p>
                        </li>
                        <li class="number__li">
                            <p value="4">5</p>
                        </li>
                    </ul>
                </div>
            </footer>
        </section>
    </main>

    <footer class="clearfix footer-page">
        <div class="container">
            <p class="float-right footer-page__p">Lucien Mary © 2020<a class="fadeTrans" href="privacy-page.html">vie privée</a><a class="button-filled" id="goToContact" href="#">Me contacter!</a></p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="/scripts/app.js"></script>

</body>
</html>
