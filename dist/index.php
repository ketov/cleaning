<!DOCTYPE html>
<html>
  <head>
    <title>Академия чистоты | Генеральная уборка</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="true" name="HandheldFriendly">
    <meta content="width" name="MobileOptimized">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!--include includes/gtm1-->
    <!-- Yandex.Metrika counter-->
    <script>(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(51970151, "init", {id:51970151, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true});</script>
    <noscript>
      <div><img src="https://mc.yandex.ru/watch/51970151" style="position:absolute; left:-9999px;" alt=""></div>
    </noscript>
    <!--  /Yandex.Metrika counter-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
  </head>
  <body>
    <!--include includes/gtm2-->
    <div class="black-bg"></div>
    <section class="c-form" id="form-header-general">
      <div class="close-form">
        <div class="close-form__line close-form__line--1"></div>
        <div class="close-form__line close-form__line--2"></div>
      </div>
      <h2>Заявка на&nbsp;клининг</h2>
      <p class="comment">Оставьте ваш телефон. Мы свяжемся с&nbsp;вами в&nbsp;течение 15&nbsp;минут, чтобы уточнить детали и&nbsp;оформить заявку.</p>
      <input id="input-form-header-general-phone" type="text" placeholder="Номер телефона">
      <input id="input-form-header-general-campaign" type="hidden" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>" />
      <input id="input-form-header-general-term" type="hidden" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>" />
      <div class="error-text" id="input-form-header-general-phone-error"></div>
      <div class="success-text" id="input-form-header-general-success"></div>
      <button id="form-header-general-button" onclick="yaCounter51970151.reachGoal('knopka-otpravit-iz-shapki'); return true;">Отправить!</button>
    </section>
    <section class="c-form" id="form-christmas">
      <div class="close-form">
        <div class="close-form__line close-form__line--1"></div>
        <div class="close-form__line close-form__line--2"></div>
      </div>
      <h2>Акция</h2>
      <p class="comment">Оставьте ваш телефон. Мы свяжемся с&nbsp;вами в&nbsp;течение 15&nbsp;минут, чтобы уточнить детали и&nbsp;оформить заявку.</p>
      <input id="form-christmas-phone" type="text" placeholder="Номер телефона">
      <input id="form-christmas-campaign" type="hidden" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>" />
      <input id="form-christmas-term" type="hidden" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>" />
      <input id="form-christmas-hidden" type="hidden">
      <div class="error-text" id="form-christmas-phone-error"></div>
      <div class="success-text" id="form-christmas-success"></div>
      <button id="form-christmas-button">Участвовать!</button>
    </section>
    <section class="c-form" id="form-consult-general">
      <div class="close-form">
        <div class="close-form__line close-form__line--1"></div>
        <div class="close-form__line close-form__line--2"></div>
      </div>
      <h2>Получить консультацию</h2>
      <p class="comment">Оставьте ваш телефон. Мы свяжемся с&nbsp;вами в&nbsp;течение 15&nbsp;минут и&nbsp;ответим на&nbsp;все вопросы.</p>
      <input id="input-form-consult-general-phone" type="text" placeholder="Номер телефона">
      <input id="input-form-consult-general-campaign" type="hidden" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>" />
      <input id="input-form-consult-general-term" type="hidden" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>" />
      <div class="error-text" id="input-form-consult-general-phone-error"></div>
      <div class="success-text" id="input-form-consult-general-success"></div>
      <button id="form-consult-general-button" onclick="yaCounter51970151.reachGoal('knopka-polucit-konsultaciyi-snizu'); return true;">Отправить!</button>
    </section>
    <header>
      <div class="wrapper">
        <div class="logo"><img class="logo-img" src="assets/img/logo.png" alt="логотип"><a class="logo-link" href="javascript:void(0);">
             Академия <br>Чистоты                    </a></div>
        <nav><a class="header__works" href="#">Как мы делаем уборку</a><a class="header__form" href="#">Заявка</a><a class="header__map-container" href="#">Контакты</a></nav>
        <button class="header__order" id="header-general-button">Оформить заявку</button><a class="phone" href="tel:+74952087844"> 
          <h3 class="ya-phone">8 (495) 208-78-44</h3></a>
        <div class="clear"></div>
      </div>
    </header>
    <section class="offer parallax-window" data-parallax="scroll" data-image-src="assets/img/offer-bg.jpg">
      <div class="wrapper">
        <h1>Генеральная уборка квартир и&nbsp;домов в&nbsp;Московской области от 5 000 руб.</h1>
        <p class="comment">Работаем по направлениям: Волоколамское, Ильинское, Минское, Новорижское, Рублёвское шоссе, район Истры.</p>
        <div class="tabs">
          <div class="tabs__tab tabs__tab--1 active" data-show="range-general" data-hide="range-general-home">Квартиры</div>
          <div class="tabs__tab tabs__tab--2" data-show="range-general-home" data-hide="range-general">Дома</div>
          <div class="clear"></div>
        </div>
        <div class="row-fluid show-grid" id="range-general">
          <div class="span6 offset2">
            <div class="span9"> 
              <label for="amount">Количество комнат</label>
              <div id="slider-range"></div>
            </div>
            <div class="span2" id="range-slider-input">
              <input type="text" id="amount" readonly>
            </div>
            <div class="span1 unit">комн.</div>
          </div>
          <div class="span4">
            <div>Примерная стоимость</div>
            <h1 id="amount2"></h1>
          </div>
        </div>
        <div class="row-fluid show-grid" id="range-general-home">
          <div class="span6 offset2">
            <div class="span9"> 
              <label for="amount-home">Площадь дома</label>
              <div id="slider-range-home"></div>
            </div>
            <div class="span2" id="range-slider-input">
              <input type="text" id="amount-home" readonly>
            </div>
            <div class="span1 unit">м<sup>2</sup></div>
          </div>
          <div class="span4">
            <div>Примерная стоимость</div>
            <h1 id="amount2-home"></h1>
          </div>
        </div>
      </div>
    </section>
    <section class="form-count">
      <div class="wrapper">
        <div class="row-fluid show-grid">
          <div class="span12 form-count__plate">
            <div class="row-fluid show-grid">
              <div class="span4">
                <input id="input-form-count-general-name" type="text" placeholder="Ваше имя">
              </div>
              <div class="span4">
                <input id="input-form-count-general-phone" type="text" placeholder="Телефон">
              </div>
              <input id="input-form-count-general-campaign" type="hidden" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>" />
              <input id="input-form-count-general-term" type="hidden" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>" />    
              <div class="span4">
                <button id="form-count-general-button" onclick="yaCounter51970151.reachGoal('knopka-rasschitat-stoimost'); return true;">Рассчитать стоимость</button>
              </div>
            </div>
            <div class="row-fluid show-grid">
              <div class="success-text" id="input-form-count-general-success"></div>
              <div class="error-text" id="input-form-count-general-phone-error"></div>
              <p>Наш специалист перезвонит в течение 5 минут, проконсультирует по всем вопросам, назовёт точную стоимость.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="christmas">
      <div class="wrapper">
        <h2>Новогодние акции</h2><svg id="Christmas_Lights" viewBox="160 -40 612 200"><path class="light_cord" d="M-673.8-29.1c17.3 23.7 38.1 34.3 63.6 48.8 45.4 25.7 93.4 39.1 145.4 44.4 58 6 112.1 6.2 164-9 64.2-18.8 113.7-51 113.7-51 13.3 17.3 28.1 25.3 50.1 34.5 20.3 8.5 43.8 17 66.1 23 30.1 8.1 67.1 8.4 99.1 8.3 66.5-0.1 134-3.3 197.4-17.8 30.3-6.9 76-24 89.3-32 9.3 4.7 22.4 16.1 34.7 22.8 34 18.6 73.2 33.8 111 42.8 46.1 11 93.6 5.6 137-12.8 14.4-6.1 56.6-26.1 65.7-38.5 8.8 15.1 102.8 33.1 151.5 32.5 68.4-0.8 142.2-10.5 196.7-55.9 9.7 11.9 28.3 20 42.5 25.2 35.5 12.9 76.3 22 113.9 24.9 50.2 3.9 100.3 3.9 150.1-5.3 25.6-4.7 50.6-14.2 74.4-24.8 6.7-3 36.4-14.8 43.1-20.1"/>      <path class="red_bulb bulb blink-1" d="M1351.5 76.9c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C1357.7 84.7 1353 80.2 1351.5 76.9z"/>          <path class="light_fixture" d="M1351.9 71.4c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L1351.9 71.4z"/>          <path class="light_fixture" d="M1343.1 57.9c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C1343.4 58 1343.2 57.9 1343.1 57.9L1343.1 57.9zM1341.8 49.3c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C1342 47.9 1341.9 48.5 1341.8 49.3L1341.8 49.3z"/>      <path class="green_bulb blink-2 bulb" d="M1265.6 90.3c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C1271.8 98.1 1267.2 93.6 1265.6 90.3z"/>          <path class="light_fixture" d="M1266 84.8c0 0.5-0.4 1-1 1H1251c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L1266 84.8z"/>          <path class="light_fixture" d="M1257.2 71.2c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C1257.5 71.3 1257.4 71.3 1257.2 71.2L1257.2 71.2zM1256 62.6c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C1256.1 61.3 1256.1 61.8 1256 62.6L1256 62.6z"/>      <path class="blue_bulb blink-3 bulb" d="M1179.7 90.3c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C1185.9 98.1 1181.3 93.6 1179.7 90.3z"/>          <path class="light_fixture" d="M1180.2 84.8c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L1180.2 84.8z"/>          <path class="light_fixture" d="M1171.3 71.2c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C1171.6 71.3 1171.5 71.3 1171.3 71.2L1171.3 71.2zM1170.1 62.6c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C1170.3 61.3 1170.2 61.8 1170.1 62.6L1170.1 62.6z"/>      <path class="red_bulb blink-4 bulb" d="M1093.9 73.8c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C1100 81.6 1095.4 77 1093.9 73.8z"/>          <path class="light_fixture" d="M1094.3 68.3c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.4 1 1L1094.3 68.3z"/>          <path class="light_fixture" d="M1085.5 54.7c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C1085.7 54.8 1085.6 54.8 1085.5 54.7L1085.5 54.7zM1084.2 46.1c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C1084.4 44.7 1084.3 45.3 1084.2 46.1L1084.2 46.1z"/>      <path class="green_bulb blink-5 bulb" d="M1019 39.8c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C1025.1 47.6 1020.5 43.1 1019 39.8z"/><path class="light_fixture" d="M1019.4 34.3c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.4-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.4 1 1L1019.4 34.3z"/><path class="light_fixture" d="M1010.6 20.8c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C1010.8 20.8 1010.7 20.8 1010.6 20.8L1010.6 20.8zM1009.3 12.2c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C1009.5 10.8 1009.4 11.3 1009.3 12.2L1009.3 12.2z"/><path class="white_bulb blink-6 bulb" d="M928.5 83.2c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C934.7 91 930.1 86.4 928.5 83.2z"/> <path class="light_fixture" d="M928.9 77.6c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L928.9 77.6z"/><path class="light_fixture" d="M920.1 64.1c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C920.4 64.2 920.2 64.1 920.1 64.1L920.1 64.1zM918.9 55.5c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C919 54.1 918.9 54.7 918.9 55.5L918.9 55.5z"/><path class="blue_bulb blink-7 bulb" d="M836.2 93.3c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C842.4 101.1 837.8 96.5 836.2 93.3z"/><path class="light_fixture" d="M836.6 87.7c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L836.6 87.7z"/> <path class="light_fixture" d="M827.8 74.2c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C828.1 74.3 828 74.2 827.8 74.2L827.8 74.2zM826.6 65.6c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C826.8 64.2 826.7 64.8 826.6 65.6L826.6 65.6z"/> <path class="red_bulb blink-1 bulb" d="M750.3 88.6c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C756.5 96.4 751.9 91.9 750.3 88.6z"/><path class="light_fixture" d="M750.8 83.1c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L750.8 83.1z"/><path class="light_fixture" d="M742 69.5c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C742.2 69.6 742.1 69.6 742 69.5L742 69.5zM740.7 60.9c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.6 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C740.9 59.6 740.8 60.1 740.7 60.9L740.7 60.9z"/><path class="gold_bulb bulb blink-9" d="M671.1 63.3c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4H660c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C677.3 71.1 672.7 66.6 671.1 63.3z"/> <path class="light_fixture" d="M671.6 57.8c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1H670c0.5 0 1 0.4 1 1L671.6 57.8z"/><path class="light_fixture" d="M662.7 44.3c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C663 44.3 662.9 44.3 662.7 44.3L662.7 44.3zM661.5 35.7c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C661.7 34.3 661.6 34.8 661.5 35.7L661.5 35.7z"/><path class="green_bulb blink-10 bulb" d="M591.3 105.9c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C597.4 113.7 592.8 109.2 591.3 105.9z"/><path class="light_fixture" d="M591.7 100.4c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L591.7 100.4z"/> <path class="light_fixture" d="M582.9 86.8c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C583.1 86.9 583 86.9 582.9 86.8L582.9 86.8zM581.6 78.2c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C581.8 76.8 581.7 77.4 581.6 78.2L581.6 78.2z"/><path class="blue_bulb blink-1 bulb" d="M492.7 103.6c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C498.9 111.4 494.3 106.9 492.7 103.6z"/><path class="light_fixture" d="M493.1 98.1c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L493.1 98.1z"/> <path class="light_fixture" d="M484.3 84.5c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C484.6 84.6 484.4 84.6 484.3 84.5L484.3 84.5zM483.1 75.9c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C483.2 74.5 483.1 75.1 483.1 75.9L483.1 75.9z"/> <path class="red_bulb blink-2 bulb" d="M406.8 93.3c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C413 101.1 408.4 96.6 406.8 93.3z"/><path class="light_fixture" d="M407.3 87.8c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L407.3 87.8z"/><path class="light_fixture" d="M398.4 74.3c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C398.7 74.3 398.6 74.3 398.4 74.3L398.4 74.3zM397.2 65.7c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.2 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C397.4 64.3 397.3 64.9 397.2 65.7L397.2 65.7z"/> <path class="white_bulb blink-3 bulb" d="M318.3 50c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C324.5 57.8 319.9 53.3 318.3 50z"/><path class="light_fixture" d="M318.8 44.5c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.4-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.4 1 1L318.8 44.5z"/><path class="light_fixture" d="M310 30.9c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C310.2 31 310.1 31 310 30.9L310 30.9zM308.7 22.3c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C308.9 21 308.8 21.5 308.7 22.3L308.7 22.3z"/><path class="green_bulb blink-4 bulb" d="M232.5 80.9c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C238.6 88.7 234 84.2 232.5 80.9z"/>path class="light_fixture" d="M232.9 75.4c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L232.9 75.4z"/><path class="light_fixture" d="M224.1 61.8c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C224.3 61.9 224.2 61.9 224.1 61.8L224.1 61.8zM222.8 53.2c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.6 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C223 51.9 222.9 52.4 222.8 53.2L222.8 53.2z"/> <path class="blue_bulb blink-5 bulb" d="M148.8 92.3c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1s13.7-7.2 13.7-16.1C155 100.1 150.4 95.6 148.8 92.3z"/><path class="light_fixture" d="M149.3 86.8c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L149.3 86.8z"/><path class="light_fixture" d="M140.4 73.2c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C140.7 73.3 140.6 73.3 140.4 73.2L140.4 73.2zM139.2 64.6c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C139.4 63.3 139.3 63.8 139.2 64.6L139.2 64.6z"/> <path class="red_bulb blink-6 bulb" d="M65.2 95.9c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C71.4 103.7 66.7 99.2 65.2 95.9z"/><path class="light_fixture" d="M65.6 90.4c0 0.5-0.4 1-1 1H50.6c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L65.6 90.4z"/><path class="light_fixture" d="M56.8 76.8c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C57.1 76.9 56.9 76.9 56.8 76.8L56.8 76.8zM55.5 68.3c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C55.7 66.9 55.6 67.4 55.5 68.3L55.5 68.3z"/><path class="gold_bulb blink-7 bulb" d="M-18.4 95.1c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C-12.3 102.9-16.9 98.3-18.4 95.1z"/><path class="light_fixture" d="M-18 89.6c0 0.5-0.4 1-1 1H-33c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L-18 89.6z"/><path class="light_fixture" d="M-26.8 76c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C-26.6 76.1-26.7 76.1-26.8 76L-26.8 76zM-28.1 67.4c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.6 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C-27.9 66-28 66.6-28.1 67.4L-28.1 67.4z"/><path class="green_bulb bulb blink-9" d="M-102.1 75.8c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1s13.7-7.2 13.7-16.1C-95.9 83.6-100.5 79.1-102.1 75.8z"/> <path class="light_fixture" d="M-101.7 70.3c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L-101.7 70.3z"/><path class="light_fixture" d="M-110.5 56.7c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C-110.2 56.8-110.3 56.8-110.5 56.7L-110.5 56.7zM-111.7 48.1c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C-111.6 46.8-111.6 47.3-111.7 48.1L-111.7 48.1z"/><path class="blue_bulb blink-10 bulb" d="M-185.7 35.8c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C-179.5 43.6-184.2 39.1-185.7 35.8z"/><path class="light_fixture" d="M-185.3 30.3c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.4-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.4 1 1L-185.3 30.3z"/><path class="light_fixture" d="M-194.1 16.8c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C-193.9 16.8-194 16.8-194.1 16.8L-194.1 16.8zM-195.4 8.2c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C-195.2 6.8-195.3 7.4-195.4 8.2L-195.4 8.2z"/><path class="red_bulb blink-1 bulb" d="M-269.4 75.4c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C-263.2 83.2-267.8 78.7-269.4 75.4z"/><path class="light_fixture" d="M-268.9 69.9c0 0.5-0.4 1-1 1H-284c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L-268.9 69.9z"/><path class="white_bulb blink-2 bulb" d="M-353.4 93.3c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C-347.2 101.1-351.9 96.6-353.4 93.3z"/><path class="light_fixture" d="M-353 87.8c0 0.5-0.4 1-1 1H-368c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L-353 87.8z"/><path class="light_fixture" d="M-361.8 74.2c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C-361.6 74.3-361.7 74.3-361.8 74.2L-361.8 74.2zM-363.1 65.6c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.2 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C-362.9 64.3-363 64.8-363.1 65.6L-363.1 65.6z"/><path class="green_bulb blink-3 bulb" d="M-436.6 93.3c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C-430.5 101.1-435.1 96.6-436.6 93.3z"/><path class="light_fixture" d="M-436.2 87.8c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L-436.2 87.8z"/><path class="light_fixture" d="M-445 74.2c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C-444.8 74.3-444.9 74.3-445 74.2L-445 74.2zM-446.3 65.6c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.2 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C-446.1 64.3-446.2 64.8-446.3 65.6L-446.3 65.6z"/><path class="blue_bulb blink-10 bulb" d="M-519.8 81.2c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1s13.7-7.2 13.7-16.1C-513.7 89-518.3 84.5-519.8 81.2z"/><path class="light_fixture" d="M-519.4 75.7c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.5-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.5 0 1 0.5 1 1L-519.4 75.7z"/><path class="light_fixture" d="M-528.2 62.2c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C-528 62.3-528.1 62.2-528.2 62.2L-528.2 62.2zM-529.5 53.6c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C-529.3 52.2-529.4 52.8-529.5 53.6L-529.5 53.6z"/><path class="red_bulb blink-5 bulb" d="M-602.6 46c-1.5-3.3-0.6-11-0.6-11 0-2.2-1.2-4-3.4-4h-7.1c-2.2 0-3.4 1.8-3.4 4 0 0 0.7 7.5-0.6 11 -1.2 3.5-6.2 7.8-6.2 13.4 0 8.9 6.2 16.1 13.7 16.1 7.6 0 13.7-7.2 13.7-16.1C-596.4 53.8-601.1 49.2-602.6 46z"/><path class="light_fixture" d="M-602.2 40.4c0 0.5-0.4 1-1 1h-14.1c-0.5 0-1-0.4-1-1l0.5-14.9c0-0.5 0.5-1 1-1h12.9c0.6 0 1 0.4 1 1L-602.2 40.4z"/><path class="light_fixture" d="M-611 26.9c-0.5-0.2-0.7-0.8-0.5-1.3l0 0c0.2-0.5 0.3-0.9 0.3-1.3l0 0c0-1.5-1.4-2.7-2.2-3.6l0 0c-0.5-0.6-0.7-1.5-0.8-2.4l0 0c-0.1-1.5 1-3.4 3.3-3.6l0 0 0.1 0 0.1 0c1.2 0 2.2 0.3 2.9 1l0 0c0.7 0.6 1 1.5 1 2.3l0 0c0 1.3-0.6 2.4-1.2 3.4l0 0c-0.4 0.6-0.9 1.1-1.4 1.5l0 0c0.2 0.5 0.3 1 0.3 1.5l0 0c0 0.6-0.1 1.3-0.4 2.1l0 0h0c-0.2 0.4-0.5 0.6-0.9 0.6l0 0C-610.7 27-610.9 26.9-611 26.9L-611 26.9zM-612.3 18.3c0 0.5 0.2 1.1 0.3 1.2l0 0c0.2 0.3 0.8 0.8 1.4 1.6l0 0c0.2-0.2 0.5-0.5 0.8-0.9l0 0c0.5-0.7 0.9-1.7 0.9-2.3l0 0c-0.1-0.7 0-1-1.9-1.2l0 0C-612.1 16.9-612.2 17.5-612.3 18.3L-612.3 18.3z"/></svg>
        <div class="row-fluid show-grid christmas__actions">
          <div class="span4"> 
            <div id="christmas-tree"> 
              <div class="container-tree">
                <div class="star"></div>
                <div class="pressie">
                  <div class="cover"></div>
                  <div class="wrap"> </div>
                  <div class="ribbon"></div>
                </div>
                <div class="tree">
                  <div class="base"> </div>
                  <div class="layer">
                    <div class="line"> </div>
                    <div class="bauble one"></div>
                  </div>
                  <div class="layer two">
                    <div class="line two"> </div>
                    <div class="bauble two"></div>
                    <div class="socks">
                      <div class="top"> </div>
                      <div class="foot"></div>
                    </div>
                  </div>
                  <div class="layer three">
                    <div class="line three"> </div>
                    <div class="bauble three" id="promocode2018">
                      <div id="promocode2018-discount">
                        <h2 id="promocode2018-discount-number">15%</h2>
                        <div id="promocode2018-discount-text">Ваша новогодняя скидка</div>
                        <div class="clear"></div>
                      </div>
                      <input id="input-promocode2018-code" type="text" placeholder="Ваш промокод: 4ас1" disabled>
                      <input id="input-promocode2018-phone" type="text" placeholder="Телефон">
                      <input id="form-promocode-christmas-campaign" type="hidden" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>" />
                      <input id="form-promocode-christmas-term" type="hidden" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>" />
                      <input id="form-promocode-christmas-hidden" type="hidden" value="Акция2018.Генеральная.Ёлка">
                      <div class="success-text" id="input-promocode2018-success"></div>
                      <button id="promocode2018-button">Отправить промокод</button>
                    </div>
                    <div class="socks two">
                      <div class="top"> </div>
                      <div class="foot two"></div>
                    </div>
                  </div>
                </div>
                <div class="layer four">
                  <div class="bauble four"></div>
                  <div class="star two"></div>
                  <div class="line four"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="span8">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide christmas__slide christmas__slide--1">
                  <div class="christmas__slide-content"><img class="christmas__triangle christmas__triangle--1" src="assets/img/triangle-1.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--2" src="assets/img/triangle-2.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--3" src="assets/img/triangle-3.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--4" src="assets/img/triangle-4.svg" alt="треугольник">
                    <h4>Подарочный сертификат</h4>
                    <p> 
                      На&nbsp;уборку, химчистку, мытьё окон на&nbsp;определенную сумму 
                      по вашему желанию. Действует 
                      в течение года.
                    </p>
                    <div class="christmas__slide-button-outer">
                      <div class="christmas__slide-button-container">
                        <div class="christmas__slide-button-border">
                          <div class="christmas__slide-img-container christmas__slide-img-container--1"><img src="assets/img/christmas-1.svg" alt="снежинка"></div>
                          <button class="christmas-button" data-header="Подарочный сертификат" data-form="Акция2018.Генеральная.Слайдер.Подарочный сертификат">Участвовать</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide christmas__slide christmas__slide--2">
                  <div class="christmas__slide-content"><img class="christmas__triangle christmas__triangle--1" src="assets/img/triangle-1.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--2" src="assets/img/triangle-2.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--3" src="assets/img/triangle-3.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--4" src="assets/img/triangle-4.svg" alt="треугольник">
                    <h4>Приведи друга</h4>
                    <p>
                       10% скидка вам и&nbsp;другу </p>
                    <div class="christmas__slide-button-outer">
                      <div class="christmas__slide-button-container">
                        <div class="christmas__slide-button-border">
                          <div class="christmas__slide-img-container christmas__slide-img-container--2"><img src="assets/img/christmas-2.svg" alt="звёздочка"></div>
                          <button class="christmas-button" data-header="Приведи друга" data-form="Акция2018.Генеральная.Слайдер.Приведи друга">Участвовать</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide christmas__slide christmas__slide--3">
                  <div class="christmas__slide-content"><img class="christmas__triangle christmas__triangle--1" src="assets/img/triangle-1.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--2" src="assets/img/triangle-2.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--3" src="assets/img/triangle-3.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--4" src="assets/img/triangle-4.svg" alt="треугольник">
                    <h4>Соседи</h4>
                    <p>
                       15% скидка на&nbsp;уборку в&nbsp;одно время в&nbsp;одном месте но&nbsp;в&nbsp;разных квартирах</p>
                    <div class="christmas__slide-button-outer">
                      <div class="christmas__slide-button-container">
                        <div class="christmas__slide-button-border">
                          <div class="christmas__slide-img-container christmas__slide-img-container--3"><img src="assets/img/christmas-3.svg" alt="ёлочка"></div>
                          <button class="christmas-button" data-header="Соседи" data-form="Акция2018.Генеральная.Слайдер.Соседи">Участвовать</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide christmas__slide christmas__slide--4">
                  <div class="christmas__slide-content"><img class="christmas__triangle christmas__triangle--1" src="assets/img/triangle-1.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--2" src="assets/img/triangle-2.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--3" src="assets/img/triangle-3.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--4" src="assets/img/triangle-4.svg" alt="треугольник">
                    <h4>Постоянный клиент</h4>
                    <p>
                       Персональная цена для&nbsp;постоянных клиентов</p>
                    <div class="christmas__slide-button-outer">
                      <div class="christmas__slide-button-container">
                        <div class="christmas__slide-button-border">
                          <div class="christmas__slide-img-container christmas__slide-img-container--4"><img src="assets/img/christmas-4.svg" alt="шарик"></div>
                          <button class="christmas-button" data-header="Постоянный клиент" data-form="Акция2018.Генеральная.Слайдер.Постоянный клиент">Участвовать</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide christmas__slide christmas__slide--5">
                  <div class="christmas__slide-content"><img class="christmas__triangle christmas__triangle--1" src="assets/img/triangle-1.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--2" src="assets/img/triangle-2.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--3" src="assets/img/triangle-3.svg" alt="треугольник"><img class="christmas__triangle christmas__triangle--4" src="assets/img/triangle-4.svg" alt="треугольник">
                    <h4>Акция для&nbsp;детских учреждений</h4>
                    <p>
                       Персональная цена для&nbsp;постоянных клиентов</p>
                    <div class="christmas__slide-button-outer">
                      <div class="christmas__slide-button-container">
                        <div class="christmas__slide-button-border">
                          <div class="christmas__slide-img-container christmas__slide-img-container--5"><img src="assets/img/christmas-5.svg" alt="Дед мороз"></div>
                          <button class="christmas-button" data-header="Соседи" data-form="Акция2018.Генеральная.Слайдер.Для детск.">Участвовать</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="advantages">
      <div class="wrapper">
        <h2>Почему мы</h2>
        <div class="row-fluid show-grid">
          <div class="span3"><img src="assets/img/adv-price.svg" alt="цена">
            <h3>Цена</h3>
            <ul>
              <li>Наши цены на 30% ниже рыночных</li>
              <li>Оплата после выполнения работ наличными или картой</li>
              <li>Постоянным клиентам скидки</li>
              <li>Бесплатный выезд за МКАД (до&nbsp;100 км)</li>
            </ul>
          </div>
          <div class="span3"><img src="assets/img/adv-quality.svg" alt="цена">
            <h3>Качество</h3>
            <ul>
              <li>Используем только профессиональное оборудование и экологически чистые средства</li>
              <li>Уборка производится по технологии международного центра профессионального клиннинга (ICPC)</li>
            </ul>
          </div>
          <div class="span3"><img src="assets/img/adv-reliability.svg" alt="цена">
            <h3>Надёжность</h3>
            <ul>
              <li>Весь персонал регулярно проходит медицинский осмотр и&nbsp;повышение квалификации</li>
              <li>Контролируем качество выполняемых работ</li>
              <li>Наши технологи подберут моющие средства исходя из&nbsp;специфики поверхностей и&nbsp;степени загрязнения</li>
            </ul>
          </div>
          <div class="span3"><img src="assets/img/adv-chart.svg" alt="цена">
            <h3>Гибкий график</h3>
            <ul>
              <li>Работаем 7 дней в неделю</li>
              <li>Возможно ночное обслуживание</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="geography">
      <div class="wrapper">
        <h2>География оказания услуг</h2>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7cc6a7060c0b86500384f7044ae7f034894efc58302dbd36189d0c4d9364c38b&amp;amp;width=100%25&amp;amp;height=542&amp;amp;lang=ru_RU&amp;amp;scroll=false"></script>
        <!--div.row-fluid.show-grid
        //div.span12
            //img(src="assets/img/map.png" alt="география оказания услуг")
        -->
      </div>
    </section>
    <section class="works">
      <div class="wrapper">
        <h2>Как мы делаем генеральную уборку</h2>
        <div class="row-fluid show-grid">
          <div class="span6">
            <h3>Общие работы</h3>
            <ul>
              <li>Моем и пылесосим полы и плинтусы</li>
              <li>Удаляем на всех поверхностях сложные загрязнения: известковый налет, ржавчину, следы жира, водный камень</li>
              <li>Моем мебель снаружи и внутри</li>
              <li>Удаляем пыль со стен и потолков</li>
              <li>Чистим парогенератором труднодоступные места</li>
              <li>Удаляем пыль и моем бытовую и кухонную технику</li>
              <li>Удаляем пыль и моем все светильники, включая потолочные</li>
            </ul>
          </div>
          <div class="span6">
            <h3>Комнаты и коридоры</h3>
            <ul>
              <li>Удаляем пыль с предметов интерьера: ваз, фоторамок, картин</li>
              <li>Удаляем пыль с кондиционеров и их фильтров</li>
              <li>Моем зеркала и стеклянные поверхности (кроме окон)</li>
              <li>Моем подоконники, батареи</li>
              <li>Пылесосим мягкую мебель внутри и снаружи</li>
              <li>Бережно ухаживаем за кожаной мебелью</li>
              <li>Меняем постельное белье</li>
              <li>Моем двери и дверные блоки</li>
              <li>Моем карнизы</li>
            </ul>
          </div>
        </div>
        <div class="row-fluid show-grid">
          <div class="span6">
            <h3>Кухня</h3>
            <ul>
              <li>Чистим и дезинфицируем кухонные рабочие поверхности</li>
              <li>Моем стеновые панели кухонного гарнитура</li>
              <li>Моем холодильник снаружи и внутри</li>
              <li>Моем вытяжку снаружи и внутри, включая фильтры</li>
              <li>Моем кухонную плиту снаружи и внутри</li>
              <li>Моем микроволновую печь снаружи и внутри</li>
              <li>Чистим и обеззараживаем сантехнику</li>
              <li>Моем грязную посуду 10 минут</li>
              <li>Моем и обеззараживаем мусорную корзину, выносим мусор</li>
            </ul>
          </div>
          <div class="span6">
            <h3>Ванная комната</h3>
            <ul>
              <li>Моем потолок и стены на всю высоту</li>
              <li>Моем душевую кабину и ванну (снаружи и внутри)</li>
              <li>Чистим и обеззараживаем сантехнику</li>
              <li>Очищаем межплиточные швы</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="additional">
      <div class="wrapper">
        <h2>Также мы делаем</h2>
        <div class="row-fluid show-grid"><a class="span4 additional__block additional__block--support" href="support.php"><span class="text"> <span>Поддерживающую уборку</span></span></a><a class="span4 additional__block additional__block--repair" href="repair.php"><span class="text"> <span>Уборку после ремонта</span></span></a><a class="span4 additional__block additional__block--eco" href="eco.php"><span class="text"> <span>Эко-уборку       </span></span></a></div>
      </div>
    </section>
    <section class="services">
      <div class="wrapper">
        <h2>Дополнительные услуги</h2>
        <div class="row-fluid show-grid">
          <div class="span3 services__service services__service--window">Мойка окон/фасадов <br>от 200 руб./м<sup>2</sup></div>
          <div class="span3 services__service services__service--mosquito">Мытьё москитной сетки<br>100 руб./шт.</div>
          <div class="span3 services__service services__service--watering">Поливка цветов<br>100 руб.</div>
          <div class="span3 services__service services__service--pet">Уборка лотка питомца<br>300 руб.</div>
        </div>
        <div class="row-fluid show-grid">
          <div class="span3 services__service services__service--clothes">Отвезти и&nbsp;забрать вещи из&nbsp;химчистки<br>300 руб.</div>
          <div class="span3 services__service services__service--yard">Чистка прилегающей территории<br>20 руб./м<sup>2</sup></div>
          <div class="span3 services__service services__service--ware">Мытьё посуды <br>500 руб./час</div>
          <div class="span3 services__service services__service--furniture">Химчистка мебели и&nbsp;ковров<br>От 150 руб.</div>
        </div>
        <div class="row-fluid show-grid">
          <!--div.span3.services__service.services__service--pet-grooming
          | Стрижка питомца 
          br 
          | (с выездом мастера)
          br
          | От 1 500 руб.
          -->
          <div class="span3 services__service services__service--master">Мастер на час<br>От 1 000 руб./час</div>
          <div class="span6 services__how">
            <h3>Как мы делаем уборку</h3>
            <p>Очищение детских игрушек, сервизов, книг и прочих некрупных предметов оплачивается отдельно по цене 500 руб./час работы</p>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </section>
    <section class="form">
      <div class="wrapper">
        <h2>Заявка на уборку</h2>
        <div class="row-fluid show-grid">
          <div class="span3 offset3"> 
            <input id="input-form-general-name" type="text" placeholder="Ваше имя">
          </div>
          <div class="span3">
            <input id="input-form-general-phone" type="text" placeholder="Телефон">
          </div>
        </div>
        <div class="row-fluid show-grid">
          <div class="span6 offset3"> 
            <textarea id="input-form-general-message" placeholder="Сообщение"></textarea>
            <input id="input-form-general-campaign" type="hidden" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>" />
            <input id="input-form-general-term" type="hidden" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>" />    
          </div>
        </div>
        <div class="row-fluid show-grid">
          <div class="span6 offset3"> 
            <div class="success-text" id="input-form-general-success"></div>
            <div class="error-text" id="input-form-general-phone-error"></div>
            <button id="form-general-button" onclick="yaCounter51970151.reachGoal('knopka-otpravit-zayavka-na-uborku'); return true;">Отправить</button>
          </div>
        </div>
      </div>
    </section>
    <section class="contacts">
      <div class="wrapper">
        <div class="row-fluid show-grid">
          <div class="span8 offset2"> 
            <!--p Московская область, Истринский район--><a class="phone" href="tel:+74952087844"> 
              <h2 class="ya-phone">8 (495) 208-78-44</h2></a><a class="email" href="mailto:2087844@bk.ru">2087844@bk.ru</a>
            <button id="contacts-general-button">Получить консультацию</button>
          </div>
        </div>
      </div>
    </section>
    <!--include includes/map-->
    <footer class="footer--agreement">
      <div class="wrapper">
        <div class="row-fluid show-grid">
          <div class="span3 footer__copyright">© 2018 Академия Чистоты</div>
          <div class="span3 footer__agree"><a class="agree" href="agreement.html">Соглашение на обработку персональных данных</a></div>
          <div class="span3 footer__ketov"><span>Разработка — <a class="ketov" href="http://ketov.name" target="_blank">Юрий Кетов</a></span></div>
          <div class="span3 phone footer__phone"><a href="tel:+74952087844"> 
              <h3 class="ya-phone">8 (495) 208-78-44</h3></a></div>
        </div>
      </div>
    </footer>
    <!--include includes/footer-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <!--include includes/calltouch-->
  </body>
</html>