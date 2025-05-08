<footer>
	<p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
</footer>

<script>
    const openBtn = document.getElementById('menu-open');
    const closeBtn = document.getElementById('menu-close');
    const drawer = document.getElementById('mobile-drawer');

    openBtn.addEventListener('click', () => {
        drawer.classList.add('open');
    });

    closeBtn.addEventListener('click', () => {
        drawer.classList.remove('open');
    });
</script>



<?php wp_footer(); ?>
</body>
</html>
