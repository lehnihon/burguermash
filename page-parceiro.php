<?php
get_header(); ?>
<div id="banner" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	</div>
</div>
<div id="content">
	<section id="descricao" class="contato">
		<div class="container">
			<div class="row wow fadeIn">
				<div class="col-md-12 text-center">
					<h1>Seja um parceiro</h1>
					<p>Preencha o formulário abaixo para entrar em contato</p>
				</div>
			</div>
			<?php echo do_shortcode('[contact-form-7 id="27" title="Seja Parceiro"]'); ?>
			<br><br>
			<div class="row wow fadeIn">
				<div class="col-md-10 col-md-offset-1 text-center">
					<h2>Localização</h2>
					<p>Rua Nova Hamburgo, 99 - Ipiranga, São Paulo - SP</p>
				</div>
			</div>
		</div>
	</section>
	<section id="maps">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 videoWrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.093884136065!2d-46.594725884528366!3d-23.60096568466323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5c78107d8987%3A0xe8ea5d438a5cfb83!2sR.+Nova+Hamburgo%2C+99+-+Ipiranga%2C+S%C3%A3o+Paulo+-+SP%2C+04217-040!5e0!3m2!1spt-BR!2sbr!4v1505408918413" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>			
		</div>
	</section>
</div>

<?php get_footer(); ?>
