<?php
/**
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area my-8">

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

		</nav><!-- #comment-nav-above -->

	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'tailpress' ); ?></p>
	<?php endif; ?>

	<?php
	comment_form(
		array(
            'fields' => array(
                    'author' => '<input type="text" id="author" name="author" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Name" required="">',
                    'email' => '<input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="E-Mail" required="">',
                    'url' => '<input type="text" id="url" name="url" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Website" required="">',
                    'cookie' => '<label class="inline-flex items-center mt-3"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" checked=""><span class="ml-2 text-gray-700">Meinen Namen, meine E-Mail-Adresse und meine Website in diesem Browser speichern, bis ich wieder kommentiere.</span></label>'
            ),
			'class_submit'  => 'bg-primary text-white cursor-pointer rounded font-bold py-2 px-4',
			'comment_field' => '<textarea id="comment" name="comment" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" aria-required="true"></textarea>',
		)
	);
	?>

</div>
