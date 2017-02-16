<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tax
 */

?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<title>Страница не найдена - 404</title>
	<meta name="description" content="Ошибка 404">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->
	<meta property="og:image" content="<?= get_template_directory_uri();?>/path/to/image.jpg">
	<link rel="shortcut icon" href="<?= get_template_directory_uri();?>/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?= get_template_directory_uri();?>/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri();?>/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri();?>/img/favicon/apple-touch-icon-114x114.png">
	<!-- Template Basic Images End -->

	<!-- Custom Browsers Color Start -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">
	<!-- Custom Browsers Color End -->

	<style>
		body, html {
			width: 100%;
			height: 100%;
		}

		main, section {
			min-width: 100%;
			min-height: 100%;
			position: relative;
		}

		main {
			background: url(<?= get_template_directory_uri()?>/img/404-bg.jpg) no-repeat;
			background-size: cover;
		}

		.page-not-found {
			display: flex;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-webkit-flex-direction: column;
			-ms-flex-direction: column;
			flex-direction: column;
			-webkit-box-pack: center;
			-webkit-justify-content: center;
			-ms-flex-pack: center;
			justify-content: center;
		}

		.page-not-found img {
			padding-top: 70px;
			padding-bottom: 100px;
		}

		.page-not-found .error-block {
			width: 471px;
			height: 471px;
			background-color: #3da04e;
			-webkit-border-radius: 50%;
			border-radius: 50%;
			margin-bottom: 80px;
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-webkit-flex-direction: column;
			-ms-flex-direction: column;
			flex-direction: column;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-box-pack: center;
			-webkit-justify-content: center;
			-ms-flex-pack: center;
			justify-content: center;
		}

		.page-not-found a {
			color: #fff !important;
			width: 200px;
			font-size: 14px;
			font-weight: 400;
			line-height: 45px;
			border: 3px solid #3ca04f;
			display: inline-block;
			text-transform: uppercase;
			-webkit-transition: all .2s;
			transition: all .2s;
			text-align: center;
			margin-bottom: 70px;
		}

		.page-not-found a:hover {
			text-decoration: none;
			background: rgba(0,0,0,.28);
		}

		.page-not-found .error-block h1 {
			color: #fff;
			font-size: 6.25rem;
			font-weight: 700;
			line-height: 75px;
			margin: .67em 0;
			font-family: georgia,sans-serif;
		}

		.page-not-found .error-block h1:after {
			content: '';
			display: block;
			width: 100%;
			max-width: 100px;
			margin: 35px auto 30px;
			height: 1px;
			background-color: #fff;
		}

		.page-not-found .error-block .sutitle {
			color: #fff;
			font-weight: 400;
			font-size: 1.875rem;
			line-height: 50px;
			max-width: 170px;
			text-align: center;
			font-family: georgia,sans-serif;
		}

		.page-not-found .error-block p {
			color: #fff;
			font-size: 1.1875rem;
			font-weight: 400;
			line-height: 16px;
			padding-bottom: 20px;
			font-family: georgia,sans-serif;
		}

		.page-not-found .error-block .sutitle span {
			font-size: 2.5rem;
		}
	</style>

	<?php wp_head(); ?>

</head>

<body>

<main>
	<section class="page-not-found">
		<img src="<?= get_template_directory_uri()?>/img/logo.png" alt="">
		<div class="error-block">
			<p>Ошибка</p>
			<h1>404</h1>
			<div class="sutitle"><span>Страница</span>
				не найдена</div>
		</div>
		<a href="<?= get_home_url();?>">НА ГЛАВНУЮ</a>
	</section>
</main>
<?php wp_footer();?>
</body>
</html>
