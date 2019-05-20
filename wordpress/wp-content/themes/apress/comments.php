<?php
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">
  <?php if ( have_comments() ) : ?>
  <h3 class="comments-title entry-title">
    <?php
	printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'apress' ),
	number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
	?>
  </h3>
  <ol class="comment-list">
    <?php
        wp_list_comments( array(
            'style'			=> 'ol',
            'short_ping'	=> true,
            'avatar_size'	=> 74,
			'callback'		=>'apress_theme_comment',
        ) );
        ?>
  </ol>
  <!-- .comment-list -->
  
	<?php
        // Are there comments to navigate through?
        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
    ?>
  <nav class="navigation comment-navigation">
    <h1 class="screen-reader-text section-heading">
      <?php _e( 'Comment navigation', 'apress' ); ?>
    </h1>
    <div class="nav-previous">
      <?php previous_comments_link( __( '&larr; Older Comments', 'apress' ) ); ?>
    </div>
    <div class="nav-next">
      <?php next_comments_link( __( 'Newer Comments &rarr;', 'apress' ) ); ?>
    </div>
  </nav>
  <!-- .comment-navigation -->
  <?php endif; // Check for comment navigation ?>
  <?php if ( ! comments_open() && get_comments_number() ) : ?>
  <p class="no-comments">
    <?php _e( 'Comments are closed.' , 'apress' ); ?>
  </p>
  <?php endif; ?>
  <?php endif; // have_comments() ?>
  <?php comment_form(); ?>
</div>
<!-- #comments -->