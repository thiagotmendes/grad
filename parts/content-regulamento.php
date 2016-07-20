<?php
  $arg_cliente = array(
    'page_id' => 162,
  );
  $clientes_home = new wp_query($arg_cliente);
  if($clientes_home->have_posts()):
    while ($clientes_home->have_posts()): $clientes_home->the_post();
      the_content();
    endwhile;
  endif;
?>
