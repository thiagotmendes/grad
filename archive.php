<?php
/*
Template Name: Archives
*/
get_header(); ?>
	<main class="archive-main">
		<div class="container">
			<div class="row">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post() ?>
						<div class="col-md-3">
							<div class="box-curso" onclick="location.href='<?php the_permalink() ?>'">
								<?php if (has_post_thumbnail()): ?>
									<div class="img-noticia">
										<a href="'<?php the_permalink(); ?>'">  <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?></a>
									</div>
								<?php endif ?>
								<h4><?php the_title() ?></h4>
								<?php the_excerpt_limit(30) ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>

			<div class="">
				<?php wp_pagination() ?>
			</div>
		</div>
	</main>
<?php get_footer('interno'); ?>
