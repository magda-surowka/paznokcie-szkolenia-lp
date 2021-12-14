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
    <!-- <link rel="shortcut icon" type="image/png" href="img/logo/favicon.png"> -->

    <title>Manicure - szkolenia</title>
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
                <header>
                    <h1>Profesjonalne
                        <p>szkolenia manicure</p>
                        <p>pod okiem wieloletniej Trenerki</p>
                        <p>Malwiny Chalat</p>
                    </h1>
                </header>
            </div>
            <div class="wrapper-icons">
                <img class="img-absolute" src="img/pictures/zdjecie-welcome.png" alt="">
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
                <div class="icon">
                    <div class="icon-image">
                        <img src="img/icons/heart.svg" alt="">
                    </div>
                    100% satysfakcji
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== SECTION-ABOUT ============================== -->

    <section class="section-about">
        <div class="section-wrapper">
            <div class="about-inner">
                <img src="img/pictures/1000_F_224302931_8eMq4kZ3II640pvExig1bhtyDlrmuNct.png" alt=""
                    class="about-image">
                <header>
                    <h2>Chcesz tworzyć arcydzieła na paznokciach Klientek?
                        <p>zapisz się na <strong>szkolenie!</strong> </p>
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