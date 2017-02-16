<!-- Footer -->
<footer class="wow fadeInUp" data-wow-duration="1s">
    <div class="wrap">
        <div class="footer-top">
            <div class="item">
                <div class="title"><?php the_field('footer_h_f_m', 'option') ?></div>
                <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_class' => '', 'container' => 'false')); ?>
            </div>
            <div class="item">
                <div class="title"><?php the_field('footer_h_s_m', 'option') ?></div>
                <?php wp_nav_menu(array('theme_location' => 'menu-2', 'menu_class' => '', 'container' => 'false')); ?>
            </div>
            <div class="item">
                <div class="title"><?php the_field('footer_h_t_m', 'option') ?></div>
                <?php wp_nav_menu(array('theme_location' => 'menu-3', 'menu_class' => '', 'container' => 'false')); ?>
            </div>
            <div class="item subscribe">
                <div class="title"><?php the_field('footer_email_title', 'option') ?></div>
                <form action="">
                    <input type="email" placeholder="<?php the_field('footer_email_placeholder', 'option') ?>">
                    <input type="submit" placeholder="">
                </form>
                <div class="social-block small">
                    <div class="title"><?php the_field('footer_social_title', 'option') ?></div>
                    <div class="social-link">
                        <a href="" class="linked"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="" class="inst"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a class="fb" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="" class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p><?php the_field('footer_copyright', 'option') ?></p>
            <a href="http://dizz.in.ua/ru">Сделано в Dizz.</a>
        </div>
    </div>
</footer>
<!-- Optimized loading JS Start -->
<script>var scr = {
        "scripts": [
            {"src": "<?php bloginfo('template_url');?>/js/libs.min.js", "async": false},
            {"src": "<?php bloginfo('template_url');?>/js/common.js", "async": false}
        ]
    };
    !function (t, n, r) {
        "use strict";
        var c = function (t) {
            if ("[object Array]" !== Object.prototype.toString.call(t))return !1;
            for (var r = 0; r < t.length; r++) {
                var c = n.createElement("script"), e = t[r];
                c.src = e.src, c.async = e.async, n.body.appendChild(c)
            }
            return !0
        };
        t.addEventListener ? t.addEventListener("load", function () {
            c(r.scripts);
        }, !1) : t.attachEvent ? t.attachEvent("onload", function () {
            c(r.scripts)
        }) : t.onload = function () {
            c(r.scripts)
        }
    }(window, document, scr);
</script>
<!-- Optimized loading JS End -->
<?php wp_footer() ?>
</body>
</html>
