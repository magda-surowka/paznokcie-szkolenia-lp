<?php require_once('dist/autoload/Autoloads.php');?>
<!DOCTYPE html>
<!--[if !IE]><!-->
<html lang="pl">
<!--[endif]-->
<!--[if lt IE 9]><html class="lt-ie9" lang="pl"><![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/logo/favicon.png">

    <title>Malwina Chałat | Szkolenia i warsztaty ze stylizacji paznokci</title>
    <meta name="description" content="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Styles -->
    <link href="library/bootstrap-4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel 2 Styles-->
    <link href="library/owl.carousel2-2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <?php include "include/style.php"; ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <script src="library/jquery-3.3.1/jquery-3.3.1.min.js"></script>

    <!-- Owl Carousel 2 Scripts-->
    <script src="library/owl.carousel2-2.3.4/owl.carousel.min.js"></script>
    <?//php plugins_head(); ?>
</head>

<body>
    <?//php plugins_body(); ?>
    <?php include "include/section-header.php"; ?>
    <?php 
	//wygląd komunikatu dostępny w dist/autoload/Autoloads.php w funkcji alerts_create.
	alerts_display($_SESSION['elmts_f_alert'], $alert_flag);?>

    <!-- ============================== SECTION-WELCOME ============================== -->
    <section class="section-welcome">
        <div class="section-wrapper">
            <div class="wrapper-inner">
                <div class="inner-description">
                    <header>
                        <h1>Profesjonalna <br>
                            <span>stylizacja paznokci pod okiem Mistrzyni Świata</span>
                        </h1>
                        <ul class="list-unstyled">
                            <li>- Szeroka gama profesjonalnych szkoleń z zakresu stylizacji paznokci</li>
                            <li>- Niezbędna wiedza do tego, aby stać się najlepszą, zawodową stylistką</li>
                            <li>- Tylko u mnie: najmodniejsze kolory, najlepsze produkty, najnowsza wiedza</li>
                        </ul>
                        <a href="#szkolenia" data-scroll="scroll" class=" btn btn-default">Aktualne szkolenia</a>
                    </header>
                    <div class="inner-logos">
                        <p><strong>współpraca:</strong></p>
                        <img src="img/@temp/logo1.png" alt="">
                        <img src="img/@temp/logo2.png" alt="">
                        <img src="img/@temp/logo3.png" alt="">
                        <img src="img/@temp/logo4.png" alt="">
                    </div>
                </div>
                <div class="inner-image">
                    <div class="bg-border-gold"></div>
                    <img src="img/pictures/zdjecie-welcome.png" alt="">
                </div>
                <ul class="list-unstyled links-social-media">
                    <li>
                        <a href="" target="_blank">
                            <svg class="fill-default-hover" viewBox="-110 1 511 511.99996"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m180 512h-81.992188c-13.695312 0-24.835937-11.140625-24.835937-24.835938v-184.9375h-47.835937c-13.695313 0-24.835938-11.144531-24.835938-24.835937v-79.246094c0-13.695312 11.140625-24.835937 24.835938-24.835937h47.835937v-39.683594c0-39.347656 12.355469-72.824219 35.726563-96.804688 23.476562-24.089843 56.285156-36.820312 94.878906-36.820312l62.53125.101562c13.671875.023438 24.792968 11.164063 24.792968 24.835938v73.578125c0 13.695313-11.136718 24.835937-24.828124 24.835937l-42.101563.015626c-12.839844 0-16.109375 2.574218-16.808594 3.363281-1.152343 1.308593-2.523437 5.007812-2.523437 15.222656v31.351563h58.269531c4.386719 0 8.636719 1.082031 12.289063 3.121093 7.878906 4.402344 12.777343 12.726563 12.777343 21.722657l-.03125 79.246093c0 13.6875-11.140625 24.828125-24.835937 24.828125h-58.46875v184.941406c0 13.695313-11.144532 24.835938-24.839844 24.835938zm-76.8125-30.015625h71.632812v-193.195313c0-9.144531 7.441407-16.582031 16.582032-16.582031h66.726562l.027344-68.882812h-66.757812c-9.140626 0-16.578126-7.4375-16.578126-16.582031v-44.789063c0-11.726563 1.191407-25.0625 10.042969-35.085937 10.695313-12.117188 27.550781-13.515626 39.300781-13.515626l36.921876-.015624v-63.226563l-57.332032-.09375c-62.023437 0-100.566406 39.703125-100.566406 103.609375v53.117188c0 9.140624-7.4375 16.582031-16.578125 16.582031h-56.09375v68.882812h56.09375c9.140625 0 16.578125 7.4375 16.578125 16.582031zm163.0625-451.867187h.003906zm0 0">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank">
                            <svg class="fill-default-hover" viewBox="0 0 512.00096 512.00096"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0">
                                </path>
                                <path
                                    d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0">
                                </path>
                                <path
                                    d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ============================== SECTION-OFFER ============================== -->
    <section class="section-offer" id="szkolenia">
        <div class="section-wrapper">
            <div class="wrapper-inner">
                <header>
                    <h2>Najbliższe szkolenia</h2>
                </header>
                <div class="inner-offer">
                    <div class="owl-carousel-offer owl-carousel">
                        <div class="offer-item">
                            <div class="item-calendar">
                                <div class="bg-border-gold"></div>
                                <h3 class="month">Luty 2022</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        14-18 luty, godz. 15.00-21.00
                                        <h4>Szkolenie COMPLEX <br> (grupa max 6 os)</h4>
                                        <p class="price"> cena: <strong>2500 zł</strong></p>
                                    </li>
                                    <li>
                                        15 luty, godz. 9.00-15:00
                                        <h4>Warsztaty Naklejki stempelki <br> (grupa max 12 os)</h4>
                                        <p class="price">cena:<strong> 500 zł</strong></p>
                                    </li>
                                    <li>
                                        17 luty, godz. 9.00-15.00
                                        <h4>Warsztaty Idealny frencz, idealny babyboomer (grupa max 6 os)</h4>
                                        <p class="price">cena:<strong> 600 zł</strong></p>
                                    </li>
                                    <li>
                                        22-25 luty, godz. 8.30-16.30
                                        <h4>Szkolenie Maraton ćwiczeniowy <br> (grupa max 4 os)</h4>
                                        <p class="price">cena:<strong> 2500 zł</strong></p>
                                    </li>
                                    <li>
                                        26-27 luty, godz. 9.00-15.00
                                        <h4>2 zjazd szkoły półrocznej stylizacji paznokci</h4>
                                        <p class="price">cena:<strong> 900 zł</strong></p>
                                    </li>
                                </ul>
                                <a href="#formularz-zapisu" data-scroll="scroll"
                                    class="btn btn-default btn-absolute">Zapisz się na
                                    szkolenie</a>
                            </div>
                        </div>
                        <div class="offer-item">
                            <div class="item-calendar">
                                <div class="bg-border-gold"></div>
                                <h3 class="month">Marzec 2022</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        4-6 marzec
                                        <h4>Kołobrzeg LEDA SPA, <br> NAILS CAMP Dzień Kobiet <br> (grupa max 12 os)
                                        </h4>
                                        <p class="price">cena:<strong> 1200 zł</strong></p>
                                    </li>
                                    <li>
                                        9-10 marzec
                                        <h4>Szkolenie Podstawa żelowa Migdał/kwadrat (grupa max 6 os)</h4>
                                        <p class="price">cena:<strong> 1200 zł</strong></p>
                                    </li>
                                    <li>
                                        15 marzec, godz. 9.00-15.00
                                        <h4>Szkolenie Manicure hybrydowy BASIC (grupa max 6 os)</h4>
                                        <p class="price">cena:<strong> 450 zł</strong></p>
                                    </li>
                                    <li>
                                        19 marzec, godz. 9.00-15.00
                                        <h4>Szkolenie Tipsy come back! <br> (grupa max 6 os)</h4>
                                        <p class="price">cena:<strong> 600 zł</strong></p>
                                    </li>
                                    <li>
                                        20 marzec, godz. 9.00-17.00
                                        <h4>Warsztaty wiosenne zdobienia mix media (grupa max 12 os)</h4>
                                        <p class="price">cena:<strong> 400 zł</strong></p>
                                    </li>
                                    <li>
                                        24 marzec, godz. 9.00-17.00
                                        <h4>Szkolenie 5 kształtów salonowych (grupa max 6 os)</h4>
                                        <p class="price">cena:<strong> 800 zł</strong></p>
                                    </li>
                                    <li>
                                        25 marzec, godz. 9.00-15.00
                                        <h4>Szkolenie Idealna ballerina <br> (grupa max 6 os) </h4>
                                        <p class="price">cena:<strong> 600 zł</strong></p>
                                    </li>
                                    <li>
                                        26-27 marzec, godz. 9.00-15.00
                                        <h4>3 zjazd szkoły półrocznej <br> (grupa max 6 os)</h4>
                                        <p class="price">cena:<strong> 900 zł</strong></p>
                                    </li>
                                </ul>
                                <a href="#formularz-zapisu" data-scroll="scroll"
                                    class="btn btn-default btn-absolute">Zapisz się na
                                    szkolenie</a>
                            </div>
                        </div>
                        <div class="offer-item">
                            <div class="item-calendar">
                                <div class="bg-border-gold"></div>
                                <h3 class="month">Kwiecień 2022</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        4-6 kwiecień, godz. 15.00-21.00
                                        <h4>Szkolenie COMPLEX <br> (grupa max 6 os) </h4>
                                        <p class="price">cena:<strong> 2500 zł</strong></p>
                                    </li>
                                    <li>
                                        4 kwiecień, godz. 8.30-14.30
                                        <h4>Szkolenie Perfekcyjny migdał <br> (grupa max 6 os)</h4>
                                        <p class="price">cena:<strong> 600 zł</strong></p>
                                    </li>
                                    <li>
                                        6 kwiecień, godz. 8.30-14.30
                                        <h4>Szkolenie Tipsy Come Back <br> (grupa max 6 os)</h4>
                                        <p class="price">cena:<strong> 600 zł</strong></p>
                                    </li>
                                    <li>
                                        8 kwiecień, godz. 8.30-14.30
                                        <h4>Warsztaty kwiaty akwarelowe <br> (grupa max 12 os)</h4>
                                        <p class="price">cena:<strong> 400 zł</strong></p>
                                    </li>
                                    <li>
                                        23-24 kwiecień, godz. 9.00-15.00
                                        <h4>4 zjazd szkoły półrocznej</h4>
                                        <p class="price">cena:<strong> 900 zł</strong></p>
                                    </li>
                                    <li>
                                        23 kwiecień, godz. 15-30-21.30
                                        <h4>Szkolenie Ostra jak SZTYLET <br> (grupa max 6 os)</h4>
                                        <p class="price">cena:<strong> 800 zł</strong></p>
                                    </li>
                                    <li>
                                        24 kwiecień, godz. 15-30-21.30
                                        <h4>Szkolenie Manicure hybrydowy BASIC (grupa max 6 os) </h4>
                                        <p class="price">cena:<strong> 450 zł</strong></p>
                                    </li>
                                </ul>
                                <a href="#formularz-zapisu" class="btn btn-default btn-absolute">Zapisz się na
                                    szkolenie</a>
                            </div>
                        </div>
                        <div class="offer-item">
                            <div class="item-calendar">
                                <div class="bg-border-gold"></div>
                                <h3 class="month">Maj 2022</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        9-12 maj, godz. 15.00-21.00
                                        <h4>Szkolenie maraton ćwiczeniowy <br> (grupa max 4 os) </h4>
                                        <p class="price">cena:<strong> 2500 zł</strong></p>
                                    </li>
                                    <li>
                                        9 maj, godz. 8.30-14.30
                                        <h4>Szkolenie Idealna ballerina <br> (grupa max 6 os)</h4>
                                        <p class="price">cena:<strong> 600 zł</strong></p>
                                    </li>
                                    <li>
                                        12 maj, godz. 8.30-14.30
                                        <h4>Szkolenie perfekcyjny migdał (grupa max 6 os)</h4>
                                        <p class="price">cena:<strong> 600 zł</strong></p>
                                    </li>
                                    <li>
                                        28-29 maj, godz. 9.00-15.00
                                        <h4>5 zjazd szkoły półrocznej <br> (grupa max 6 os)</h4>
                                        <p class="price">cena:<strong> 900 zł</strong></p>
                                    </li>
                                    <li>
                                        28 maj, godz. 15.30-21.30
                                        <h4>Warsztaty kwiaty akwarelowe <br> (grupa max 12 os)</h4>
                                        <p class="price">cena:<strong> 400 zł</strong></p>
                                    </li>
                                    <li>
                                        29 maj, godz. 15.30-21.30
                                        <h4>Warsztaty MIX MEDIA SUMMER <br> (grupa max 12 os)</h4>
                                        <p class="price">cena:<strong> 400 zł</strong></p>
                                    </li>
                                </ul>
                                <a href="#formularz-zapisu" data-scroll="scroll"
                                    class="btn btn-default btn-absolute">Zapisz się na
                                    szkolenie</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
        $('.owl-carousel-offer').owlCarousel({
            center: true,
            loop: true,
            nav: true,
            navText: ["<img src='img/icons/arrow.svg'>", "<img src='img/icons/arrow.svg'>"],
            dots: false,
            items: 1,
            autoHeight: true,
            slideTransition: 'linear',
        });
        </script>

    </section>

    <!-- ============================== SECTION-ABOUT ============================== -->
    <section class="section-about" id="o-mnie">
        <div class="section-wrapper">
            <div class="wrapper-inner">
                <div class="inner-description">
                    <header>
                        <h2>Malwina Chałat</h2>
                        <p>Mistrzyni Świata w stylizacji paznokci</p>
                    </header>
                    <div class="description-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus incidunt velit dolores
                            voluptatum
                            sapiente itaque distinctio quia saepe laudantium necessitatibus iste doloremque fuga omnis,
                            cumque
                            quam rem ea! Ea ad commodi maxime unde ratione assumenda deserunt quaerat dolore iste
                            perspiciatis,
                            saepe vero, est eligendi reprehenderit nemo nostrum molestias voluptates veritatis.</p>
                    </div>
                </div>
                <div class="inner-image">
                    <div class="image">
                        <div class="bg-border-gold"></div>
                        <img src="img/pictures/zdjecie-about.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== SECTION-TESTIMONIALS ============================== -->
    <section class="section-testimonials" id="opinie">
        <div class="section-wrapper">
            <header>
                <h2>Opinie Kursantek</h2>
            </header>
            <div class="testimonials-content">
                <div class="owl-carousel-testimonials owl-carousel">
                    <div class="testimonial">
                        <h2>Polecam serdecznie
                            <p>Anna Nowak</p>
                        </h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, animi ut. Suscipit excepturi
                            error quas fugit?</p>
                    </div>
                    <div class="testimonial">
                        <h2>Super szkolenie
                            <p>Ola Jakubiak</p>
                        </h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, animi ut. Suscipit excepturi
                            error quas fugit? Placeat ex veritatis modi, ipsa voluptate voluptatem qui culpa, molestiae
                            ea quaerat distinctio sint.</p>
                    </div>
                    <div class="testimonial">
                        <h2>Cenna wiedza
                            <p>Kasia Olszewska</p>
                        </h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, animi ut. Suscipit excepturi
                            error quas fugit? Placeat ex veritatis modi, ipsa voluptate voluptatem qui culpa, molestiae
                            ea quaerat.</p>
                    </div>
                    <div class="testimonial">
                        <h2>Przystępne ceny
                            <p>Iga Wasiak</p>
                        </h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, animi ut. Suscipit excepturi
                            error quas fugit? Placeat ex veritatis modi, ipsa voluptate voluptatem qui culpa, molestiae.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    $('.owl-carousel-testimonials').owlCarousel({
        center: true,
        loop: true,
        nav: true,
        navText: ["<img src='img/icons/arrow.svg'>", "<img src='img/icons/arrow.svg'>"],
        dots: false,
        items: 3,
        margin: 10,
    });
    </script>

    <script src="js/skrollr.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator
                .userAgent)) {} else {
            if ($(window).width() < 976) {} else {
                var s = skrollr.init();
            }
        }
    });
    </script>

    <?php include "include/section-footer.php"; ?>
    <?php include "include/section-footer-scripts.php"; ?>