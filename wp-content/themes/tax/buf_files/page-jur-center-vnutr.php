<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title>Удобные флаги</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <!-- Custom Browsers Color End -->
    <script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>
    <script>
        google.maps.event.addDomListener(window, 'load', init);
        var map;
        function init() {
            var mapOptions = {
                center: new google.maps.LatLng(50.483787, 30.493169999999964),
                zoom: 15,
                zoomControl: false,
                disableDoubleClickZoom: true,
                mapTypeControl: false,
                scaleControl: false,
                scrollwheel: false,
                panControl: false,
                streetViewControl: false,
                draggable : true,
                overviewMapControl: false,
                overviewMapControlOptions: {
                    opened: false,
                },
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],
            }
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var locations = [
                ['Tax', 'undefined', 'undefined', 'undefined', 'undefined', 50.483787, 30.493169999999964, 'img/map-icon.png']
            ];
            for (i = 0; i < locations.length; i++) {
                if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
                if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
                if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
                if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
                if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}

                marker = new google.maps.Marker({
                    icon: markericon,
                    position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                    map: map,
                    title: locations[i][0],
                    desc: description,
                    tel: telephone,
                    email: email,
                    web: web
                });
                link = 'img/map-icon.png';
            }
        }
    </script>
    <?php wp_head() ?>
</head>

<body>

<!-- Custom HTML -->
<? get_header() ?>
<!-- Content -->
<main>
    <section class="top-block top-jur-center">
        <h1 class="page-title">Центр юрисдикций</h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><a href="jur-center.html">Центр Юрисдикци </a></li>
                <li><span>Сент Винсент и Гренадины  </span></li>
            </ul>
        </div>
    </section>
    <section class="fin-companies-info jur-center-info">
        <div class="subtitle wow fadeInUp" data-wow-duration="1s">Сент-Винсент и Гренадины:</div>
        <div class="fin-companies-img">
            <img class="wow fadeInUp" data-wow-duration="1s" src="<?php bloginfo('template_url');?>/img/finance-companies-1.png" alt="">
        </div>
        <div class="wrap">
            <div class="with-bg-block wow fadeInUp" data-wow-duration="1s">
                <p><span class="strong">Государство Сент-Винсент и Гренадины</span> (Saint Vincent & the Grenadines) представляет собой группу из 18 крупных островов, расположенных в 100 милях к западу от Барбадоса и к северу от Венесуэлы. Острова получили независимость в 1979 году, но королева Великобритании остается главой государства и ее представляет генерал-губернатор. Сент-Винсент и Гренадины являются членом Британского Содружества наций, правовая система аналогична британской. Правительство настойчиво проводит в жизнь экономическую политику, нацеленную на создание крупного финансового центра. </p>
            </div>
            <div class="company-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Области применения</div>
                <p><span class="strong">Виды компаний</span> — Международные компании (International Companies — IC’s). Оффшорные компании в Сент-Винсент и Гренадинах может владеть счетами в банках, недвижимостью, авторскими правами, патентами, акциями других компаний, что позволяет получать доход в виде комиссии, процентных отчислений и т.п. на офшорный счет без налогообложения. Оффшорная компания может участвовать в международной торговле в качестве посредника, так чтобы основной доход накапливался на офшорном безналоговом счету. Это позволяет уменьшить налогооблагаемую прибыль владельца компании, проживающего в юрисдикции с высоким уровнем налогообложения.</p>
            </div>
            <div class="company-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Налогообложение и отчетность компаний</div>
                <p>Компания не платит никаких налогов на Сент-Винсенте кроме ежегодного налога на акционерный капитал в размере 0.35%. Отчетность и аудит не обязательны. Годовой отчет или финансовый отчет не вносится в государственный реестр, поэтому остается возможность сохранить полную анонимность.</p>
            </div>
            <div class="company-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Требования к названию компании</div>
                <p>Название компании должно заканчиваться словом Limited. Не следует употреблять в названии такие слова как Банк, Строительная компания, Коммерческая палата, Чартерная, Кооперативная, Имперская, Муниципальная, Королевская (Bank, Building Society, Chamber of Commerce, Chartered, Cooperative, Imperial, Municipal, Royal).</p>
            </div>
            <div class="company-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Общие требования</div>
                <div class="list">
                    <ul>
                        <li>Если клиенту требуются номинальные директоры, то в этом случае на его имя выдается нотариально заверенная и легализованная генеральная доверенность, по которой они полностью передают свои полномочия указанному лицу или лицам.</li>
                        <li>Ежегодная пошлина уплачивается к 1 января каждого года. В случае неоплаты компания закрывается в кратчайшие сроки.</li>
                        <li>Законодательство о компаниях Закон о международных компаниях (International Companies Act).</li>
                        <li>Уставный капитал компании может быть заявлен и не выплачен.</li>
                        <li>IBC могут выпускать акции на предъявителя</li>
                        <li>Минимальное число акционеров: Два</li>
                        <li>В соответствии с законодательством в качестве зарегистрированного офиса международной компании используется адрес ее местного представителя.</li>
                        <li>Директора: минимальное число директоров — один. Директор не обязан быть резидентом. Допустимы корпоративные директора, в том числе и юридические лица.</li>
                        <li>Собрания акционеров могут проводиться в любом месте по выбору акционеров или совета директоров.</li>
                        <li>Компании не подвергаются валютному регулированию и другим финансовым ограничениям.</li>
                        <li>В соответствии с законодательством лица, имеющие профессиональную квалификацию имеют право подавать заявления на регистрацию в St. Vincent Trust Authority.</li>
                        <li>Возможна покупка готовой компании</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="feadback-form flags-form">
        <div class="form-wrap wow fadeInUp" data-wow-duration="1s">
            <div class="title-form">Получить консультацию</div>
            <form action="">
                <input type="text" placeholder="Имя">
                <input type="email" placeholder="Email">
                <textarea name="" placeholder="Текст"></textarea>
                <input type="submit" value="Отправить">
            </form>
        </div>
    </section>
    <section class="more-services more-jur-center vnutr wow fadeInUp" data-wow-duration="1s">
        <div class="title">Другие Центры</div>
        <div class="wrap">
            <div class="owl-carousel carousel-4">
                <div>
                    <a href="#" class="item">
                        <span class="text">Австрия</span>
                    </a>
                </div>
                <div>
                    <a href="#" class="item">
                        <span class="text">Арабские Эмираты</span>
                    </a>
                </div>
                <div>
                    <a href="#" class="item">
                        <span class="text">Багамские острова</span>
                    </a>
                </div>
                <div>
                    <a href="#" class="item">
                        <span class="text">Австрия</span>
                    </a>
                </div>
                <div>
                    <a href="#" class="item">
                        <span class="text">Арабские Эмираты</span>
                    </a>
                </div>
                <div>
                    <a href="#" class="item">
                        <span class="text">Багамские острова</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>
