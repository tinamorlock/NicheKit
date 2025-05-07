<?php get_header(); ?>

<main class="homepage">

	<!-- Hero -->
	<section class="hero">
		<img src="<?php echo get_template_directory_uri(); ?>/images/profile.jpg" alt="Profile Photo">
		<h1>I’m Taylor. I Make Things.</h1>
		<div class="cta-buttons">
			<a href="#subscribe" class="btn">Follow Me</a>
			<a href="#contact" class="btn">Subscribe</a>
			<a href="#contact" class="btn">Contact</a>
		</div>
	</section>

	<!-- Channel Grid -->
	<section class="channel-grid">
		<?php if (get_theme_mod('nichekit_show_instagram', true)) : ?>
            <div class="channel instagram">
                <h2>Instagram</h2>
                <img src="https://via.placeholder.com/300x200" alt="Instagram Preview">
                <p>Latest caption from Instagram</p>
                <a href="#">View on Instagram →</a>
            </div>
		<?php endif; ?>

		<?php if (get_theme_mod('nichekit_show_pinterest', true)) : ?>
            <div class="channel pinterest">
                <h2>Pinterest</h2>
                <img src="https://via.placeholder.com/300x200" alt="Pin Preview">
                <p>Latest pin description</p>
                <a href="#">View on Pinterest →</a>
            </div>
		<?php endif; ?>
		<?php if (get_theme_mod('nichekit_show_substack', true)) : ?>
            <div class="channel substack">
                <h2>Substack</h2>
                <p>“The creator economy is more than just...”</p>
                <a href="#">Read the newsletter →</a>
            </div>
		<?php endif; ?>
		<?php if (get_theme_mod('nichekit_show_tiktok', true)) : ?>
            <div class="channel tiktok">
                <h2>TikTok</h2>
                <!-- You can embed TikTok with an iframe or script -->
                <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@username/video/123456789">
                    <a href="https://www.tiktok.com/@username/video/123456789">Watch on TikTok</a>
                </blockquote>
            </div>
		<?php endif; ?>
		<?php if (get_theme_mod('nichekit_show_facebook', true)) : ?>
            <div class="channel facebook">
                <h2>Facebook</h2>
                <img src="https://via.placeholder.com/300x200" alt="FB Post">
                <p>Latest update from your page</p>
                <a href="#">View on Facebook →</a>
            </div>
		<?php endif; ?>
		<?php if (get_theme_mod('nichekit_show_x', true)) : ?>
            <div class="channel x">
                <h2>Latest from X</h2>
                <blockquote class="twitter-tweet">
                    <p lang="en" dir="ltr">Just posted something awesome! 🔥</p>
                    &mdash; You (@you) <a href="#">Date</a>
                </blockquote>
            </div>
		<?php endif; ?>
	</section>

</main>

<?php get_footer(); ?>
