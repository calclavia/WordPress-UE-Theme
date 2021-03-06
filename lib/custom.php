<?php
/**
 * Customizer functions
 */
function ue_customize_register($wp_customize)
{
    //All our sections, settings, and controls will be added here    
    $wp_customize->add_setting('primary_color' , array(
        'default'     => '#0892d0',
        'transport'   => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label'        => __( 'Primary Color', 'ue_theme' ),
        'section'    => 'colors',
        'settings'   => 'primary_color',
    )));
    
    $wp_customize->add_setting('secondary_color' , array(
        'default'     => '#004e70',
        'transport'   => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
        'label'        => __( 'Secondary Color', 'ue_theme' ),
        'section'    => 'colors',
        'settings'   => 'secondary_color',
    )));
    
    $wp_customize->add_setting('logo' , array(
        'default' => get_template_directory_uri() . '../img/logo.png',
        'transport'   => 'refresh',
    ));
    
    $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'logo_uploader',
           array(
               'label'          => __( 'Upload a logo', 'ue_theme' ),
               'section'        => 'title_tagline',
               'settings'       => 'logo',
           )
       )
   );
}

add_action('customize_register', 'ue_customize_register');

$args = array(
    'default-text-color'     => '#ffffff',
	'header-text'            => true,
	'default-image' => '',
    'uploads'       => true
);

add_theme_support('custom-header', $args);

function ue_primary_color()
{
    ?>
         <style type="text/css">
             a:hover, a:focus
             {
                 color: <?php echo get_theme_mod('secondary_color'); ?>; 
             }
             
             .bluewrap
             {
                background-color: <?php echo get_theme_mod('primary_color'); ?>;
             }
             .navbar-default
             {
                 background-color: <?php echo get_theme_mod('primary_color'); ?>;
             }
             
             .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus
             {
                 color: <?php echo get_theme_mod('secondary_color'); ?>;
                 background-color: <?php echo get_theme_mod('primary_color'); ?>;
             }
             
             .nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus
             {
                color: #fff;
                background-color: <?php echo get_theme_mod('primary_color'); ?>;
             }
             
             .navbar-default
             {
                 border-color: <?php echo get_theme_mod('secondary_color'); ?>;
             }
             
             .navbar-brand
             {
                 background-image: url(<?php echo get_theme_mod('logo'); ?>);
             }
             
            .ue-header
            {
                 <?php if (header_image()): ?>
                 background: url(<?php echo header_image(); ?>);
                 <?php endif; ?>
                 color: #<?php echo get_header_textcolor() ?>;
            }
			 
			.navbar-default .navbar-collapse, .navbar-default .navbar-form
			{
				border-color: <?php echo get_theme_mod('secondary_color'); ?>;
			}
			
			.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus
			{
				background-color: <?php echo get_theme_mod('secondary_color'); ?>;
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
		'before_title' => '',
		'after_title' => '',
	));
}

add_action('widgets_init', 'ue_widgets_init' );