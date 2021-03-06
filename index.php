<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/normalize.css"> -->
  <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


<!-- ===============Tooltip adding ======-->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <title>Портфолио Мальцева Никиты</title>
  <?php
    wp_head(  );
  ?>
</head>

<body>
  <div class="header">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
      (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
        m[i].l = 1 * new Date(); k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
      })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(76355761, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
      });
    </script>
    <noscript>
      <div><img src="https://mc.yandex.ru/watch/76355761" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <!-- <img src="img/Logo.jpg" alt="Logo" class="logo"> -->
        </div>
      </div>
      <div class="row">
        <div class="twoColums d-flex">
          <div class="offset-md-1 col-md-6">
            <h4 class="name wow animate__animated animate__bounceInRight">Мальцев Никита</h4>
            <h1 class="mainHeader wow animate__animated animate__bounceInLeft">
              Создание сайтов на заказ
            </h1>
            <h5 class="wow animate__animated animate__bounceInLeft">Мои услуги:</h5>
            <ul class="services wow animate__animated animate__bounceInUp">
              <li> <span title="Лендинг пейдж (landing page) или просто «лендинг» — это особый тип сайтов, оптимизированных для побуждения к действию интернет-пользователя. Традиционный лендинг описывает продукт, его преимущества и указывает на необходимость в приобретении этого продукта. В идеальном мире лендинг создают таким образом, чтобы пользователь, который ничего не знает о продукте, после посещения сайта совершил покупку. Мы сделали краткую инструкцию по составлению лендингов и подобрали 50 интересных примеров.">Одностраничные сайты (лендинги) </span> </li>
              <li><span title="По сути, это минималистичные одностраничные сайты с опросами, интерактивными тестами и игровыми викторинами. Квизы нужны, чтобы посетитель не читал продающую информацию и проникался выгодами товара, как на обычном лендинге, а развлекся вопросами, узнал о товаре в игровой форме и сделал покупку.">Квиз-лендинги </span></li>
              <li><span title="Более серьезный подход для создания сайта. Обычно, это многостраничный сайт, рассказывающий подробнее об услугах, истории и контактах компании. Информирует посетителей о стоимости услуг и по факту выполняет функции офиса компании в режиме онлайн.">Сайт компании </span></li>
              <li><span
                  title="Такие сайты создаются для продвижения и продажи товаров винтернете">Интернет-магазин </span></li>
              <li><span title="Эта опция позволяет сделать так, чтобы можно было менять содержимое страницы (текст, пункты меню, картинки) через админку вордпресса, не изменяя код вёрстки.">Посадка вёрстки на WordPress </span></li>
            </ul>
            <p class="note wow animate__animated animate__flip">*Ко мне обращаются когда нужно сделать сайт, сделать дизайн сайта, а так же сделать интернет-магазин</p>
            <div class="contactBlock d-flex wow animate__animated animate__fadeInUp">
              <div class="col-md-5 cotactBl">
                <span>Как со мной связаться:</span>
                <a href="tel: +79608875504">89608875504</a>
                <a href="mailto:st1548@yandex.ru">st1548@yandex.ru</a>
              </div>
              <div class="col-md-8">
                <!-- <a href="/quiz-app/quiz.html" class="ctaBtn">Пройди тест и получи бесплатную консультацию</a> -->
                <!-- <h6 class="ctaBtn">Пройди тест и получи бесплатную консультацию</h6>  -->
                
              </div>
            </div>
            
          </div>
          <!-- /.col-md-6 -->
          <div class="col-md-6">
            <img class="photo" src="<?php echo get_template_directory_uri() . '/assets/img/HeroBkg.jpg;'?>" alt="Photo">
          </div>
          <!-- /.col-md-6 -->

        </div>
        
      </div>
    </div>
  </div>
  
  <div class="body">
    <section class="portfolio">
      <div class="row">
        <div class="col-md-12">
        <div class="project1">
          <h2 class="portfolioHeading wow animate__animated animate__fadeInLeft">Прошлые 3 работы</h2>
          <div class="project1Heading animate__animated animate__fadeInLeft">
            <h2>Сайт - лендинг ведущего</h2>
          </div>
          <div class="proj1imgs wow animate__animated animate__fadeInRight">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/proj1-main.jpg" alt="projMainImg" class="projMainImg">
            <ul class="img">
              <li><img src="<?php echo get_template_directory_uri();?>/assets/img/proj1-img1.jpg" alt="img"></li>
              <li><img src="<?php echo get_template_directory_uri();?>/assets/img/proj1-img2.jpg" alt="img"></li>
              <li><img src="<?php echo get_template_directory_uri();?>/assets/img/proj1-img3.jpg" alt="img"></li>
            </ul>
          </div>
        </div>

        <div class="project2">
          <div class="project2Heading wow animate__animated animate__fadeInLeft">
            <h2>Сайт Компании "Стройконтроль"</h2>
          </div>
          <div class="proj2imgs wow animate__animated animate__fadeInRight">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/proj2-main.jpg" alt="projMainImg" class="projMainImg">
            <ul class="img">
              <li><img src="<?php echo get_template_directory_uri();?>/assets/img/proj2-img1.jpg" alt="img"></li>
              <li><img src="<?php echo get_template_directory_uri();?>/assets/img/proj2-img2.jpg" alt="img"></li>
              <li><img src="<?php echo get_template_directory_uri();?>/assets/img/proj2-img3.jpg" alt="img"></li>
              <li><img src="<?php echo get_template_directory_uri();?>/assets/img/proj2-img4.jpg" alt="img"></li>
            </ul>
          </div>
        </div>
        <div class="project3">
          <div class="project3Heading wow animate__animated animate__fadeInLeft">
            <h2>Quiz-сайт Decor Studio</h2>
          </div>
          <div class="proj3imgs wow animate__animated animate__fadeInRight">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/proj3-main.jpg" alt="projMainImg" class="projMainImg">
          </div>
        </div>
        </div>
      </div>
    </section>
  </div>
  <div class="footer">

  </div>
  
  <?php 
    wp_footer(  );
  ?>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  <!-- link and activate WOW.js -->
  <script src="js/wow.min.js">
  </script>
  <script>
    new WOW().init();
  </script>

</body>

</html>