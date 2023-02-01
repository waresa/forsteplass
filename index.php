<?php

//check if form is submitted and if it is, run the url through page speed insights

if (isset($_POST['url'])) {
  $url = $_POST['url'];
  // $api_key = 'AIzaSyDUSrjbrZUN8hbpS26S9eZb-IMDn9MVI9M';
  // $url = urlencode($url);
  // $request = "https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=$url&key=$api_key";
  // $response = file_get_contents($request);
  // $json = json_decode($response, true);
  // $seo_score = $json['lighthouseResult']['categories']['seo']['score'];

  header("Location: https://pagespeed.web.dev/report?url=$url");
}




?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Førsteplass</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <h4>Første<span>Plass</span></h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Hjem</a></li>
                            <li class="scroll-to-section"><a href="#services">Om Oss</a></li>
                            <li class="scroll-to-section"><a href="#about">Tjenester</a></li>
                            <!-- <li class="scroll-to-section"><a href="#blog">Blog</a></li>  -->
                            <li class="scroll-to-section">
                                <div class="main-red-button"><a href="#contact">Book Møte</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Meny</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <h6>Velkommen til Førsteplass.no</h6>
                                <h2>Innovative <em>Løsninger</em> For <span>Din</span> Digitale Vekst</h2>
                                <p>Analyser din nettside og sjekk dens ytelsesproblemer og SEO score nå.</p>
                                <form id="search" action="index.php" method="POST">
                                    <fieldset>
                                        <input type="text" name="url" class="email" placeholder="Din nettside..."
                                            autocomplete="on" required>
                                    </fieldset>
                                    <fieldset>
                                        <button type="submit" name="submit" class="main-button">Analyser</button>
                                    </fieldset>
                                </form>
                                <?php
                ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/banner-img.png" alt="team meeting">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>Oppdag <span>Tjenester</span> Vi Tilbyr Våre <em>Kunder</em></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="hidden-content">
                                <h4>Utvikling</h4>
                                <p>Utvikling av reponsive og funksjonelle applikasjoner som nettsider basert på dine
                                    krav.</p>
                            </div>
                            <div class="showed-content">
                                <h4 id="service-names">Utvikling</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="hidden-content">
                                <h4>Digital Markedsføring</h4>
                                <p>Markedsføring av produkter via bl. a. Google, Facebook, Instagram og TikTok.</p>
                            </div>
                            <div class="showed-content">
                                <h4 id="service-names">Markedsføring</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="hidden-content">
                                <h4>Søkemotoroptimalisering</h4>
                                <p>Vi sikrer deg førsteplass i søkeresultater med våre SEO-løsninger.</p>
                            </div>
                            <div class="showed-content">
                                <h4 id="service-names">SEO</h4>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="hidden-content">
                                <h4>Automatisering</h4>
                                <p>Effektivisering av ulike oppgaver med vår automatiseringsteknologi.</p>
                            </div>
                            <div class="showed-content">
                                <h4 id="service-names">Automatisering</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <img src="assets/images/about-left-image.png" alt="person graphic">
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="services">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="icon">
                                        <img src="assets/images/service-icon-01.png" alt="reporting">
                                    </div>
                                    <div class="right-text">
                                        <h4>Utvikling</h4>
                                        <p>Vi utvikler responsive nettsider som passer dine behov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                                    <div class="icon">
                                        <img src="assets/images/service-icon-02.png" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>Digital Markedsføring</h4>
                                        <p>Vi bruker moderne strategier for å markedsføre dine produkter og tjenester.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                                    <div class="icon">
                                        <img src="assets/images/service-icon-03.png" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>SEO</h4>
                                        <p>Øk din online synlighet og nå flere kunder med våre effektive SEO-strategier.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                                    <div class="icon">
                                        <img src="assets/images/service-icon-04.png" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4>Automatisering</h4>
                                        <p>Effektiviser din virksomhet med vår automatiseringsteknologi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="our-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="left-image">
                        <img src="assets/images/img-2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="section-heading">
                        <h2>Innovative <em>Løsninger</em> For <span>Digital</span> Suksess</h2>
                        <p>Vi er et team av dyktige profesjonelle innen bl. a. webdesign, programvareutvikling, digital
                            markedsføring, SEO, og automatisering som er dedikert til å levere innovative løsninger som
                            hjelper deg å lykkes i den digitale verden. Vi holder oss oppdatert på de siste trendene og
                            teknologiene for å hjelpe våre kunder med å få mest mulig ut av sine digitale
                            investeringer..</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="first-bar progress-skill-bar">
                                <h4>Nettside Utvikling</h4>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="second-bar progress-skill-bar">
                                <h4>Digital Markedsføring og SEO</h4>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="third-bar progress-skill-bar">
                                <h4>Automatisering</h4>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>Ta gjerne kontakt med oss om dine behov - vi står klare til å hjelpe.</h2>
                        <div class="phone-info">
                            <h4>Du kan også kontakte oss via epost: <span><i class="fa fa-envelope"></i> <a
                                        href="#">post@forsteplass.no</a></span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Navn" autocomplete="on"
                                        required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Epost" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" type="text" class="form-control" id="message"
                                        placeholder="Melding" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button ">Kontakt Oss</button>
                                </fieldset>
                            </div>
                        </div>
                        <div class="contact-dec">
                            <img src="assets/images/contact-decoration.png" alt="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                    <p>Førsteplass.no
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>