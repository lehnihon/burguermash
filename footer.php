	<footer id="footer">
		<div class="container">
			<div class="row wow fadeInUp">
				<div class="col-md-12">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-bot.jpg"; ?>"/>
				</div>
			</div><br><br>
			<div class="row wow fadeInUp">
				<div class="col-md-12">
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCd6S74uJMT5HoTycl0Gj31g"></a></li>
						<li class="instagram"><a target="_blank" href="https://www.instagram.com/burgermashoficial/"></a></li>
						<li class="twitter"><a target="_blank" href="https://www.facebook.com/burgermash"></a></li>
						<li class="facebook"><a target="_blank" href="https://www.tripadvisor.com.br/Restaurant_Review-g303631-d13499226-Reviews-Burger_Mash-Sao_Paulo_State_of_Sao_Paulo.html"></a></li>
					</ul>
				</div>
			</div><br><br>
			<div class="row wow fadeInUp">
				<div class="col-md-4">
					<h3>Entre em <br>contato</h3>
					<p>
						Fale com a <strong>Burger Mash</strong>. <br> Será um prazer receber o seu contato.
					</p>
					<img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/cel.jpg"; ?>"/>
				</div>
				<div class="col-md-4 col-md-offset-1">
					<h3>Assine nossa <br>Newsletter</h3>
					<p>
						Fique por dentro das nossas<br> novidades, promoções e <br>lançamentos.
					</p>
					<?php echo do_shortcode('[contact-form-7 id="142" title="Newsletter"]'); ?>
				</div>
				<div class="col-md-4">
					<h3>Venha conhecer a Burguer Mash</h3>
					<p>
						Rua Emilia Marengo, 357-B<br>
						Anália Franco - São Paulo
					</p>
					<p>
						Quarta e Quinta: 18h / 23h<br>
						Sexta: 12h / 23h<br>
						Sábado: 11h / 23h<br>
						Domingo: 11h ~ 22h<br>
						Segunda: Fechado
						Terça: Fechado
					</p>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->
	<div class="copyrino">
		<div class="container">
			<div class="row wow fadeInUp">
				<div class="col-md-10">
					<ul class="menu">
						<li><a href="<?php echo esc_url( home_url( '' )); ?>">Página Inicial</a></li>
						<li><a href="<?php echo esc_url( home_url( 'sobre' )); ?>">A Burguer Mash</a></li>
						<li><a href="<?php echo esc_url( home_url( 'cardapio' )); ?>">Cardárpio</a></li>
						<!--<li><a href="<?php echo esc_url( home_url( 'contato' )); ?>">Trabalhe Conosco</a></li>
						<li><a href="<?php echo esc_url( home_url( 'seja-nosso-fornecedor' )); ?>">Fornecedor</a></li>
						<li><a href="<?php echo esc_url( home_url( 'contato' )); ?>">Parcerias</a></li>-->
						<li><a href="<?php echo esc_url( home_url( 'contato' )); ?>">Contato</a></li>
					</ul>
				</div>
				<div class="col-md-1 col-md-offset-1 text-right">
					<a target="_blank" href="http://seimidigital.com.br/">
						<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>" />
					</a>
				</div>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
