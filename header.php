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
?>

<!-- Fixed Top Bar -->
<div class="topbar topbar--<?php echo esc_attr($topbar_color); ?>">
	<?php echo esc_html($topbar_text); ?>
</div>

<!-- Site Header -->
<header class="site-header">
    <div class="container">
	    <?php if (get_theme_mod('nichekit_show_title_tagline', true)) : ?>
            <h1><?php bloginfo('name'); ?></h1>
            <p class="tagline"><?php bloginfo('description'); ?></p>
	    <?php endif; ?>
        <nav class="main-nav">
		    <?php
		    wp_nav_menu(array(
			    'theme_location' => 'main_menu',
			    'container' => false,
			    'menu_class' => 'menu',
			    'fallback_cb' => false
		    ));
		    ?>
        </nav>
    </div>
</header>
