<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area centered-content my-8">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf(
					_nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'tailpress' ),
					number_format_i18n( get_comments_number() ),
					get_the_title()
				);
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'style'       => 'ol',
						'short_ping'  => true,
						'avatar_size' => 56,
					)
				);
			?>
		</ol>

	<?php endif; ?>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

		<nav class="comment-navigation" id="comment-nav-above">

			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'tailpress' ); ?></h1>

			<?php if ( get_previous_comments_link() ) { ?>
					<div class="nav-previous">
						<?php previous_comments_link( __( '&larr; Older Comments', 'tailpress' ) ); ?>
					</div>
			<?php } ?>

			<?php if ( get_next_comments_link() ) { ?>
				<div class="nav-next">
					<?php next_comments_link( __( 'Newer Comments &rarr;', 'tailpress' ) ); ?>
				</div>
			<?php } ?>

		</nav>

	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'tailpress' ); ?></p>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'class_submit'  => 'bg-primary text-white cursor-pointer rounded font-bold py-2 px-4 my-2 hover:bg-purple-dark focus:outline-none focus:shadow-outline',
			'comment_field' => '<label for="comment" class="font-semibold text-sm text-gray-600 dark:text-gray-400 pb-1 block">' . __('Comment') . '</label><br\><textarea id="comment" name="comment" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block p-2.5 w-full" aria-required="true"></textarea>',
            'fields' => array(
                'author' => '<label for="author" class="font-semibold text-sm text-gray-600 dark:text-gray-400 pb-1 block">' . __('Name') . '</label><br\><input id="author" name="author" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"/>',
                'email' => '<label for="email" class="font-semibold text-sm text-gray-600 dark:text-gray-400 pb-1 block">' . __('E-Mail') . '</label><br\><input id="email" name="email" type="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"/>',
                'url' => '<label for="url" class="font-semibold text-sm text-gray-600 dark:text-gray-400 pb-1 block">' . __('Website') . '</label><br\><input id="url" name="url" type="url" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"/>',
                'cookies' => '<div class="flex items-start"> <input id="cookies" name="cookies" type="checkbox" class="form-checkbox bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-4 h-4 p-2.5 mt-2"/> <label for="cookies" class="px-2 mt-2">' . __('Save my name, email, and website in this browser for the next time I comment.') . '</label></div>',
            )
		)
	);
	?>

</div>
