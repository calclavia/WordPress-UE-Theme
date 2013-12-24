<?php while (have_posts()) : the_post(); ?>
  <?php remove_filter( 'the_content', 'wpautop' ); ?>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
