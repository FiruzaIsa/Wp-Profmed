<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php
bloginfo('charset'); ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Stylesheets -->


    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,800,900&display=swap&subset=cyrillic,cyrillic-ext"
        rel="stylesheet">

    <?php wp_head(); ?>

    <title><?php
     global $page, $paged;
     wp_title( '|', true, 'right' );
     bloginfo( 'name' );
     $site_description = get_bloginfo( 'description', 'display' );
     if ( $site_description && ( is_home() || is_front_page() ) )
     echo " | $site_description";
     if ( $paged >= 2 || $page >= 2 )
     echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
      ?>
   </title>
</head>

<body>
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-sm-12">
                    <div class="container">
                        <div class="row">
                            <div class=" col-12 d-flex justify-content-between">
                                <div class="info-box d-lg-inline-block">
                                    <ul>
                                        <li><img src="<?php bloginfo('template_url'); ?>/images/icon/adress.png" alt="">г. Симферополь, ул.
                                            Севастопольская, 99б</li>
                                        <li><img src="<?php bloginfo('template_url'); ?>/images/icon/time.png" alt="">Пн-Пт: <b class="mr-1">9:00 - 19:00</b>
                                            Сб-Вс: <b>выходной</b></li>
                                    </ul>
                                </div>
                                <div class="social-media d-lg-inline-block d-none ">
                                    <ul>
                                        <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon/Insta.png" alt=""></a></li>
                                        <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon/viber.png" alt=""></a></li>
                                        <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon/whatsapp.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        <div id="line" class="d-none d-lg-block" ></div>
                            <div class="col-xl-12">
                                <div class="navbar navbar-expand-lg navbar-light ">
                                    <div class="main-logo navbar-brand d-xl-flex align-items-xl-center">
                                            <div class="rectangle"></div>
                                            <h4>ПрофМед</h4>
                                    </div>
                                    <div class="phone-numb d-lg-none d-block">
                                            <h5>+7 978 71 000 38</h5>
                                        </div>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                           
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <a class="d-none" href="">x</a>
                                            
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                      <ul class="navbar-nav">
                                      <?php wp_list_pages('title_li='); ?>
                                      </ul>
                                      <ul class="d-lg-none social-networks">
                                          <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon/VK.png" alt=""></a></li>
                                          <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon/insta-white.png" alt=""></a></li>
                                      </ul>
                                      <div class="appointment-num d-lg-none">
                                        <h4>+7 978 71 000 38</h4>
                                                <p><b>Записаться онлайн</b></p>
                                            </div>
                                            <div class="info-box d-lg-none">
                                                <ul>
                                                    <li><img src="<?php bloginfo('template_url'); ?>/images/icon/adress-wh-lt.png" alt="">ул.
                                                        Севастопольская, 99б</li>
                                                    <li><img src="<?php bloginfo('template_url'); ?>/images/icon/time-wh-lt.png" alt="">Пн-Пт: <b class="mr-1">9:00 - 19:00</b>
                                                        Сб-Вс: <b>выходной</b></li>
                                                </ul>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="col-sm-2 pl-0 pr-0 d-none d-lg-block">
                    <div class="appointment-num">
                        <h4>+7 978 <span>71 000 38</span></h4>
                                <p><b>Записаться онлайн</b></p>
                            </div>
                        </div>
                    </div>
                </div>
    </nav>