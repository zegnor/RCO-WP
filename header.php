<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package repairCafeOdense
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <div id="overlay">
    <div class="loading"></div>
    </div>
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.12&appId=229145211162376&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'repaircafeodense' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$repaircafeodense_description = get_bloginfo( 'description', 'display' );
			if ( $repaircafeodense_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $repaircafeodense_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

                <nav class="main-menu-nav main-menu-nav-mobile main-menu-nav-reader">
                    
                    <div class="menu-nav-container-reader menu-nav-container">
                    
                    <a href="#" class="nav-button-link">
                    <div class="nav-button-reader nav-button">
                        <h5>Home</h5>
                    </div>
                    </a>
                    
                    <a href="#about-locate" class="nav-button-link">
                    <div class="nav-button-reader nav-button">
                        <h5>About</h5>
                    </div>
                    </a>
                    
                    <a href="#instagram-section-page" class="nav-button-link">
                    <div class="nav-button-reader nav-button">
                        <h5>Latest</h5>
                    </div>
                    </a>
                    
                    <a href="#rules-locate" class="nav-button-link">
                    <div class="nav-button-reader nav-button">
                        <h5>Our rules</h5>
                    </div>
                    </a>
                    
                    <a href="#staff-locate" class="nav-button-link">
                    <div class="nav-button-reader nav-button">
                        <h5>Staff</h5>
                    </div>
                    </a>
                    
                    <a href="#event-locate" class="nav-button-link">
                    <div class="nav-button-reader nav-button">
                        <h5>Events</h5>
                    </div>
                    </a>
                    
                    <a href="#donation-locate" class="nav-button-link">
                    <div class="nav-button-reader nav-button">
                        <h5>Donation</h5>
                    </div>
                    </a>
                    
                    <a href="#contact-locate" class="nav-button-link">
                    <div class="nav-button-reader nav-button">
                        <h5>Contact</h5>
                    </div>
                    </a>
                    
                    </div>
                     
                    <div class="mobile-menu">
                        <a class="dropdown-link">Menu</a>
                        <ul class="mobile-dropdown">
                            <li><a href="#">Home</a></li>
                            <li><a href="#about-locate">About</a></li>
                            <li><a href="#instagram-section-page">Latest</a></li>
                            <li><a href="#rules-locate">Our rules</a></li>
                            <li><a href="#staff-locate">Staff</a></li>
                            <li><a href="#event-locate">Events</a></li>
                            <li><a href="#donation-locate">Donation</a></li>
                            <li><a href="#contact-locate">Contact</a></li>
                        </ul>
                    </div>

                    
                </nav>
                
	</header><!-- #masthead -->

	<div id="content" class="site-content">
