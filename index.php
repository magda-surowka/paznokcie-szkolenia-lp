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
                <div class="inner-image">
                    <img class="img-absolute" src="img/pictures/zdjecie-welcome.png" alt="">
                </div>
                <div class="inner-description">
                    <header>
                        <p>Profesjonalna</p>
                        <p>stylizacja paznokci</p>
                        <p>pod okiem Mistrzyni Świata</p>
                        <p>Malwiny Chałat</p>
                    </header>
                    <div class="wrapper-icons">
                        <div class="icon">
                            <div class="icon-image">
                                <img src="img/icons/heart.svg" alt="">
                            </div>
                            Sprawdzone metody nauczania
                        </div>
                        <div class="icon">
                            <div class="icon-image">
                                <img src="img/icons/heart.svg" alt="">
                            </div>
                            Aktualna wiedza
                        </div>
                        <div class="icon">
                            <div class="icon-image">
                                <img src="img/icons/heart.svg" alt="">
                            </div>
                            Na bieżąco z trendami
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== SECTION-CTA ============================== -->
    <section class="section-cta">
        <div class="section-wrapper">
            <div class="cta-inner">
                <img src="img/pictures/1000_F_224302931_8eMq4kZ3II640pvExig1bhtyDlrmuNct.png" alt="" class="cta-image"
                    data-top="transform: translateX(40px);" data-bottom="transform: translateX(-40px);">
                <header>
                    <h2>Chcesz tworzyć <strong>arcydzieła</strong> na paznokciach Klientek?
                        <p>zapisz się na szkolenie!</p>
                    </h2>
                </header>
                <div class="inner-description">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quibusdam odit, nihil modi
                        cupiditate
                        officiis error voluptas. Dolorem, quod? Quisquam voluptatem est architecto eveniet, veritatis
                        earum
                        facere, beatae sequi officia ipsa quis officiis, harum placeat cum exercitationem quas ullam
                        necessitatibus.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat laborum non aperiam! Soluta
                        necessitatibus nesciunt, aut reiciendis, dolores eveniet magnam animi repellendus vitae sequi
                        earum
                        consectetur adipisci, assumenda ea. Animi dolores mollitia, inventore nemo hic perferendis
                        reprehenderit sequi odit dolorum blanditiis totam sint, quos earum placeat deleniti dolor
                        adipisci
                        explicabo.</p>
                    <a href="#oferta" class="btn btn-color" data-scroll="scroll">Sprawdź aktualne szkolenia</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== SECTION-ABOUT ============================== -->
    <section class="section-about" id="o-mnie">
        <div class="section-wrapper">
            <header>
                <h2>Malwina Chałat</h2>
                <p>Mistrzyni świata w stylizacji paznokci</p>
            </header>
            <div class="about-inner">
                <div class="inner-element">
                    <h3>Dołącz do grupy zawodowych stylistek paznokci</h3>
                    <p>to najlepsza inwestycja w przyszłość!</p>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quasi impedit eligendi aliquam!
                        Quod libero sunt molestias voluptatum nisi voluptates.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, quisquam labore ipsum
                        placeat ratione aliquam aliquid, eius error accusantium sit neque vel architecto voluptates
                        optio quis suscipit voluptatibus nobis illo?</p>
                </div>
                <div class="inner-element" data-top="transform: translateY(-40px);"
                    data-bottom="transform: translateY(40px);">
                    <img src="img/pictures/zdjecie-about.png" alt="">
                    <img class="image-absolute" src="img/pictures/1000_F_149753455_eoqBf6ODruE6TXutUToBDb1nqjU0YV82.png"
                        alt="">
                </div>
                <div class="inner-element">
                    <a href="#trenerki" class="btn btn-default" data-scroll="scroll">Poznaj <br> <strong>nasze
                            Trenerki</strong> </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== SECTION-TESTIMONIALS============================== -->
    <section class="section-testimonials">
        <div class="section-wrapper">
            <div class="testimonials-content">
                <header>
                    <h2>Co mówią <strong>na mój temat</strong></h2>
                </header>
                <div class="owl-carousel-testimonials owl-carousel">
                    <div class="testimonial">
                        <img class="img-absolute" src="img/pictures/AdobeStock_246045826_Preview.png" alt="">
                        <h2>Polecam serdecznie
                            <span>Anna Nowak</span>
                        </h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, animi ut. Suscipit excepturi
                            error quas fugit?</p>
                    </div>
                    <div class="testimonial">
                        <img class="img-absolute" src="img/pictures/AdobeStock_246045826_Preview.png" alt="">
                        <h2>Super szkolenie
                            <span>Ola Jakubiak</span>
                        </h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, animi ut. Suscipit excepturi
                            error quas fugit? Placeat ex veritatis modi, ipsa voluptate voluptatem qui culpa, molestiae
                            ea quaerat distinctio sint.</p>
                    </div>
                    <div class="testimonial">
                        <img class="img-absolute" src="img/pictures/AdobeStock_246045826_Preview.png" alt="">
                        <h2>Cenna wiedza
                            <span>Kasia Olszewska</span>
                        </h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic, animi ut. Suscipit excepturi
                            error quas fugit? Placeat ex veritatis modi, ipsa voluptate voluptatem qui culpa, molestiae
                            ea quaerat.</p>
                    </div>
                    <div class="testimonial">
                        <img class="img-absolute" src="img/pictures/AdobeStock_246045826_Preview.png" alt="">
                        <h2>Przystępne ceny
                            <span>Iga Wasiak</span>
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
        dots: false,
        items: 3,
        margin: 40,
    });
    </script>

    <!-- ============================== SECTION-OFFER-HEADER============================== -->
    <section class="section-offer-header" id="oferta">
        <div class="section-wrapper">
            <header>
                <h2>Oferta szkoleń</h2>
                <p>dołącz do grona zadowolonych kursantek</p>
            </header>
            <div class="offer-description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque non ad eos voluptate odio saepe
                    deserunt
                    eligendi! Libero voluptatum similique veritatis repudiandae culpa! Quam magnam dolorem illo, maxime
                    deserunt cumque.</p>
            </div>
            <div class="color-element">
                <p>Skorzystaj <br> z systemu ratalnego MediRaty</p>
            </div>
        </div>
    </section>

    <!-- ============================== SECTION-OFFER============================== -->
    <section class="section-offer">
        <div class="section-wrapper">
            <div class="offer-content">
                <ul class="offer-list">
                    <li class="heading">Szkolenia</li>
                    <li>
                        <a href="">Szkolenie COMPLEX</a>
                    </li>
                    <li>
                        <a href="">Szkolenie maraton ćwiczeniowy</a>
                    </li>
                    <li>
                        <a href="">Szkolenie perfekcyjny manicure MASTER</a>
                    </li>
                    <li>
                        <a href="">NAILS CAMP Dzień Kobiet</a>
                    </li>
                    <li>
                        <a href="">Szkolenie Podstawa żelowa Migdał /kwadrat </a>
                    </li>
                    <li>
                        <a href="">Manicure hybrydowy BASIC</a>
                    </li>
                    <li>
                        <a href="">Szkolenie Tipsy come back!</a>
                    </li>
                    <li>
                        <a href="">Szkolenie 5 kształtów salonowych</a>
                    </li>
                    <li>
                        <a href="">Szkolenie Idealna ballerina</a>
                    </li>
                    <li>
                        <a href="">Szkolenie Perfekcyjny migdał</a>
                    </li>
                    <li>
                        <a href="">Ostra jak SZTYLET</a>
                    </li>
                </ul>
                <ul class="offer-list">
                    <li class="heading">Warsztaty</li>
                    <li>
                        <a href="">Warsztaty perfekcyjna forma</a>
                    </li>
                    <li>
                        <a href="">Warsztaty Naklejki stempelki</a>
                    </li>
                    <li>
                        <a href="">Warsztaty Idealny frencz, idealny babyboomer</a>
                    </li>
                    <li>
                        <a href="">Warsztaty wiosenne zdobienia mix media</a>
                    </li>
                    <li>
                        <a href=""> Warsztaty kwiaty akwarelowe</a>
                    </li>
                </ul>
                <ul class="offer-list">
                    <li class="heading">Szkoły</li>
                    <li>
                        <a href="">Półroczna szkoła stylizacji paznokci</a>
                    </li>
                </ul>
            </div>
            <a href="#faq" class="btn btn-default" data-scroll="scroll">Sprawdź <strong>
                    najczęściej zadawane pytania</strong></a>
        </div>
    </section>

    <!-- <div class="modal-service-wrapper">
        <div class="modal-service">
            <div class="service-inner">
                <button type="button" class="service-button" id="offer-calendar-button-close">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </button>
                <div class="service-content">
                    <ul class="offer-list">
                        <li class="heading">Styczeń 2022</li>
                        <li>
                            <strong>3 styczeń 16.00 - 19.00</strong> warsztaty perfekcyjna forma <p>koszt 200 zł
                                (grupa
                                max 12 os)</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong> 5-9 stycznia 8.30 - 16.30</strong> szkolenie COMPLEX <p>koszt 2500 zł - (grupa
                                max 6
                                os) brak miejsc</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>11-14 stycznia 8.30 - 16.30</strong> szkolenie maraton ćwiczeniowy <p>koszt 2500
                                zł
                                (grupa max 4 os) brak
                                miejsc</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>19 styczeń 8.00 - 16.00</strong> szkolenie perfekcyjny manicure MASTER <p>koszt 800
                                zł, grupa max 6
                                os </p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>24-28 styczeń 15.00 - 21.00</strong> szkolenie COMPLEX <p>koszt 2500zł - (grupa
                                max
                                6 os) brak miejsc</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>29-30 styczeń 9.00-15.00</strong> 1 zjazd szkoły półrocznej stylizacji paznokci <p>
                                koszt
                                900 zł </p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                    </ul>
                    <ul class="offer-list">
                        <li class="heading">LUTY 2022</li>
                        <li><strong>14-18 luty 15.00 - 21.00</strong> szkolenie COMPLEX <p>koszt 2500zł - (grupa max
                                6 os)</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>15 luty 9.00- 15.00</strong> warsztaty Naklejki stempelki <p>koszt 500 zł (grupa
                                max 12
                                os)</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>17 luty 9.00 - 15.00</strong> warsztaty Idealny frencz, idealny babyboomer <p>koszt
                                600
                                zł
                                grupa max 6 os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>22-25 luty 8.30 - 16.30 </strong> szkolenie Maraton ćwiczeniow<p> koszt 2500
                                (grupa max
                                4 os) </p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>26-27 luty 9.00 - 15.00</strong> 2 zjazd szkoły półrocznej stylizacji paznokci <p>
                                koszt
                                900
                                zł </p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                    </ul>
                    <ul class="offer-list">
                        <li class="heading">MARZEC 2022</li>
                        <li><strong>4-6 marca</strong> NAILS CAMP Dzień Kobiet (Kołobrzeg LEDA SPA) <p>Koszt 1200zł
                                (max 12
                                os)</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong> 9-10 marzec</strong> szkolenie Podstawa żelowa Migdał / kwadrat <p>koszt 1200
                                (grupa
                                max 6 os)</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>15 marzec 9.00 - 15.00</strong> szkolenie Manicure hybrydowy BASIC <p>450 zł (grupa
                                max
                                6 os)</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>19 marca 9.00 - 15.00</strong> Szkolenie Tipsy come back! <p>koszt 600 zł (grupa max
                                6
                                os)</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>20 marca 9.00 - 17.00</strong> warsztaty wiosenne zdobienia mix media <p>koszt 400
                                zł (
                                grupa max 12 os)</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>24 marca 9.00 - 17.00)</strong> szkolenie 5 kształtów salonowych <p>koszt 800 zł
                                (grupa
                                max 6 os)</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>25 marca 9.00 - 15.00</strong> Szkolenie Idealna ballerina <p>koszt 600zł grupa max
                                6
                                os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong> 26-27 marca 9.00 - 15.00)</strong> 3 zjazd szkoły półrocznej <p>koszt 900 zł (grupa
                                max
                                6 os)</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                    </ul>
                    <ul class="offer-list">
                        <li class="heading">KWIECIEŃ 2022</li>
                        <li><strong>4-8 kwietnia, 15.00-21.00</strong> szkolenie COMPLEX <p>koszt 2500zł - (grupa max 6
                                os)</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>4 kwietnia, 8.30-14.30 </strong> Szkolenie Perfekcyjny migdał <p>koszt 600zł, grupa
                                max
                                6 os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>6 kwietnia, 8.30 - 14.30</strong> Szkolenie Tipsy Come Back <p>koszt 600zł grupa
                                max
                                6
                                os </p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>8 kwietnia, 8.30 - 14.30</strong> warsztaty kwiaty akwarelowe <p>koszt 400 zł,
                                grupa
                                max 12 os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>23-24 kwietnia, 9.00-15.00</strong> 4 zjazd szkoły półrocznej <p>koszt 900 zł, grupa
                                max 6
                                os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>23 kwietnia, 15.30 - 21.30</strong> Ostra jak SZTYLET <p>koszt 800 zł, grupa max 6
                                os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>24 kwietnia, 15.30-21.30</strong> szkolenie Manicure hybrydowy BASIC <p>koszt 450
                                zł, grupa
                                max 6 os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                    </ul>
                    <ul class="offer-list">
                        <li class="heading">MAJ 2022</li>
                        <li><strong>9-12 maja, 15.00- 21.00</strong> szkolenie maraton ćwiczeniowy <p>koszt 2500, grupa
                                max
                                4 os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>9 maj 8.30 - 14.30</strong> Szkolenie Idealna ballerina <p>koszt 600zł, grupa max 6
                                os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>10 maj 8.30 - 14.30</strong> Szkolenie perfekcyjny migdał <p>koszt 600zł, grupa max
                                6
                                os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>12 maj 8.30 - 14.30</strong> Szkolenie Tipsy Come Back <p>koszt 600zł, grupa max 6
                                os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>28-29 maj 9.00-15.00</strong> 5 zjazd szkoły półrocznej <p>koszt 900 zł, grupa max 6
                                os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>28 maj 15.30 - 21.30</strong> warsztaty kwiaty akwarelowe <p>koszt 400 zł, grupa
                                max
                                12
                                os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                        <li><strong>29 maja 15.30 - 21.30</strong> warsztaty MIX MEDIA SUMMER <p>koszt 400 zł, grupa
                                max 12 os</p>
                            <a href="#formularz-zapisu" class="btn btn-color" data-scroll="scroll">Zapisz się</a>
                        </li>
                    </ul>
                    <div class="hidden-element"></div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- ============================== SECTION-TRAINERS ============================== -->
    <section class="section-trainers" id="trenerki">
        <img src="img/pictures/1000_F_149753891_dK8lAlNcZ8MdeTMbUkyGwxaiRWCEyeFR.png" alt="" class="img-absolute"
            data-top="transform: translateY(-80px);" data-bottom="transform: translateY(80px);">
        <div class="section-wrapper">
            <div class="trainers-content">
                <header>
                    <h2> Nasze <strong>trenerki</strong></h2>
                </header>
                <div class="owl-carousel-trainers owl-carousel">
                    <div class="trainer" data-top="transform: translateY(-30px);"
                        data-bottom="transform: translateY(30px);">
                        <h2>Imię i nazwisko
                            <span>stylistka paznokci</span>
                        </h2>
                        <img src="img/pictures/close-up-portrait-smiling-young-woman-looking-camera.jpg" alt="">
                    </div>
                    <div class="trainer" data-top="transform: translateY(30px);"
                        data-bottom="transform: translateY(-30px);">
                        <h2>Imię i nazwisko
                            <span>stylistka paznokci</span>
                        </h2>
                        <img src="img/pictures/close-up-portrait-smiling-young-woman-looking-camera.jpg" alt="">
                    </div>
                    <div class="trainer" data-top="transform: translateY(-30px);"
                        data-bottom="transform: translateY(30px);">
                        <h2>Imię i nazwisko
                            <span>stylistka paznokci</span>
                        </h2>
                        <img src="img/pictures/close-up-portrait-smiling-young-woman-looking-camera.jpg" alt="">
                    </div>
                    <div class="trainer" data-top="transform: translateY(30px);"
                        data-bottom="transform: translateY(-30px);">
                        <h2>Imię i nazwisko
                            <span>stylistka paznokci</span>
                        </h2>
                        <img src="img/pictures/close-up-portrait-smiling-young-woman-looking-camera.jpg" alt="">
                    </div>
                    <div class="trainer" data-top="transform: translateY(-30px);"
                        data-bottom="transform: translateY(30px);">
                        <h2>Imię i nazwisko
                            <span>stylistka paznokci</span>
                        </h2>
                        <img src="img/pictures/close-up-portrait-smiling-young-woman-looking-camera.jpg" alt="">
                    </div>
                    <div class="trainer" data-top="transform: translateY(30px);"
                        data-bottom="transform: translateY(-30px);">
                        <h2>Imię i nazwisko
                            <span>stylistka paznokci</span>
                        </h2>
                        <img src="img/pictures/close-up-portrait-smiling-young-woman-looking-camera.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    $('.owl-carousel-trainers').owlCarousel({
        center: true,
        loop: true,
        nav: true,
        dots: false,
        items: 3,
        margin: 20,
    });
    </script>

    <!-- ============================== SECTION-FAQ ============================== -->
    <section class="section-faq" id="faq">
        <div class="section-wrapper">
            <header>
                <h2>FAQ</h2>
                <p>czyli najczęściej zadawane pytania</p>
            </header>
            <div class="accordion" id="accordion">
                <div class="accordion-item">
                    <div class="item-header" id="heading-1">
                        <button class="" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true"
                            aria-controls="collapse-1">
                            <span>Jak mogę zapisać się na szkolenie?</span>
                        </button>
                    </div>
                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
                        <div class="item-description">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus ipsa corrupti
                                soluta ducimus magni eveniet. Soluta, veniam? Ad tempora nihil non eum. Mollitia est
                                consequuntur similique ex et velit quod!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="item-header" id="heading-2">
                        <button class="collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false"
                            aria-controls="collapse-2">
                            <span>Czy po szkoleniu dostanę certyfikat?</span>
                        </button>
                    </div>
                    <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
                        <div class="item-description">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus ipsa corrupti
                                soluta ducimus magni eveniet. Soluta, veniam? Ad tempora nihil non eum. Mollitia est
                                consequuntur similique ex et velit quod!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="item-header" id="heading-3">
                        <button class="collapsed" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false"
                            aria-controls="collapse-3">
                            <span>W jaki sposób należy dokonać opłaty za szkolenie?</span>
                        </button>
                    </div>
                    <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">
                        <div class="item-description">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus ipsa corrupti
                                soluta ducimus magni eveniet. Soluta, veniam? Ad tempora nihil non eum. Mollitia est
                                consequuntur similique ex et velit quod!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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