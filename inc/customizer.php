<?php
/**
 * repairCafeOdense Theme Customizer
 *
 * @package repairCafeOdense
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function repaircafeodense_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'repaircafeodense_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'repaircafeodense_customize_partial_blogdescription',
        ));
    }

    /* custom customization customizor */

    /* primary color settings */

    $wp_customize->add_setting('theme_bg_color', array(
        'default' => '#FF6633',
        'transport' => 'postMessage',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    //control for primary color
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'theme_bg_color', array(
        'label' => __('Primary color', 'repaircafeodense'),
        'section' => 'colors',
        'settings' => 'theme_bg_color'
            )
            )
    );
    
    
    /* Header and Footer */

    $wp_customize->add_setting('theme_head_foot_color', array(
        'default' => '#000',
        'transport' => 'postMessage',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    //control for primary color
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'theme_head_foot_color', array(
        'label' => __('Header and Footer color', 'repaircafeodense'),
        'section' => 'colors',
        'settings' => 'theme_head_foot_color'
            )
            )
    );
    
     /* second text color */

    $wp_customize->add_setting('theme_second_text_color', array(
        'default' => '#FFF',
        'transport' => 'postMessage',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    //control for primary color
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'theme_second_text_color', array(
        'label' => __('second menu and footer text color', 'repaircafeodense'),
        'section' => 'colors',
        'settings' => 'theme_second_text_color'
            )
            )
    );
}

add_action('customize_register', 'repaircafeodense_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function repaircafeodense_customize_partial_blogname() {
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function repaircafeodense_customize_partial_blogdescription() {
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function repaircafeodense_customize_preview_js() {
    wp_enqueue_script('repaircafeodense-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'repaircafeodense_customize_preview_js');



if (!function_exists('repaircafeodense_header_style')) :

    /**
     * Styles the header image and text displayed on the blog.
     *
     * @see repaircafeodense_custom_header_setup().
     */
    function repaircafeodense_header_style() {
        $header_text_color = get_header_textcolor();
        $header_bg_color = get_theme_mod('theme_bg_color');
        
        $header_head_foot_color = get_theme_mod('theme_head_foot_color');
        $header_second_text_color = get_theme_mod('theme_second_text_color');

        /*
         * If no custom options for text are set, let's bail.
         * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
         */
        if (HEADER_TEXTCOLOR != $header_text_color) {

            // If we get this far, we have custom styles. Let's do this.
            ?>
            <style type="text/css">
            <?php
// Has the text been hidden?
            if (!display_header_text()) :
                ?>
                    .site-title,
                    .site-description {
                        position: absolute;
                        clip: rect(1px, 1px, 1px, 1px);
                    }
                <?php
// If the user has set a custom color for the text use that.
            else :
                ?>
                    .map-link,
                    .nav-button-scrolled,
                    h1,
                    h2,
                    h3,
                    h4,
                    h6{
                        color: #<?php echo esc_attr($header_text_color); ?>;
                    }
            <?php endif; ?>
            </style>
            <?php
        }

        if ('#FF6633' != $header_bg_color) {
            ?>
            <style type="text/css">
                .map-link,
                .nav-button-scrolled,
                .wp-caption-text,
                h1,
                h2,
                h3,
                h4,
                h6{
                    color: <?php echo esc_attr($header_bg_color); ?>;
                }
                .nav-button,
                #global-button-click,
                .mobile-menu,
                .mobile-dropdown{ 
                    background-color: <?php echo esc_attr($header_bg_color); ?>;
                }
                #landing_page,
                .section-page,
                .main-menu-nav-scrolled {
                    border-bottom-color: <?php echo esc_attr($header_bg_color); ?>;
                }
                .staff-image,
                .donation-image,
                iframe,
                img,
                .site-footer {
                    border-color: <?php echo esc_attr($header_bg_color); ?>;
                }
            </style>
            <?php
        }
        
        if ('#000' != $header_head_foot_color) {
            ?>
            <style type="text/css">
                .site-footer,
                .main-menu-nav-scrolled{ 
                    background-color: <?php echo esc_attr($header_head_foot_color); ?>;
                }
            </style>
            <?php
        }
        
        if ('#FFF' != $header_second_text_color) {
            ?>
            <style type="text/css">
                .footer-text,
                .nav-button,
                .partner-link { 
                    color: <?php echo esc_attr($header_second_text_color); ?>;
                }
            </style>
            <?php
        }
        
    }


endif;


