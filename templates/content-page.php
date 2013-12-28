<?php while (have_posts()) : the_post(); ?>
    <h1><?php wp_title(); ?></h1>
    <?php the_content(); ?>
    <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
