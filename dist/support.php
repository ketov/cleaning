<!DOCTYPE html>
<html>
  <head>
    <title>Академия чистоты | Поддерживающая уборка</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="true" name="HandheldFriendly">
    <meta content="width" name="MobileOptimized">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!-- Google Tag Manager-->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KKN89VC');</script>
    <!-- End Google Tag Manager-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
  </head>
  <body>
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKN89VC" height="0" width="0" style="display:none;visibility:hidden;"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript)-->
    <div class="black-bg"></div>
    <section class="c-form" id="form-header-support">
      <div class="close-form">
        <div class="close-form__line close-form__line--1"></div>
        <div class="close-form__line close-form__line--2"></div>
      </div>
      <h2>Заявка на&nbsp;клининг</h2>
      <p class="comment">Оставьте ваш телефон. Мы свяжемся с&nbsp;вами в&nbsp;течение 15&nbsp;минут, чтобы уточнить детали и&nbsp;оформить заявку.</p>
      <input id="input-form-header-support-phone" type="text" placeholder="Номер телефона">
      <input id="input-form-header-support-campaign" type="hidden" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>" />
      <input id="input-form-header-support-term" type="hidden" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>" />
      <div class="error-text" id="input-form-header-support-phone-error"></div>
      <div class="success-text" id="input-form-header-support-success"></div>
      <button id="form-header-support-button">Отправить!</button>
    </section>
    <section class="c-form" id="form-consult-support">
      <div class="close-form">
        <div class="close-form__line close-form__line--1"></div>
        <div class="close-form__line close-form__line--2"></div>
      </div>
      <h2>Получить консультацию</h2>
      <p class="comment">Оставьте ваш телефон. Мы свяжемся с&nbsp;вами в&nbsp;течение 15&nbsp;минут и&nbsp;ответим на&nbsp;все вопросы.</p>
      <input id="input-form-consult-support-phone" type="text" placeholder="Номер телефона">
      <input id="input-form-consult-support-campaign" type="hidden" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>" />
      <input id="input-form-consult-support-term" type="hidden" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>" />
      <div class="error-text" id="input-form-consult-support-phone-error"></div>
      <div class="success-text" id="input-form-consult-support-success"></div>
      <button id="form-consult-support-button">Отправить!</button>
    </section>
    <header>
      <div class="wrapper">
        <div class="logo"><img class="logo-img" src="assets/img/logo.png" alt="логотип"><a class="logo-link" href="index.php">
             Академия <br>Чистоты </a></div>
        <nav><a class="header__works" href="#">Как мы делаем уборку</a><a class="header__form" href="#">Заявка</a><a class="header__map-container" href="#">Контакты</a></nav>
        <button class="header__order" id="header-support-button">Оформить заявку</button><a class="phone" href="tel:+74952087844"> 
          <h3>8 (495) 208-78-44</h3></a>
        <div class="clear"></div>
      </div>
    </header>
    <section class="offer parallax-window" data-parallax="scroll" data-image-src="assets/img/offer-bg.jpg">
      <div class="wrapper">
        <h1>Поддерживающая уборка квартир и&nbsp;домов в&nbsp;Московской области от&nbsp;2&nbsp;500&nbsp;руб.</h1>
        <p class="comment">Работаем по направлениям: Волоколамское, Ильинское, Минское, Новорижское, Рублёвское шоссе, район Истры.</p>
        <div class="tabs">
          <div class="tabs__tab tabs__tab--1 active" data-show="range-support" data-hide="range-support-home">Квартиры</div>
          <div class="tabs__tab tabs__tab--2" data-show="range-support-home" data-hide="range-support">Дома</div>
          <div class="clear"></div>
        </div>
        <div class="row-fluid show-grid" id="range-support">
          <div class="span6 offset2">
            <div class="span9"> 
              <label for="amount">Площадь квартиры</label>
              <div id="slider-range"></div>
            </div>
            <div class="span2" id="range-slider-input">
              <input type="text" id="amount" readonly>
            </div>
            <div class="span1 unit">м<sup>2</sup></div>
          </div>
          <div class="span4">
            <div>Примерная стоимость</div>
            <h1 id="amount2"></h1>
          </div>
        </div>
        <div class="row-fluid show-grid" id="range-support-home">
          <div class="span6 offset2">
            <div class="span9"> 
              <label for="amount-home">Площадь дома</label>
              <div id="slider-range-home"></div>
            </div>
            <div class="span2" id="range-slider-input">
              <input type="text" id="amount-home" readonly>
            </div>
            <div class="span1 unit">м<sup>2   </sup></div>
          </div>
          <div class="span4">
            <div>Примерная стоимость</div>
            <h1 id="amount2-home">       </h1>
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
                <input id="input-form-count-support-name" type="text" placeholder="Ваше имя">
              </div>
              <div class="span4">
                <input id="input-form-count-support-phone" type="text" placeholder="Телефон">
                <input id="input-form-count-support-campaign" type="hidden" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>" />
                <input id="input-form-count-support-term" type="hidden" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>" />    
              </div>
              <div class="span4">
                <button id="form-count-support-button">Рассчитать стоимость</button>
              </div>
            </div>
            <div class="row-fluid show-grid">
              <div class="success-text" id="input-form-count-support-success"></div>
              <div class="error-text" id="input-form-count-support-phone-error"></div>
              <p>Наш специалист перезвонит в течение 5 минут, проконсультирует по всем вопросам, назовёт точную стоимость.</p>
            </div>
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
        <h2>Как мы делаем поддерживающую уборку</h2>
        <div class="row-fluid show-grid">
          <div class="span6">
            <h3>Комнаты и коридоры</h3>
            <ul>
              <li>Чистим и моем напольные покрытия и плинтусы</li>
              <li>Сухая уборка мягкой мебели с использованием пылесоса (обрабатываются только сиденья и спинки, специалисты не убирают подушки)</li>
              <li>Устраняем пыль со светильников (на высоте до 2 метров)</li>
              <li>Моем подоконники и коммуникации</li>
              <li>Убираем пыль с поверхности дверных блоков</li>
              <li>Очищаем все стеклянные элементы и зеркала, которые есть в помещении (кроме окон)</li>
              <li>Убираем пыль с поверхности различных предметов домашнего обихода и аксессуаров (на высоте до 2 м)</li>
              <li>Влажная уборка корпусной мебели любого типа (не выше 2 метров)</li>
              <li>Удаляем пыль с внешней части бытовых приборов</li>
              <li>Заменяем постельный комплект (по желанию клиента)</li>
              <li>Вывозим мусор с последующей заменой одноразовых пакетов в&nbsp;корзинах</li>
              <li>Обеззараживаем мусорную корзину</li>
            </ul>
          </div>
          <div class="span6">
            <h3>Кухня</h3>
            <ul>
              <li>Моем посуду и столовые приборы в течение 10 минут</li>
              <li>Влажная уборка газовой или электрической плиты с устранением жирных пятен</li>
              <li>Моем наружную поверхность духовки и холодильника</li>
              <li>Влажная уборка поверхности для приготовления пищи и фартука, мытье фасадов мебели</li>
              <li>Устраняем жирные и масляные следы на высоте до 2 метров</li>
              <li>Очищаем бытовую технику от загрязнений</li>
              <li>Очищаем и тщательно обеззараживаем сантехническое оборудование</li>
              <li>Моем и обеззараживаем корзины для сбора мусора</li>
            </ul>
          </div>
        </div>
        <div class="row-fluid show-grid">
          <div class="span6">
            <h3>Ванная комната</h3>
            <ul>
              <li>Моем и обеззараживаем различные сантехнические приборы, включая унитазы, раковины, биде</li>
              <li>Моем душевую кабину и ванну (снаружи и внутри)</li>
              <li>Очищаем плитку от имеющихся загрязнений</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="additional">
      <div class="wrapper">
        <h2>Также мы делаем</h2>
        <div class="row-fluid show-grid"><a class="span4 additional__block additional__block--general" href="index.php"><span class="text"> <span>Генеральную уборку</span></span></a><a class="span4 additional__block additional__block--repair" href="repair.php"><span class="text"> <span>Уборку после ремонта</span></span></a><a class="span4 additional__block additional__block--eco" href="eco.php"><span class="text"> <span>Эко-уборку</span></span></a></div>
      </div>
    </section>
    <section class="services">
      <div class="wrapper">
        <h2>Дополнительные услуги</h2>
        <div class="row-fluid show-grid">
          <div class="span3 services__service services__service--window">Мойка окон/фасадов <br>от 200 руб./м<sup>2</sup></div>
          <div class="span3 services__service services__service--refrigerator">Мойка холодильника<br>500 руб.</div>
          <div class="span3 services__service services__service--oven">Мойка духовки<br>350 руб.</div>
          <div class="span3 services__service services__service--appliance">Мойка бытовых приборов<br>от 100 руб. за&nbsp;шт.</div>
        </div>
        <div class="row-fluid show-grid">
          <div class="span3 services__service services__service--watering">Поливка цветов<br>100 руб.</div>
          <div class="span3 services__service services__service--pet">Уборка лотка питомца<br>300 руб.</div>
          <div class="span3 services__service services__service--chandelier">Мойка люстры<br>От 200 руб. за люстру</div>
          <div class="span3 services__service services__service--furniture">Химчистка мебели и&nbsp;ковров<br>От 150 руб.</div>
        </div>
        <div class="row-fluid show-grid">
          <div class="span3 services__service services__service--yard">Чистка прилегающей территории<br>20 руб./м<sup>2</sup></div>
        </div>
      </div>
    </section>
    <section class="form parallax-window" data-parallax="scroll" data-image-src="assets/img/form-bg.jpg">
      <div class="wrapper">
        <h2>Заявка на уборку</h2>
        <div class="row-fluid show-grid">
          <div class="span3 offset3"> 
            <input id="input-form-support-name" type="text" placeholder="Ваше имя">
          </div>
          <div class="span3">
            <input id="input-form-support-phone" type="text" placeholder="Телефон">
          </div>
        </div>
        <div class="row-fluid show-grid">
          <div class="span6 offset3"> 
            <textarea id="input-form-support-message" placeholder="Сообщение"></textarea>
            <input id="input-form-support-campaign" type="hidden" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>" />
            <input id="input-form-support-term" type="hidden" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>" />    
          </div>
        </div>
        <div class="row-fluid show-grid">
          <div class="span6 offset3"> 
            <div class="success-text" id="input-form-support-success"></div>
            <div class="error-text" id="input-form-support-phone-error"></div>
            <button id="form-support-button">Отправить</button>
          </div>
        </div>
      </div>
    </section>
    <section class="contacts">
      <div class="wrapper">
        <div class="row-fluid show-grid">
          <div class="span8 offset2"> 
            <!--p Московская область, Истринский район--><a class="phone" href="tel:+74952087844"> 
              <h2>8 (495) 208-78-44</h2></a><a class="email" href="mailto:2087844@bk.ru">2087844@bk.ru</a>
            <button id="contacts-support-button">Получить консультацию</button>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer--agreement">
      <div class="wrapper">
        <div class="row-fluid show-grid">
          <div class="span3 footer__copyright">© 2018 Академия Чистоты</div>
          <div class="span3 footer__agree"><a class="agree" href="agreement.html">Соглашение на обработку персональных данных</a></div>
          <div class="span3 footer__ketov"><span>Разработка — <a class="ketov" href="http://ketov.name" target="_blank">Юрий Кетов</a></span></div>
          <div class="span3 phone footer__phone"><a href="tel:+74952087844"> 
              <h3>8 (495) 208-78-44</h3></a></div>
        </div>
      </div>
    </footer>
    <!--include includes/map-->
    <!--include includes/footer-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <!-- calltouch code-->
    <script>(function (w, d, nv, ls) {var lwait = function (w, on, trf, dly, ma, orf, osf) {var pfx = "ct_await_", sfx = "_completed";if (!w[pfx + on + sfx]) {var ci = clearInterval, si = setInterval, st = setTimeout, cmld = function() {if (!w[pfx + on + sfx]) { w[pfx + on + sfx] = true;if ((w[pfx + on] && (w[pfx + on].timer))) { ci(w[pfx + on].timer);w[pfx + on] = null;}orf(w[on]);}};if (!w[on] || !osf) {if (trf(w[on])){cmld();} else {if (!w[pfx + on]) {w[pfx + on] = {timer: si(function () {if (trf(w[on]) || ma < ++w[pfx + on].attempt) {cmld();}}, dly), attempt: 0};}}} else {if (trf(w[on])) {cmld();} else {osf(cmld);st(function(){lwait(w, on, trf, dly, ma, orf);}, 0);}}} else {orf(w[on]);}}; var ct = function (w, d, e, c, n) { var a = 'all', b = 'tou', src = b + 'c' + 'h'; src = 'm' + 'o' + 'd.c' + a + src; var jsHost = "https://" + src, s = d.createElement(e); var jsf = function (w, d, s, h, c, n) { s.async = 1; s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":171110}") + ";"; var p = d.getElementsByTagName(e)[0]; p.parentNode.insertBefore(s, p); }; if (!w.jQuery) { var jq = d.createElement(e);jq.src = jsHost + "." + "r" + 'u/js/jquery-1.7.min.js'; jq.onload = function () {lwait(w, 'jQuery', function (obj) {return (obj ? true : false);}, 30, 100, function () {jsf(w, d, s, jsHost, c, n);});}; var p = d.getElementsByTagName(e)[0]; p.parentNode.insertBefore(jq, p); } else { jsf(w, d, s, jsHost, c, n);}}; var gaid = function (w, d, o, ct, n) {if (!!o) {lwait(w, o, function (obj) {return (obj && obj.getAll ? true : false);}, 200, (nv.userAgent.match(/Opera|OPR\//) ? 10 : 20), function (gaCounter) {var clId = null;try {var cnt = gaCounter && gaCounter.getAll ? gaCounter.getAll() : null;clId = cnt && cnt.length > 0 && !!cnt[0] && cnt[0].get ? cnt[0].get('clientId') : null;} catch (e) {console.warn("Unable to get clientId, Error: " + e.message);}ct(w, d, 'script', clId, n);}, function (f) {w[o](function () {f(w[o]);})});} else {ct(w, d, 'script', null, n);}}; var cid = function () {try {var m1 = d.cookie.match('(?:^|;)\\s*_ga=([^;]*)');if (!(m1 && m1.length > 1)) return null;var m2 = decodeURIComponent(m1[1]).match(/(\d+\.\d+)$/);if (!(m2 && m2.length > 1)) return null;return m2[1]} catch (err) {}}(); if (cid === null && !!w.GoogleAnalyticsObject) {if (w.GoogleAnalyticsObject == 'ga_ckpr') w.ct_ga = 'ga'; else w.ct_ga = w.GoogleAnalyticsObject; if (typeof Promise !== "undefined" && Promise.toString().indexOf("[native code]") !== -1) { new Promise(function (resolve) {var db, on = function () {resolve(true)}, off = function () {resolve(false)}, tryls = function tryls() {try {ls && ls.length ? off() : (ls.x = 1, ls.removeItem("x"), off());} catch (e) {nv.cookieEnabled ? on() : off();}}; w.webkitRequestFileSystem ? webkitRequestFileSystem(0, 0, off, on) : "MozAppearance" in d.documentElement.style ? (db = indexedDB.open("test"), db.onerror = on, db.onsuccess = off) : /constructor/i.test(w.HTMLElement) ? tryls() : !w.indexedDB && (w.PointerEvent || w.MSPointerEvent) ? on() : off();}).then(function (pm) {if (pm) {gaid(w, d, w.ct_ga, ct, 2);} else {gaid(w, d, w.ct_ga, ct, 3);}})} else {gaid(w, d, w.ct_ga, ct, 4);}} else {ct(w, d, 'script', cid, 1);}})(window, document, navigator, localStorage);</script>
    <!-- /calltouch code-->
  </body>
</html>