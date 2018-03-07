<?php
get_header(); ?>
<div id="content">
	<section id="paginas" class="sobre-desc">
		<div class="container">
			<div class="row wow fadeIn">
				<div class="col-md-12 text-center">
					<h1 class="alexc">Fale Conosco</h1>
				</div>
			</div>
			<div class="row wow fadeIn">
				<div class="col-md-6 text-left">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; // End of the loop. ?>
				</div>
				<div class="col-md-5 offset-md-1 text-left">
					<h3>Telefone</h3>
					<p>11 3477-2584</p><br>
					<h3>Endereço</h3>
					<p>Rua Emilia Marengo, 357-B<br>
					Anália Franco - São Paulo</p><br>
					<h3>Horário de funcionamento</h3>
					<p>Quarta e Quinta: 18h / 23h<br>
						Sexta: 12h / 23h<br>
						Sábado: 11h / 23h<br>
						Domingo: 11h ~ 22h<br>
						Segunda: Fechado
						Terça: Fechado</p>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
