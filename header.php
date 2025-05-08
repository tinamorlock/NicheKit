<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
$topbar_text = get_theme_mod('nichekit_topbar_text', 'Welcome to NicheKit!');
$topbar_color = get_theme_mod('nichekit_topbar_color', 'green');
$show_title_tagline = get_theme_mod('nichekit_show_title_tagline', true);
?>

<!-- Fixed Top Bar -->
<div class="topbar topbar--<?php echo esc_attr($topbar_color); ?>">
	<?php echo esc_html($topbar_text); ?>
</div>

<header class="site-header">
    <div class="site-header__inner">

        <!-- Site Branding -->
		<?php if ($show_title_tagline) : ?>
            <div class="site-branding">
                <h1 class="site-title">
                    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                </h1>
                <p class="tagline"><?php bloginfo('description'); ?></p>
            </div>
		<?php endif; ?>

        <!-- Main Nav (for desktop) -->
        <nav class="main-nav" id="main-menu">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'main_menu',
				'container' => false,
				'menu_class' => 'menu',
				'fallback_cb' => false
			));
			?>
        </nav>

        <!-- Hamburger Button (mobile only) -->
        <button class="menu-toggle" id="menu-open" aria-label="Open menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>

    </div>
</header>

<!-- Fullscreen Drawer Menu -->
<div class="mobile-drawer" id="mobile-drawer">
    <button class="menu-close" id="menu-close" aria-label="Close menu">×</button>
    <nav class="mobile-nav">
		<?php
		wp_nav_menu(array(
			'theme_location' => 'main_menu',
			'container' => false,
			'menu_class' => 'mobile-menu',
			'fallback_cb' => false
		));
		?>
    </nav>
</div>
