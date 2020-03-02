<?php get_header(); ?>




<?php $hero=get_field('hero');?>
    <section id="order-part">
        <div class="order-table d-lg-flex"> 
                            <div class="txt-table col-md-5 col-sm-10">
                                  <div class="inform-txt">
                                        <h2><?php echo $hero['main_title'];?></h2>
                                    <h1><?php echo $hero['cost_title'];?></h1>
                                    <?php if($hero['link']):?>
                                          <a href="<?php echo $hero['link'];?>" class="btn btn-lg btn-primary" ><?php echo $hero['link_text'];?></a>
                                    <?php endif;?>     
                                        </div>
                                </div>

                                <div class="right-side-img d-none d-lg-block">
                                        <div class="mid-img">
                                                <img src="<?php bloginfo('template_url'); ?>/images/pic/ident.png" alt="">
                                        
                                        </div>
                                    <div class="bg-circle">
                                        <div class="md-circle">
                                            <img src="<?php bloginfo('template_url'); ?>/images/pic/ordering-circle.png" alt="">
                                        </div>
                                    </div>
                                </div>
                    </div>
    </section>
    <?php $info=get_field('main_information'); ?>
    <section id="seven-circles">
        <div class="container">
            <div class="row mt-5">

                <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-3 offset-md-0 col-sm-12 col-6 offset-3">
                    <div class="imp">
                <img src="<?php echo $info['image']; ?>" />
                    </div>
                </div>
                <div id="line-vertical"></div>
                <div class="col-xl-7 col-lg-7 col-md-8 col-sm-12 col-12">
                    <div class="imp-text">
                        <h3><?php echo $info['text_header'];?></h3>
                        <p><?php echo $info['content'];?></p>
                        <a id="btn-formal" href="<?php echo $info['link'];?>">Избавить</a>
                    </div>
                </div>


            </div>
        </div>
        <div class="container">
            <div class="row circ-service ">
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>1</h6>
                        </span>
                        <p>Покупка медицинской книжки</p>
                    </div>
                </div>
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>2</h6>
                        </span>
                        <p>Прохождение медосмотра</p>
                    </div>
                </div>
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>3</h6>
                        </span>
                        <p>Вакцинация</p>
                    </div>
                </div>
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>4</h6>
                        </span>
                        <p>Сдача анализов</p>
                    </div>
                </div>
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>5</h6>
                        </span>
                        <p>Чтение лекций</p>
                    </div>
                </div>
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>6</h6>
                        </span>
                        <p>Получение допуска к работе</p>
                    </div>
                </div>
                <div class="ellipse">
                    <div class="circles">
                        <span>
                            <h6>7</h6>
                        </span>
                        <p>Получение аттестации </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row respo-circ">
                <div class="col-xl-4 offset-xl-8 col-lg-5 offset-lg-7 col-md-8 offset-md-4 col-sm-8 offset-sm-4 col-12">
                    <div class="imp-man">
                        <img src="<?php bloginfo('template_url'); ?>/images/pic/imp-man.png" alt="">
                    </div>
                </div>
                <div class="col-md-10 offset-md-1 col-sm-12">
                    <div class="circ-bck-line">
                        <img src="<?php bloginfo('template_url'); ?>/images/pic/line.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section id="services">
        <div class="heading text-center">
            <span class="left"></span>
            <h1>Услуги</h1>
            <span class="right"></span>
        </div>
        <div class="container">
      
<?php if( have_rows('service_part') ): ?>



        <div class="row">

<?php while( have_rows('service_part') ): the_row(); 

    // vars
    $image = get_sub_field('image');
    $header = get_sub_field('header');

    ?>


                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card">
                        <img src="<?php bloginfo('template_url'); ?>/images/pic/box-des.jpg" alt="">
                        <img src="<?php echo $image['url']; ?>" alt="">
                        <span class="overlay-border"></span>
                        <div class="destination">
                            <h6><a href="#"><?php echo $header; ?></a></h6>
                        </div>
                        <div class="arrow-icon">
                            <img src="<?php bloginfo('template_url'); ?>/images/pic/arrow.png" alt="">
                        </div>
                    </div>
                </div>




	<?php endwhile; ?>
    </div>
<?php endif; ?>

<div class="row">
                <div class="col-lg-8 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <div class="other-services">
                        <div class="name-sec">
                            <h5>Другие услуги</h5>
                        </div>
                        <div class="container">
                            <div class="row type-other-services">
                                <div class="col-lg-6 col-sm-12">
                                    <ul>
                                        <li><span>Справка для участия в соревнованиях</span></li>
                                        <li><span>Справка для посещения бассейна</span></li>
                                        <li><span>Справка для работы на высоте</span></li>
                                        <li><span>Справка для госслужбы 001ГС/у</span></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <ul>
                                        <li><span>Справка для студентов 095/У</span></li>
                                        <li><span>Выписка из медицинской карты 027/У</span></li>
                                        <li><span>Карта профилактических прививок</span></li>
                                        <li><span>Санаторно-курортная карта 072/У</span></li>
                                        <li><span>Справка по приказу 989н</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="design-below">
                            <img src="<?php bloginfo('template_url'); ?>/images/pic/line.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <div class="docs-analys">
                        <div class="name-sec">
                            <h5>Врачи и анализы</h5>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><span>Справка от любого специалиста</span></li>
                                        <li><span>Справка от терапевта</span></li>
                                        <li><span>Справка от акушера</span></li>
                                        <li><span>Справка от невролога</span></li>
                                        <li><span>Справка от стоматолога</span></li>
                                        <li><span>Анализы любой сложности</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <article id="consultation">
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-0 col-sm-10 offset-sm-1 ">
                    <div class="heading text-lg-center">
                        <h1>Остерегайтесь подделок!</h1>
                    </div>
                    <div class="back-img-container">
                        <div class="overlay"></div>
                        <div class="row">
                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="doc-img">
                                    <img src="<?php bloginfo('template_url'); ?>/images/pic/doc.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-0 col-md-5 offset-md-1 col-sm-10 offset-sm-1 col-10 offset-1 align-self-center">
                                <p>Подделка медкнижек и медсправок уголовно наказуема. Мы предлагаем только подлинные
                                    документы
                                    без переплат посреднкиам.</p>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 text-sm-center d-flex justify-content-center flex-md-row align-items-center">
                                <div class="pass-img">
                                    <img src="<?php bloginfo('template_url'); ?>/images/pic/med.png" alt="">
                                </div>
                                <div class="btn-order align-self-md-center">
                                    <a href="#">Заказать консультацию</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
</article>
    <section class="m-top-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-3 col-sm-10">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-4">
                            <div class="content-icon">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/formal.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-8 col-6 pr-0">
                            <div class="content">
                                <h5>ОФИЦИАЛЬНО</h5>
                                <p>Оформим справку законно</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-3 col-sm-10">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-4">
                            <div class="content-icon">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/place.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-8 col-6 pr-0">
                            <div class="content">
                                <h5>офис в центре</h5>
                                <p>Удобное расположение и отсутствие очередей</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-3 col-sm-10">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-4">
                            <div class="content-icon">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/letter.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-8 col-6 pr-0">
                            <div class="content">
                                <h5>Доставка до двери</h5>
                                <p>оформление не выходя из дома</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-3 col-sm-10">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-4">
                            <div class="content-icon">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/percent.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-8 col-6 pr-0">
                            <div class="content">
                                <h5>СИСТЕМА СКИДОК</h5>
                                <p>Приятные скидки для постоянных клиентов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $med=get_field('med_center'); ?>
    <section class="mt-5">
        <div class="container ">
            <div class="row">
                <div class="col-12 about-sec overflow-auto">
                    <div class="about-med-center">
                        <div class="med-center">
                            <div id="rect-grn"></div>
                            <img src="<?php echo $med['image'] ?>" alt="">
                        </div>
                        <div class="heading pt-lg-0 pt-md-3">
                            <h1><?php echo $med['text_header'] ?></h1>
                            <span class="right"></span>
                        </div>
                        <p> <?php echo $med['text'] ?></p>
                        <div class="card-discount ml-sm-4">
                            <h5>Запишитесь на прием сейчас и получи скидку 10%</h5>
                            <img src="<?php bloginfo('template_url'); ?>/images/photos/discount.jpg" class="card-img-top">
                            <form>
                                <div id="form-body">
                                    <input type="text" placeholder="Имя" required>
                                    <input type="text" placeholder="Телефон" required>
                                    <a href="#" class="btn-send btn-block">Отправить</a>
                                    <div class="d-flex align-items-center"> <input type="checkbox" class="mr-1" id="agreement">
                                        <label for="agreement">
                                         Согласен с <span>политикой конфиденциальности</span>
                                        </label></div>
                            </form>
                        </div>
                    </div>
                    <?php if($med['link']):?>
                    <a class="btn-send all-services" href="<?php echo $med['link'];?>">Все услуги</a>
                       <?php endif;?>
                    <p class="mt-5"><?php echo $med['text_below'];?></p>
                </div>

            </div>

        </div>
       
    </section>
    <section class="mt-5">
       <div class="container">
           <div class="row">
               <div class="col-lg-12 col-md-10 col-sm-12">
                   <div class="order-now">
                       <div class="container ">
                             <div class="row">
                                 <div class="col-sm-12 mt-lg-4">
                                        <h2>Мы поможем сэкономьте свое время</h2>
                                 </div>
                                    <div class="col-xl-4 col-lg-5 col-md-10 col-12">  <p> Закажите справку с доставкой до дома и получите скидку 100 рублей </p></div>
                                    <div class="col-lg-4 col-md-8 align-self-center col-12">  <a href="">Заказать сейчас</a></div>
                             </div>
                              
                           </div>
                 
                   </div>
               </div>
           </div>
       </div>
   </section>
   <section class="mt-5">
       <div class="container">
           <div class="row">
               <?php $contact=get_field("contact"); ?>
               <div class="col-lg-4 col-md-5 col-sm-12">
                   <div class="heading">
                       <h1>Контакты</h1>
                   </div>
                   <div class="adress d-flex">
                       <div class="icon-for align-self-center">
                           <img src="<?php bloginfo('template_url'); ?>/images/icon/white-adress.png" alt="">
                       </div>
                      <div class="inform-adress">
                            <p class="mb-3"><?php echo $contact['adress'] ?></p>
                            <p>Пн-Пт: <b>9:00-19:00</b>; Сб-Вс: <b>выходной</b></p>
                      </div>
                   </div>
                   <div class="phone d-flex">
                    <div class="icon-for align-self-center">
                        <img src="<?php bloginfo('template_url'); ?>/images/icon/white-phone.png" alt="">
                    </div>
                       <div class="inform-phone">
                           <p>+7 978 105 51 01</p>
                           <p><?php echo $contact['mail']; ?></p>
                       </div>
                   </div>
               </div>
               <div class="col-xl-7 col-lg-8 offset-xl-1 col-md-7 col-sm-12">
                   <div class="heading">
                       <h1>Как проехать</h1>
                   </div>
                   <div class="row">
                       <div class="col-lg-6">
                              <div class="station d-flex">
                                    <div class="bus-icon">
                                            <img src="<?php bloginfo('template_url'); ?>/images/icon/bus-icon.png" alt="">
                                      </div>
                                  <div class="bus-adress">
                                      <h6>Остановка «площадь Ленина»</h6>
                                      <small><i class="fas fa-long-arrow-alt-left"></i>просп. Кирова</small>
                                    <br>
                                    <small><i class="fas fa-long-arrow-alt-right"></i>Сергеева-Ценского, 4А</small>
                                    </div>
                              </div>
                              <div class="bus-num">
                                  <h6>Автобус</h6>
                                  <ul class="bus">
                                      <li>3</li>
                                      <li>6</li>
                                      <li>7</li>
                                      <li>126</li>
                                      <li>22</li>
                                      <li>30</li>
                                      <li>55</li>
                                      <li>98</li>
                                  </ul>
                                  <h6>Маршрутки</h6>
                                  <ul class="minibus">
                                      <li>1</li>
                                      <li>2</li>
                                      <li>10</li>
                                      <li>15</li>
                                      <li>25</li>
                                      <li>41</li>
                                      <li>48</li>
                                      <li>85</li>
                                      <li>112</li>
                                  </ul>
                                  <h6>Троллейбусы</h6>
                                  <ul class="trollbus">
                                      <li>4</li>
                                      <li>5</li>
                                      <li>7</li>
                                      <li>9</li>
                                      <li>10</li>
                                      <li>11</li>
                                      <li>15</li>
                                  </ul>
                              </div>
                       </div>
                       <div class="col-lg-6">
                           <div class="station d-flex">
                               <div class="bus-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/images/icon/bus-icon.png" alt="">
                               </div>
                                <div class="bus-adress">
                                    <h6>Остановка Октябрьская улица</h6>
                                <small><i class="fas fa-long-arrow-alt-left"></i>ул. Курчатова, 1</small>
                                <br>
                                 <small> <i class="fas fa-long-arrow-alt-right"></i>Пролетарская, 5</small>
                                </div>
                           </div>
                           <div class="bus-num">
                               <h6>Маршрутки</h6>
                               <ul class="minibus">
                                   <li>1</li>
                                   <li>2</li>
                                   <li>10</li>
                                   <li>15</li>
                                   <li>25</li>
                                   <li>41</li>
                                   <li>48</li>
                                   <li>85</li>
                                   <li>112</li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-5 col-sm-12">
                   <div class="contact">
                       <h6>Остались вопросы?</h6>
                       <small>Задайте их нашему менеджеру</small>
                       <form class="mt-3" >
                                <input type="text" placeholder="Телефон">
                                <textarea name="" id="" cols="30" rows="5" placeholder="Сообщение"></textarea>
                                <a class="btn-send btn-block" href="#">Отправить</a>
                               <div class="d-flex align-items-center"> <input type="checkbox" class="mr-1" id="agreement">
                                <label for="agreement">
                                 Согласен с <span>политикой конфиденциальности</span>
                                </label></div>
                        </form>
                      
                   </div>
               </div>
               <div class="col-xl-7 col-lg-8 offset-xl-1 col-md-7 col-sm-12">
                <div class="map mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2824.8132130150702!2d34.083973971599505!3d44.92713390469829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40eade9d37f78663%3A0xc8572fe0d108dde8!2sUlitsa%20Sevastopolskaya%2C%20Simferopol&#39;!5e0!3m2!1sen!2sge!4v1582133497764!5m2!1sen!2sge"
                         width="100%" height="345" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
               </div>
           </div>
       </div>
   </section>
   <div id="footer-band"></div>

   <?php get_footer(); ?>