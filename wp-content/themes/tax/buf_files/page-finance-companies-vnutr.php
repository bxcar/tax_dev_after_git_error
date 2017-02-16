<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title>финансовые компании</title>
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
    <section class="top-block top-finance-companies">
        <h1 class="page-title">Финансовые компании</h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><a href="finance-companies.html">Предложения </a></li>
                <li><span>Финансовык компании</span></li>
            </ul>
        </div>
    </section>
    <section class="fin-companies-info">
        <div class="subtitle wow fadeInUp" data-wow-duration="1s">Сент-Винсент и Гренадины:<br>
            Страховые компании</div>
        <div class="fin-companies-img wow fadeInUp" data-wow-duration="1s">
            <img src="<?php bloginfo('template_url');?>/img/finance-companies-1.png" alt="">
        </div>
        <div class="wrap">
            <div class="company-info wow fadeInUp" data-wow-duration="1s">
                <p><span class="strong">Государство Сент-Винсент и Гренадины</span> (Saint Vincent & the Grenadines) представляет собой группу из 18 крупных островов, расположенных в 100 милях к западу от Барбадоса и к северу от Венесуэлы. Острова получили независимость в 1979 году, но королева Великобритании остается главой государства и ее представляет генерал-губернатор. Сент-Винсент и Гренадины являются членом Британского Содружества наций, правовая система аналогична британской. Правительство настойчиво проводит в жизнь экономическую политику, нацеленную на создание крупного финансового центра. </p>
            </div>
            <div class="with-bg-block wow fadeInUp" data-wow-duration="1s">В соответствии с Законом о Международном Страховании (International Insurance (Amendment and Consolidation) Act) 1998 года разрешена деятельность <span class="strong">пяти классов международных страховых компаний, а именно: </span></div>
            <div class="company-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Класс I. Неограниченная лицензия</div>
                <p>Позволяет страховой компании вести любую международную страховую деятельность, включая долгосрочный международный страховой бизнес. <span class="strong">“Долгосрочный страховой бизнес”</span> означает международный страховой бизнес, который включает виды деятельности не относящиеся к общему международному страхованию, а именно:</p>
                <div class="list">
                    <ul>
                        <li>Заключение и выполнение контрактов по международному страхованию, жизни человека или контрактов по выплате аннуитетов по данному виду страхования;</li>
                        <li>Заключение и выполнение контрактов по международному страхованию против рисков застрахованного лица:
                            <ul class="number-list">
                                <li>Травма в результате несчастного случая или несчастного случая определенного класса</li>
                                <li>Смерть в результате несчастного случая или несчастного случая определенного класса</li>
                                <li>Инвалидность или смерть в результате заболевания или заболеваний определенного класса.</li>
                            </ul>
                        </li>
                        <li>Заключение и выполнение контрактов по международному страхованию путем выпуска полисов, долговых обязательств, сертификатов вкладов или другим способом. Таким образом, взамен одной или более выплаченных страховщику премий, сумма или несколько сумм будут выплачена застрахованным лицам в будущем.</li>
                        <li>Должна иметь собственный капитал не менее $200000. </li>
                    </ul>
                </div>
            </div>
            <div class="company-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Класс II. Общая лицензия </div>
                <div class="with-bg-block">Позволяет страховой компании вести общую международную страховую деятельность за исключением долгосрочного международного страхового бизнеса. Общая международная страховая деятельность” означает международный страховой бизнес, отличающийся от долгосрочного международного страхования и включает в себя:</div>
                <div class="list">
                    <ul>
                        <li>Бизнес по кредитованию жизни, то есть бизнес, состоящий в заключении и выполнении страховых контрактов против рисков потери из-за неуплаты долгов застраховавшимся лицам по причине смерти их должников.
                            <div class="title-list">К таким контрактам относятся:</div>
                            <ul class="number-list">
                                <li>Контракты, не являющиеся контрактами по местному международному страхованию;</li>
                                <li>Контракты действительные на протяжении восьми или меньше лет;</li>
                                <li>Контракты, которые не продлеваются по умолчанию и не переходят в разряд страховых контрактов другого типа с другим периодом действия.</li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <p>Должна иметь собственный капитал не менее $100000. </p>
            </div>
            <div class="company-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Класс III. Лицензия ассоциаций </div>
                <div class="with-bg-block">Позволяет страховой компании вести любую международную деятельность, включая долгосрочный международный страховой бизнес, при наличии 2-х или более владельцев страховой компании, а также вести не более 30-ти процентов своего международного страхового бизнеса (основываясь на нетто-ставках страховых взносов) с лицами, не являющимися владельцами страховой компании.</div>
                <p>Должна иметь собственный капитал не менее $50,000, а также вести международный бизнес, не менее 70% нетто-ставок, которых будут по следующим видам страхования:</p>
                <div class="number-list">
                    <ul>
                        <li>Страхование рисков владельцев страховой компании или компаньонов этих владельцев</li>
                        <li>Страхование рисков, которые, по мнению Уполномоченного, вытекают из бизнеса или операций данных владельцев.</li>
                    </ul>
                </div>
            </div>
            <div class="company-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Класс IV. Групповая лицензия</div>
                <div class="with-bg-block">Позволяет страховой компании вести любую международную страховую деятельность, включая долгосрочный международный страховой бизнес, при наличии одного владельца данной страховой компании и филиалов, а также наемных работников владельца или филиалов.</div>
                <div class="list">
                    <ul>
                        <li>Бизнес по страхованию групп наемных работников, то есть бизнес, состоящий в заключении и выполнении контрактов по страхованию жизни наемных работников. К таким контрактам относятся:
                            <ul class="number-list">
                                <li>Контракты, не являющиеся контрактами по местному международному страхованию;</li>
                                <li>Контракты действительные на протяжении восьми или меньше лет;</li>
                                <li>Контракты, которые не продлеваются по умолчанию и не переходят в разряд страховых контрактов другого типа с другим периодом действия; </li>
                                <li>Контракты, которые заключаются на групповой основе.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="list">
                    <div class="title-list">Компания должна:</div>
                    <ul>
                        <li>Иметь собственный капитал не менее $25000</li>
                        <li>Владельцем должна быть одна компания, траст или партнерство, или не более 15 физических лиц, объединенных в одной фирме, ассоциации или предприятии;</li>
                        <li>Вести международный страховой бизнес, заключающийся только в страховании рисков владельцев или выплате аннуитетов (writing annuities) владельцам.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>