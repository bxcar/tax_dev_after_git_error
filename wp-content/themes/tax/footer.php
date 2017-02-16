<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tax
 */

?>

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
                <div class="title" id="email-delivery-title"><?php the_field('footer_email_title', 'option') ?></div>
                <form id="email-delivery-form" action="">
                    <input type="hidden" name="source" value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                    <input type="hidden" name="order" value="Подписка на рассылку">
                    <input type="hidden" name="check-email-delivery" value="1">
                    <input type="hidden" name="sendto" value="<?= get_field('footer_target_email', 'options');?>">
                    <input name="email" type="email" placeholder="<?php the_field('footer_email_placeholder', 'option') ?>">
                    <input id="email-delivery-form-submit" type="submit" placeholder="">
                </form>
                <script>
                    // this is the id of the form
                    $("#email-delivery-form").submit(function (e) {

                        $("#email-delivery-form-submit").css(
                            {
                                "background-image": "url(<?= get_template_directory_uri()?>/img/loader-form.gif)",
                                "background-size": "50%",
                                "background-repeat": "no-repeat",
                                "background-position-y": "50%",
                                "background-position-x": "50%"
                            }
                        );

                        var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

                        $.ajax({
                            type: "POST",
                            url: url,
                            data: $("#email-delivery-form").serialize(), // serializes the form's elements.
                            success: function (data) {
                                if (data == 1) {
                                    $("#email-delivery-title").html('ПОДПИСКА ОФОРМЛЕНА');
                                    $("#email-delivery-form-submit").css({"background-image": "url(<?= get_template_directory_uri() ?>/img/submit-bg.png)"});
                                    document.getElementById('email-delivery-form').reset()
                                }

                                else {
                                    $("#email-delivery-title").html("Произошла ошибка, попробуйте еще раз");
                                    $("#email-delivery-form-submit").css({"background-image": "url(<?= get_template_directory_uri() ?>/img/submit-bg.png)"});
                                }
//                                            alert(data);
                            },

                            error: function (data) {
                                $("#email-delivery-title").html("Произошла ошибка, попробуйте еще раз");
                                $("#email-delivery-form-submit").css({"background-image": "url(<?= get_template_directory_uri() ?>/img/submit-bg.png)"});
                            }
                        });

                        e.preventDefault(); // avoid to execute the actual submit of the form.
                    });
                </script>
                <div class="social-block small">
                    <div class="title"><?php the_field('footer_social_title', 'option') ?></div>
                    <div class="social-link">
                        <a href="<?php the_field('social_linckedin_link', 'options') ?>" class="linked"><i
                                class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="<?php the_field('social_instagram_link', 'options') ?>" class="inst"><i
                                class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a class="fb" href="<?php the_field('social_facebook_link', 'options') ?>"><i
                                class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="<?php the_field('social_twitter_link', 'options') ?>" class="tw"><i
                                class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p><?php the_field('footer_copyright', 'option') ?></p>
            <a href="http://dizz.in.ua/ru">Сделано в Dizz Agency.</a>
        </div>
    </div>
</footer>
<!-- Optimized loading JS Start -->
<script>var scr = {
        "scripts": [
            {"src": "<?php bloginfo('template_url');?>/js/libs.min.js", "async": false},
            <?php if(basename(get_current_template()) == 'page-main.php') { ?>
            {"src": "<?php bloginfo('template_url');?>/js/in-view.js", "async": false},
            <?php } ?>
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