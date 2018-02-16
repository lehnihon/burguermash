<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script>
new WOW().init();
</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header" class="header">
		<div class="container">

			<div class="row header-menu">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-dark">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						<img class="logop float-right" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logop.png"; ?>"/>
						<div class="row collapse navbar-collapse" id="navbarSupportedContent">
							<div class="col-md">
								<a class="nav-link" href="<?php echo home_url( '/' ); ?>">INÍCIO</a>
							</div>
							<div class="col-md">
								<a href="<?php echo esc_url( home_url( 'sobre' ) ); ?>">BURGUER MASH</a>
							</div>
							<div class="col-md">
								<a href="<?php echo esc_url( home_url( 'cardapio' ) ); ?>">CARDÁRPIO</a>
							</div>
							<div class="col-md logo">
								<a href="<?php echo esc_url( home_url( '' ) ); ?>"><img class="logo-header" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-top.png"; ?>"/></a>
							</div>
							<div class="col-md">
								<a href="<?php echo esc_url( home_url( 'fotos' ) ); ?>">FOTOS</a>
							</div>
							<div class="col-md">
								<a href="<?php echo esc_url( home_url( 'contato' ) ); ?>">FALE CONOSCO</a>
							</div>
							<div class="col-md redes">
								<ul class="redes_sociais_header">
									<li class="youtube"><a target="_blank" href="#"></a></li>
									<li class="instagram"><a target="_blank" href="#"></a></li>
									<li class="twitter"><a target="_blank" href="#"></a></li>
									<li class="facebook"><a target="_blank" href="#"></a></li>
								</ul>	
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div><!-- .container -->
	</header><!-- #masthead -->
	<div id="banner" class="wow fadeIn">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<?php 
				    echo do_shortcode("[smartslider3 slider=2]"); 
				?>
				</div>
			</div>
		</div>
	</div>


