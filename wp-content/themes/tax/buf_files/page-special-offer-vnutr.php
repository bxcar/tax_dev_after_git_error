<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title>Специальные предложения</title>
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
    <section class="top-block special-offer">
        <h1 class="page-title">Специальные предложения</h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><span>Специальные предложения</span></li>
            </ul>
        </div>
    </section>
    <section class="offer-block-info">
        <div class="subtitle wow fadeInUp" data-wow-duration="1s">Регистрация компаний<br>
            в Великобритании</div>
        <div class="wrap">
            <div class="with-bg-block wow fadeInUp" data-wow-duration="1s">Великобритания является мировым финансовым центром. Превосходная репутация создала стабильные политические и экономические условия которые в полной мере можно использовать зарегистрировав компанию в Великобритании</div>
            <div class="offer-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Регистрация компаний LP в Шотландии</div>
                <p>Компании LP не являются субъектами налога на прибыль (Corporation Tax). Доходы, полученные SLP, считаются доходами ее участников (партнеров), поэтому облагаются налогом на уровне участников. Кроме того нет необходимости готовить и подавать отчет в Реестр Компаний где не отображаются сроки подачи отчетов и деклараций для шотландских компаний. Компания с участниками - не резидентами не может получить сертификат о резидентности в Великобритании и соответственно не может воспользоваться договорами об избежании двойного налогообложения. Законодательство - <span class="strong">Закон о партнерствах 1907 года.</span></p>
            </div>
            <div class="offer-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Партнерства с ограниченной отвественностью</div>
                <p>Этот тип корпоративной структуры является с финансовой точки зрения транспарантным. Это значит, что налоговые обязательства выплачиваются не английскими <span class="strong">LLP</span>, а непосредственно самими партнерами, которые распределяют прибыль в зависимости от своих долей собственности и потом платят налоги в налоговые службы. Имея прибыль непосредственно от статуса финансовой транспарентности, а также, принимая определенные соглашения, становится возможным достижение окончательной налоговой ставки <span class="strong">близкой к 0%.</span></p>
            </div>
            <div class="offer-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Финансовая система</div>
                <p>Отличается высоким качеством предоставляемых профессиональных услуг. Такое мнение сложилось благодаря эффективности, быстроте и профессионализму - характерным чертам Западной Европы. В нашу профессиональную деятельность входит предоставление рекомендаций клиентам по выбору наиболее выгодных для них банков для компаний зарегистрированных в Великобритании.</p>
            </div>
            <div class="offer-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Английский траст</div>
                <p>Благодаря огромному количеству договоров об избежании двойного налогообложения подписанных Великобританией, стало возможным учреждение компании согласно английскому законодательству и управление этой компанией из другой юрисдикции. В этом случае английская компания не является субъектом местной налоговой системы, но выплачивает налоги согласно законам территории, на которой фактически ведется администрирование. На пример, компания, зарегистрированная согласно английским законам с администрацией на Кипре может иметь хорошее имя и прекрасную репутацию, таким образом, достигать налоговой ставки всего лишь в <span class="strong">10%</span>. На сегодняшний день это самая низкая налоговая корпоративная ставка во всей Европе.</p>
            </div>
            <div class="offer-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Отчисления роялти за использование права собственности</div>
                <p>Роялти отчисляются за использование прав на интеллектуальную и промышленную собственность, что предоставляет серьезный источник доходов для многих деловых предприятий. Мудрое решение по поводу регистрации интеллектуальной/промышленной собственности от имени компании, учрежденной в выгодной с налоговой точки зрения юрисдикции, такой как английская, позволяет компании достичь значительного уменьшения налогового бремя.</p>
            </div>
            <div class="offer-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Право собственности на недвижимость</div>
                <p>Иностранные компании также часто используются для арендованного недвижимого имущества в других странах. Право собственности компании зарегистрированной согласно местному законодательству делает возможным использования не только полной анонимности относительно права на недвижимость, но также платить налог по ставке близкой к нулю в случае продажи.</p>
                <p>Избыточная ликвидность компаний может быть использована с пользой для других связанных компаний, используя технику взаимообмена, что управляется холдинговой компанией, действующей согласно выгодным налоговым соглашениям. Холдинговые компании, зачастую пользуются правом полного налогового освобождения на входящие и исходящие дивиденды и гарантируют абсолютную конфиденциальность относительно фактической собственности контролируемых компаний.</p>
            </div>
            <div class="offer-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Фидуциарное право собственности на пакет акций</div>
                <p>Полная конфиденциальность относительно недвижимости компании является гарантированной благодаря тому, что иностранная компания может управляться от имени наших локальных фидуциариев. Таким образом, Клиенты могут быть уверены в полном соответствии действий, как с внутригосударственными, так и с международными нормами, в то же время извлекать пользу от полной анонимности.</p>
            </div>
            <div class="offer-info wow fadeInUp" data-wow-duration="1s">
                <div class="info-title">Компании, действующие согласно партнерским договорам</div>
                <p>Законодательство Великобритании позволяет проводить коммерческие операции между английскими компаниями и компаниями стран Британского содружества в рамках чрезвычайно выгодных налоговых соглашений. Таким образом, согласно определенным условиям, сегодня стало возможным основание английских компаний, которые платят налоговую ставку всего лишь 1-2%.</p>
            </div>
        </div>
    </section>
    <section class="feadback-form order-form">
        <div class="form-wrap wow fadeInUp" data-wow-duration="1s">
            <div class="title-form">ОФОРМЛЕНИЕ ЗАКАЗА</div>
            <form action="">
                <input type="text" placeholder="Имя">
                <input type="email" placeholder="Email">
                <textarea name="" placeholder="Текст"></textarea>
                <input type="submit" value="Отправить">
            </form>
        </div>
    </section>
    <section class="more-offer wow fadeInUp" data-wow-duration="1s">
        <div class="title">Больше специальных предложений</div>
        <div class="wrap">
            <div class="owl-carousel carousel-3">
                <a href="#" class="item">
                    <div class="item-wrap">
                        Учреждение и управление компаниями<br>
                        в Дании
                    </div>
                </a>
                <a href="#" class="item">
                    <div class="item-wrap">
                        Регистрация и сопровождение компаний в <br> Великобритании
                    </div>
                </a>
                <a href="#" class="item">
                    <div class="item-wrap">
                        Учреждение и управление компаниями<br>
                        в Дании
                    </div>
                </a>
                <a href="#" class="item">
                    <div class="item-wrap">
                        Регистрация и сопровождение компаний в <br> Великобритании
                    </div>
                </a>
                <a href="#" class="item">
                    <div class="item-wrap">
                        Учреждение и управление компаниями<br>
                        в Дании
                    </div>
                </a>
                <a href="#" class="item">
                    <div class="item-wrap">
                        Регистрация и сопровождение компаний в <br> Великобритании
                    </div>
                </a>
            </div>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>
