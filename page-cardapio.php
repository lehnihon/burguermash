<?php
get_header(); ?>
<div id="content">
	<section id="paginas">
		<div class="container cardapio">
			<div class="row wow fadeIn">
				<div class="col-md-12 text-center">
					<h1 class="alexc">Cardápio</h1>
				</div>
			</div>
			<div class="row wow fadeIn menu-cardapio">
				<div class="col-md op-cardapio">
					<a class="active" href="<?php echo esc_url( home_url( '/categoria/mash-burguers' ) ); ?>">Mash Burgers</a>
				</div>
				<div class="col-md op-cardapio">
					<a href="<?php echo esc_url( home_url( '/categoria/sanduiches' ) ); ?>">Sanduíches</a>
				</div>
				<div class="col-md op-cardapio">
					<a href="<?php echo esc_url( home_url( '/categoria/molhos' ) ); ?>">Molhos</a>
				</div>
				<div class="col-md op-cardapio">
					<a href="<?php echo esc_url( home_url( '/categoria/porcoes' ) ); ?>">Porções</a>
				</div>
				<div class="col-md op-cardapio">
					<a href="<?php echo esc_url( home_url( '/categoria/toppings' ) ); ?>">Toppings</a>
				</div>
				<div class="col-md op-cardapio">
					<a href="<?php echo esc_url( home_url( '/categoria/milk-shake' ) ); ?>">Milk Shake</a>
				</div>
				<div class="col-md op-cardapio">
					<a href="<?php echo esc_url( home_url( '/categoria/sobremesas' ) ); ?>">Sobremesas</a>
				</div>
				<div class="col-md op-cardapio">
					<a href="<?php echo esc_url( home_url( '/categoria/bebidas' ) ); ?>">Bebidas</a>
				</div>
			</div>
			<div class="row wow fadeIn desc-cardapio">
				<div class="col-md-12">
					<?php
					$args = array('category_name' => 'mash-burguers');
					$query = new WP_Query( $args );
					?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<article class="text-left">
							<?php
							$preco = get_post_meta(get_the_ID(), 'preco', true);
							$video = get_post_meta(get_the_ID(), 'video', true);
							?>
							<h4><?php the_title(); ?><span class="preco"><?php echo "R$ ".esc_html($preco); ?></span></h4>
							<?php the_content(); ?>
							<footer>
								<?php if ( has_post_thumbnail() ) { ?>
								<div><a data-toggle="modal" data-target=".foto<?php echo get_the_ID(); ?>" href="#"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto.jpg"; ?>"/></a></div>
								<?php } ?>
								<?php if ( !empty($video) ) { ?>
								<div><a data-toggle="modal" data-target=".video<?php echo get_the_ID(); ?>" href="#"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/video.jpg"; ?>"/></a></div>
								<?php } ?>
							</footer>
							<div class="modal fade foto<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog" >
					          <div class="modal-dialog" role="document">
					            <div class="modal-content">
					              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					              <?php the_post_thumbnail('', array('class' => "img-fluid")); ?>
					            </div><!-- /.modal-content -->
					          </div><!-- /.modal-dialog -->
					        </div><!-- /.modal -->
					        <div class="modal fade video<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog" >
					          <div class="modal-dialog" role="document">
					            <div class="modal-content videoWrapper">
					              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					              <?php echo $video; ?>
					            </div><!-- /.modal-content -->
					          </div><!-- /.modal-dialog -->
					        </div><!-- /.modal -->
						</article>
					<?php endwhile; // End of the loop. ?>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>
