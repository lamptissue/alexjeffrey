<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alexjeffrey
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Alex is an industry-qualified conservation-led clockmaker who started working for a noted clockmaking company during term breaks whilst studying towards his undergrad in Engineering.">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-barba="wrapper">

<?php wp_body_open(); ?>
<div class="overlay"></div>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'alexjeffrey' ); ?></a>

    <header id="masthead" class="site-header ph4 " >
        <div class="site-branding">
		<h1 class="title f3 lh-title">
    <a href="/">
        <?php bloginfo('name'); ?>
    </a>
</h1>
     </div><!-- .site-branding -->
     <div class="menu-wrapper">
        <div class="burger-container">
     <div class="burger-menu ">
        <span class="burger-menu-line <?php echo ( is_front_page() ) ? ' home-burger' : ''; ?>"></span>
        <span class="burger-menu-line <?php echo ( is_front_page() ) ? ' home-burger' : ''; ?>"></span>
        <span class="burger-menu-line <?php echo ( is_front_page() ) ? ' home-burger' : ''; ?>"></span>
</div>
</div>
<div class="menu-right">
<nav id="mobile-menu" class="mobile-menu" aria-label="Mobile Menu">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'menu_class'     => 'mobile-menu',
        )
    );
    ?>
</nav>
    </div>
    </div>
    <nav id="site-navigation" class="main-navigation <?php echo is_front_page() ? 'navbar-home' : ''; ?>">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
        )
    );
    ?>
</nav><!-- #site-navigation -->
    </header><!-- #masthead -->
