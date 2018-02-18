<?php
get_header(); ?>
<div id="content">
	<section id="paginas" class="sobre-desc">
		<div class="container">
			<div class="row wow fadeIn">
				<div class="col-md-12 text-center">
					<h1 class="alexc">A Burger Mash</h1>
				</div>
			</div>
			<div class="row wow fadeIn">
				<div class="col-md-5 text-left">
					<h2>Burger Mash</h2>
					<p>A Burger Mash transformou a paixão pela cozinha em profissão!<br>
					Com uma proposta totalmente diferente, a Burger Mash se 
					destaca por explorar uma combinação perfeita entre arte, 
					gastronomia e um ambiente super aconchegante bem no 
					coração do Jardim Anália Franco, zona leste de São Paulo.<br><br>
					Resolvemos criar a nossa própria receita para preparar os 
					saborosos e suculentos hamburges. Nós preparamos o nosso 
					próprio hamburguer, bacon, todos os molhos especiais e a 
					famosa maionese Burger Mash, receita guardada a 7 chaves.<br><br>
					Venham conhecer a mais nova Hamburgueria de São Paulo.</p><br>
					<a class="fadeInUp wow btn-semfundo btn-amarelo" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">FALE CONOSCO</a>
				</div>
				<div class="col-md-6 offset-md-1">
					<img class="e-claro img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobredeta.jpg"; ?>"/>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
