<?php
/**
 * Custom functions
 */
function ue_customize_register($wp_customize)
{
    //All our sections, settings, and controls will be added here    
    $wp_customize->add_setting('primary_color' , array(
        'default'     => '#0892d0',
        'transport'   => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'label'        => __( 'Primary Color', 'mytheme' ),
        'section'    => 'colors',
        'settings'   => 'primary_color',
    )));
}

add_action('customize_register', 'ue_customize_register');

function ue_primary_color()
{
    ?>
         <style type="text/css">
             .bluewrap
             {
                background-color: <?php echo get_theme_mod('primary_color'); ?>;
             }
             .navbar-default
             {
                 background-color: <?php echo get_theme_mod('primary_color'); ?>;
             }
         </style>
    <?php
}

add_action('wp_head', 'ue_primary_color');

/**
 * Widget Areas
 */
function ue_widgets_init()
{
	register_sidebar( array(
		'name' => 'Front Page Heading',
		'id' => 'front_page_heading',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}

add_action('widgets_init', 'ue_widgets_init' );