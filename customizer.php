<?php
function nichekit_customize_register($wp_customize) {
	// Add a new section for the top bar
	$wp_customize->add_section('nichekit_topbar_section', array(
		'title' => __('Top Bar Settings', 'nichekit'),
		'priority' => 30,
	));

	// Add setting for the top bar text
	$wp_customize->add_setting('nichekit_topbar_text', array(
		'default' => 'Welcome to NicheKit! Customize this text in the Customizer.',
		'sanitize_callback' => 'sanitize_text_field',
	));

	// Add control for the top bar text
	$wp_customize->add_control('nichekit_topbar_text', array(
		'label' => __('Top Bar Text', 'nichekit'),
		'section' => 'nichekit_topbar_section',
		'type' => 'text',
	));

	// Top bar color choice (limited to theme palette)
	$wp_customize->add_setting('nichekit_topbar_color', array(
		'default' => 'green',
		'sanitize_callback' => function($input) {
			$valid = array('green', 'pink', 'blue', 'yellow');
			return in_array($input, $valid) ? $input : 'green';
		}
	));

	$wp_customize->add_control('nichekit_topbar_color', array(
		'label' => __('Top Bar Theme Color', 'nichekit'),
		'section' => 'nichekit_topbar_section',
		'type' => 'select',
		'choices' => array(
			'green' => __('Neon Green', 'nichekit'),
			'pink'  => __('Hot Pink', 'nichekit'),
			'blue'  => __('Sky Blue', 'nichekit'),
			'yellow'=> __('Neon Yellow', 'nichekit'),
		),
	));

	// === SOCIAL SETTINGS SECTION === //
	$wp_customize->add_section('nichekit_social_settings', array(
		'title'    => __('Social Settings', 'nichekit'),
		'priority' => 35,
	));

// Define toggles for each social card
	$social_platforms = array(
		'instagram' => 'Instagram',
		'pinterest' => 'Pinterest',
		'substack'  => 'Substack',
		'tiktok'    => 'TikTok',
		'facebook'  => 'Facebook Page',
		'reels'     => 'Facebook Reels',
		'x'         => 'X / Twitter',
	);

	foreach ($social_platforms as $key => $label) {
		$setting_id = 'nichekit_show_' . $key;

		$wp_customize->add_setting($setting_id, array(
			'default'           => true,
			'sanitize_callback' => 'wp_validate_boolean',
		));

		$wp_customize->add_control($setting_id, array(
			'label'    => __('Show ' . $label, 'nichekit'),
			'section'  => 'nichekit_social_settings',
			'type'     => 'checkbox',
		));

		// === Toggle Site Title/Tagline on Front Page ===
		$wp_customize->add_setting('nichekit_show_title_tagline', array(
			'default'           => true,
			'sanitize_callback' => 'wp_validate_boolean',
		));

		$wp_customize->add_control('nichekit_show_title_tagline', array(
			'label'    => __('Show Site Title & Tagline on Front Page', 'nichekit'),
			'section'  => 'title_tagline', // Keep it grouped with existing title/tagline settings
			'type'     => 'checkbox',
		));
	}

}


add_action('customize_register', 'nichekit_customize_register');
