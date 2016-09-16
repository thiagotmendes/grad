<?php /* template name: Trabalhe Conosco */ ?>

<?php get_header(); ?>

<main>
	<?php if (have_posts()): ?>
		<?php while (have_posts()): the_post() ?>
				<div class="container">
					<div class="row">
				    <div class="col-md-8">
							<div class="box-vaga">
								<h1><?php the_title() ?></h1>
					      <?php the_content(); ?>

								<h1>Depoimentos</h1>
								<?php
								$argumentoDepoimento = array(
									'post_type'       => 'depoimento',
									'posts_per_page'  => 2
								);
								$depoimento = new wp_query($argumentoDepoimento);
								if ($depoimento->have_posts()):
									while($depoimento->have_posts()): $depoimento->the_post();
								?>
										<div class="col-md-6 conteudo-depo">
											<div class="">
												<div class="row">
													<div class="col-md-3">
														<?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
													</div>
													<div class="col-md-6">
														<?php the_content() ?>
														<span class="nome-depo"><?php echo get_field('nome') ?></span>
														<div class="clearfix"></div>
														<span class="nome-curso"><?php echo get_field('profissão_curso') ?></span>
													</div>
												</div>
											</div>
										</div>
								<?php
									endwhile;
								endif;
								?>
								<div class="clearfix"></div>
							</div>
				    </div>
				    <div class="col-md-4">
				      <?php query_posts('page_id=567' );
				        if (have_posts()) : while (have_posts()) : the_post(); ?>
				          <h1><?php the_title() ?></h1>
				          <?php the_content(); ?>
				      <?php endwhile; endif; wp_reset_query(); ?>
				    </div>
				  </div>
				</div>
		<?php endwhile; ?>
	<?php endif; ?>
</main>

<?php get_footer('interno'); ?>
