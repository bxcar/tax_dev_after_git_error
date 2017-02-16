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
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png">
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
    <section class="top-block top-flags">
        <h1 class="page-title">Удобные флаги</h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><span>Удобные флаги</span></li>
            </ul>
        </div>
    </section>
    <section class="service-vnutr-info flags-vnutr-info">
        <div class="title wow fadeInUp" data-wow-duration="1s">Бермудские острова:<br>
            Использование бермудского флага</div>
        <div class="img-block wow fadeInUp" data-wow-duration="1s">
            <img src="<?php bloginfo('template_url');?>/img/flag-img.jpg" alt="">
        </div>
        <div class="text wow fadeInUp" data-wow-duration="1s">
            <p>Бермудские острова являются одним из старейших оффшорных центров в мире. По тоннажу судов бермудский судовой регистр занимает четвертое место в мире, при этом количество регистрируемых судов продолжает устойчиво возрастать. Особенность Бермудских островов в сфере судовладения и судопользования заключается в том, что законодательство не устанавливает каких-либо специальных форм для предприятий этой отрасли.</p>
            <p>Бермудские острова являются классическим офшорным центром - налоги на доходы никогда не вводились ни для резидентов, ни для нерезидентов. Вместо налогов на доходы существуют различного рода правительственные и иные сборы. Сборы подразделяются на регистрационные, а также взимаемые ежегодно. При регистрации освобожденной компании (Ехеmpt Company) взимается правительственный сбор в размере 100 бермудских долл., а ежегодные правительственные сборы составляют от 1 600 до 8 000 бермудских долл. в зависимости от величины активов компании. Минимальный уставный капитал компании должен составлять 12 000 бермудских долл.</p>
            <p><span class="strong">Ставки ежегодного сбора с освобожденных компаний на Бермудских островах (в долларах Бермудских островов)</span></p>
        </div>
        <div class="table wow fadeInUp" data-wow-duration="1s">
            <div class="top row">
                <div class="capital">Капитал</div>
                <div class="tax">Сумма ежегодного сбора</div>
            </div>
            <div class="row">
                <div class="capital">12 000 <span>USD</span></div>
                <div class="tax">1 600,00 <span>USD</span></div>
            </div>
            <div class="row">
                <div class="capital"><span>от</span> 12 000 <span>до</span> 120 000 <span>USD</span></div>
                <div class="tax">1 600,00 <span>USD</span></div>
            </div>
            <div class="row">
                <div class="capital"><span>от</span> 120 000 <span>до</span> 1 200 000 <span>USD</span></div>
                <div class="tax">3 200,00 <span>USD</span></div>
            </div>
            <div class="row">
                <div class="capital"><span>от</span> 1 200 000 <span>до</span> 12 000 000 <span>USD</span></div>
                <div class="tax">6 400,00 <span>USD</span></div>
            </div>
            <div class="row">
                <div class="capital"><span>более</span> 12 000 000 <span>USD</span></div>
                <div class="tax">8 000,00 <span>USD</span></div>
            </div>
        </div>
        <div class="text wow fadeInUp" data-wow-duration="1s">
                <p>Целый ряд привлекательных сторон регистрации соответствующего предприятия на Бермудских островах, а также ряд недостатков для определенных потенциальных учредителей бермудской освобожденных компании определяется тем, что Бермуды являются одним из наиболее престижных и относительно дорогих офшорных центров. Политика, властей заключается в том, чтобы максимально укрепить репутацию динамично развивающегося финансового центра.</p>
                <p>Бермудские острова отличает высокая стоимость жизни, многочисленные ограничения на въезд и приобретение недвижимости, максимально жесткие для офшорной территории условия регистрации и функционирования освобожденных от уплаты налогов и от валютного контроля компаний. Важно подчеркнуть, что освобожденные компании не предоставляются потенциальным пользователям в готовом виде. Процедура инкорпорации обычно занимает три-четыре недели с момента подачи на регистрацию всех необходимых документов. Существует ряд ограничений на использование отдельных слов в названиях компаний. Если название близко или напоминает название других существующих компаний, возможен отказ от регистрации.</p>
                <p>Такие слова, как <span class="strong">«банк», «банковский», «траст», «трастовый», «фидуциарный», «брокер», «брокерский», «финансовые услуги»</span> и иные вариации из этих слов могут употребляться в названиях компаний при условии получения данной компанией лицензии на соответствующий названию вид деятельности. Минимальные издержки по регистрации освобожденной компании с ограниченной ответственностью составляют 4400 бермудских долл. (бермудский доллар равен доллару США).</p>
                <p>Законодательством запрещен выпуск акций без указания их номинала и на предъявителя. Сведения об акционерах освобожденной компании являются общедоступными. Такие сведения должны находиться по юридическому адресу компании, хотя, разумеется, возможно использование схем с номинальными держателями акций. Минимально необходимое количество акционеров составляет три. Ведение открытого реестра акционеров обязательно. Собрания акционеров должны проводиться не реже одного раза в год, но не обязательно на Бермудских островах.</p>
                <p>Сведения об окончательных бенефициарных владельцах в принципе могут оставаться закрытыми, однако информация о них должна быть предоставлена при регистрации компании. Директор компании должен быть резидентом Бермудских остовов. Минимально необходимое количество директоров - два. Собрания совета директоров являются обязательными. Необходимым является местный юридический адрес компании. Компания обязана составлять годовой отчет. Аудиторская проверка деятельности является формально обязательной, однако может быть исключена решением директоров собрания и общего собрания акционеров. Кроме того власти устанавливают дополнительные обязанности по подготовке и представлению финансовой отчетности, в частности директора компаний должны заверять ежеквартальные отчеты о финансовом положении компании. Важно отметить, что Бермуды первыми заключили с США договор об обмене информацией <span class="strong">(подписан 11 июля 1986 г., ратифицирован 1 декабря 1988 г.).</span> Впоследствии аналогичный договор США заключили с Панамой.</p>
            </div>
        <div class="img-block wow fadeInUp" data-wow-duration="1s">
            <img src="<?php bloginfo('template_url');?>/img/flag-2.jpg" alt="">
        </div>
        <div class="text wow fadeInUp" data-wow-duration="1s">
            <p><span class="strong">Бермудские острова являются старейшей британской колонией</span> (зависимой территорией), что обусловило применение основных норм британского законодательства о компаниях и трастового законодательства. Использование бермудского флага обусловливается принадлежностью компаний, которая может быть создана на Бермудских островах, в Великобритании, на острове Мэн или в других государствах, включенных в специальный правительственный перечень. Разрешение на использование бермудского флага возможно только после прохождения специальных регистрационных, относительно длительных процедур. Важно отметить, что обязательным является предоставление подробных сведений о бенефициарных (окончательных) владельцах судна.</p>
            <p>Таким образом, для целей судовладения Бермудские острова могут представлять определенный интерес для российских пользователей, особенно с учетом того, что Бермуды являются крупнейшим мировым страховым и перестраховочным офшорным центром. Бермудский офшорный центр ориентирован на судовладельцев, но не на судопользователей. Однако его привлекательность снижается вследствие территориальной удаленности, относительно высоких издержек по созданию и поддержанию судовладельческой компании, усложненности процедур регистрации. Отсутствуют какие-либо соглашения об устранении двойного налогообложения доходов и имущества. Особое территориальное положение Бермудских островов (полет из Нью--Йорка занимает полтора часа), наличие первоклассной инфраструктуры являются причинами того, что большинство учредителей освобожденных компаний составляют граждане и юридические лица США</p>
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
    <section class="helpful-info more-flags-vnutr">
        <div class="wrap wow fadeInUp" data-wow-duration="1s">
            <div class="title">Другие удобные флаги</div>
            <div class="info-item">
                <div class="item">
                    <a href="#">Остров Мэн: Судоходные компании</a>
                </div>
                <div class="item">
                    <a href="#">Панама: Регистрация судов, пошлины и сборы</a>
                </div>
                <div class="item">
                    <a href="#">Кипр: Регистрация судоходных компаний
                        и судов</a>
                </div>
                <div class="item">
                    <a href="#">Бермудские острова: Использование бермудского флага</a>
                </div>
                <div class="item">
                    <a href="#">Сингапур: Право использования флага</a>
                </div>
                <div class="item">
                    <a href="#">Что такое “Удобные флаги”?</a>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End content -->
<? get_footer() ?>