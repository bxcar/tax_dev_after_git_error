<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tax
 */

?>

<!-- Header -->
<header class="internal">
	<div id="up-button"><img alt="Прокрутить вверх" src="<?= get_template_directory_uri();?>/img/up.png"></div>
	<div class="wrap">
		<div class="left-side">
			<a class="logo" href="<?=home_url();?>"><img src="<?php the_field('header_logo_1', 'option') ?>" alt=""></a>
			<div class="phone">
				<p><i class="fa fa-phone" aria-hidden="true"></i><?php the_field('header_phone_1', 'option') ?></p>
				<a href="#callback-form" class="popUp-btn"><?php the_field('header_text_under_phone_1', 'option') ?></a>
				<div class="hidden">
					<div class="feadback-form" id="callback-form">
						<div class="form-wrap">
							<div class="title-form">Заказать обратный звонок</div>
							<style>
								.feadback-form input[type=tel]{
									display: inline-block;
									margin-left: 15px;
									width: -webkit-calc(50% - 15px);
									width: calc(50% - 15px);
								}

								@media (max-width: 450px)
								{
									.feadback-form input[type=tel]{
										width: 100%;
										margin-left: 0;
									}
								}
							</style>
							<form id="popup-form" method="post">
								<input type="hidden" name="source" value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
								<input type="hidden" name="order" value="Заказать звонок">
								<input type="hidden" name="sendto" value="<?= get_field('footer_target_email', 'options');?>">
								<input style="color: #fff" required name="name" type="text" placeholder="<?php the_field('main_page_wo_placeholder1', 35) ?>">
								<input style="color: #fff" required name="phone" type="tel" placeholder="Телефон">
								<textarea name="text" placeholder="<?php the_field('main_page_wo_placeholder3', 35) ?>"></textarea>
								<input id="submit-popup-form" type="submit" value="<?php the_field('main_page_wo_button_text', 35) ?>">
							</form>
							<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
							<script>
								// this is the id of the form
								$("#popup-form").submit(function(e) {

									$("#submit-popup-form").attr( "value", "");
									$("#submit-popup-form").css(
										{"background-image" : "url(<?= get_template_directory_uri()?>/img/loader-form.gif)",
											"background-size":"15%",
											"background-repeat": "no-repeat",
											"background-position-y": "50%",
											"background-position-x": "50%"
										}
									);
									var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

									$.ajax({
										type: "POST",
										url: url,
										data: $("#popup-form").serialize(), // serializes the form's elements.
										success: function(data)
										{
											if (data == 1){
												$("#submit-popup-form").attr( "value", "Успешно отправлено");
												$("#submit-popup-form").css({"background-image" : "none"});

												jQuery('#popup-form')[0].reset();
											}

											else {
												$("#submit-popup-form").attr( "value", "Произошла ошибка");
												$("#submit-popup-form").css({"background-image" : "none"});
											}
//                                            alert(data);
										},

										error: function(data)
										{
											$("#submit-popup-form").attr( "value", "Произошла ошибка");
											$("#submit-popup-form").css({"background-image" : "none"});
										}
									});

									e.preventDefault(); // avoid to execute the actual submit of the form.

									setTimeout(func, 10000);

									function func() {
										$("#submit-popup-form").attr( "value", "Отправить");
										$("#submit-popup-form").css({"background-image" : "none"});
									}
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="menu">
			<?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_class'=> '', 'container' => 'false')); ?>
			<a href="#dop-menu-block" class="dop-menu popUp-btn">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
		<div class="hidden">
			<div class="dop-m-block" id="dop-menu-block">
				<div class="dop-menu-layout">
					<ul class="menu">
						<li><a href="<?= home_url();?>">ГЛАВНАЯ</a></li>
						<li><span><?php the_field('footer_h_f_m', 'option') ?></span>
							<div class="caret"></div>
							<div class="submenu">
								<style>
									#menu-primarymenu-1 li:first-child {
										display: none !important;
									}
								</style>
								<?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_class' => '', 'container' => 'false')); ?>
							</div>
						</li>
						<li><span><?php the_field('footer_h_s_m', 'option') ?></span>
							<div class="caret"></div>
							<div class="submenu">
								<?php wp_nav_menu(array('theme_location' => 'menu-2', 'menu_class' => '', 'container' => 'false')); ?>
							</div>
						</li>
						<li><span><?php the_field('footer_h_t_m', 'option') ?></span>
							<div class="caret"></div>
							<div class="submenu">
								<?php wp_nav_menu(array('theme_location' => 'menu-3', 'menu_class' => '', 'container' => 'false')); ?>
							</div>
						</li>
					</ul>

					<div class="social-block small">
						<div class="title">Мы в соцсетях</div>
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
		</div>
	</div>
</header>
<!-- End header -->
