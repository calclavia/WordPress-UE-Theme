<div class="bluewrap ue-header">
	<div class="container" style="text-align: center;">
        <div class="row">
			<h1>
                <span class="med-font" style="font-size: 72px;"><?php bloginfo("name") ?></span>
                <br />
                <?php bloginfo("description") ?>
            </h1>
            <a class="btn btn-default btn-lg" href="downloads"><i class="glyphicon glyphicon-download-alt"></i>&nbsp;&nbsp;Download</a>
            <div class="spacer"></div>
        </div>
    </div>
</div>

<?php while (have_posts()) : the_post(); ?>
    <?php remove_filter( 'the_content', 'wpautop' ); ?>
    <?php the_content(); ?>
    <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
