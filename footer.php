
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="footer relative" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

    <div class="bg-gray-800 pt-2">
        <div class="flex pb-5 px-3 m-auto pt-5 border-t border-gray-700 text-gray-500 text-sm flex-col md:flex-row max-w-6xl">
            <div class="mt-2">&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?></div>
            <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                <?php do_action( 'tailpress_footer' ); ?>
                <?php
                wp_nav_menu(
                    array(
                        'container_id'    => 'footer-menu',
                        'li_class'        => 'w-6 mx-5',
                        'fallback_cb'     => false,
                    )
                );
                ?>
            </div>
        </div>
    </div>

</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
