<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to themeisle_theme_comment() which is
 * located in the inc/template-tags.php file.
 *
 * @package foliogine-lite
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

	<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
        <div class="title"><span>|| <?php _e('Comments','foliogine-lite'); ?></span></div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<!--<nav id="comment-nav-above" class="navigation-comment" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'foliogine-lite' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'foliogine-lite' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'foliogine-lite' ) ); ?></div>
		</nav> -->
		<?php endif; // check for comment navigation ?>

		<ul class="comment-list">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use themeisle_theme_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define themeisle_theme_comment() and that will be used instead.
				 * See themeisle_theme_comment() in inc/template-tags.php for more.
				 */
				wp_list_comments('callback=foliogine_lite_comment');

			?>
		</ul><!-- .comment-list -->
		<div class="navigation">
			<?php
				paginate_comments_links( array('prev_text' => 'prev', 'next_text' => 'next'));
			?>
		</div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<!--<nav id="comment-nav-below" class="navigation-comment" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'foliogine-lite' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'foliogine-lite' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'foliogine-lite' ) ); ?></div>
		</nav> -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'foliogine-lite' ); ?></p>
	<?php endif; ?>

	<?php
	$foliogine_lite_comments_args = array(
            // change the title of send button
            'label_submit'=>'Submit',
            'comment_notes_before' => '',
            // remove "Text or HTML to be displayed after the set of comment fields"
            'comment_notes_after' => '',
            // redefine your own textarea (the comment body)
            'comment_field' => '<textarea id="comment" name="comment"></textarea>',

            'fields' => array(
            'author' => '<div class="fields"><p>' . '<label for="author"><span>' . __( 'Name*', 'foliogine-lite' ) . '</span><input class="field" id="author" name="author" type="text" value="" /> ' . '</p>'. '</label> ',
            'email' => '<p>'.'<label for="email"><span>' . __( 'Email*', 'foliogine-lite' ) . '</span><input class="field" id="email" name="email" type="text" value="" />' . '</p>'.'</label> ',
            'url' => '<p>'.'<label for="url"><span>' . __( 'URL', 'foliogine-lite' ) . '</span><input class="field" id="url" name="url" type="text" value="" />'. '</p>'. '</label>'. '</div>',
        ),
    );

	comment_form($foliogine_lite_comments_args);
	?>

</div><!-- #comments -->
