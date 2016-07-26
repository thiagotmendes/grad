<?php get_header() ?>
<section class="cursos">
  <div class="container">
    <div class="back-titulo">
      <h1><span class="titulo-section">  </span></h1>
    </div>
    <?php
    $term_tilte = get_terms('categoria', array(
      'orderby'    => 'order',
      'order'      => 'ASC',
      'exclude' => '5,6,7'
    ));
    foreach ( $term_tilte as $curso ) {
    ?>
      <h3 class="titulo-pos"><?php echo $curso->name ?></h3>
      <?php
        $argCursos = array(
          'post_type'       => 'cursos',
          'posts_per_page'  => 8,
          'orderby' => 'menu_order',
          'order' => 'ASC',
          'tax_query' => array(
            array(
            'taxonomy' => 'categoria',
            'field' => 'id',
            'terms' => $curso->term_id,
             )
          )
        );
        $cusosHome = new wp_query($argCursos);
        if ($cusosHome->have_posts()):
          echo '<div class="row">';
            while($cusosHome->have_posts()): $cusosHome->the_post();
            $image = get_field('icones');
            ?>
            <div class="col-md-3">
              <div class="box-curso" onclick="location.href='<?php the_permalink() ?>'">
                <span class="nome-curso"> <?php the_title() ?> </span>
                <?php if( !empty($image) ): ?>
                  <span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="icon-curso" /></span>
                <?php endif; ?>
              </div>
            </div>
            <?php
            endwhile;
          echo '</div>';
        endif;
      ?>
    <?php
    }
    ?>
  </div>
</section>
<?php get_footer() ?>
