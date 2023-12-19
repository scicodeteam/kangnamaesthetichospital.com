<?php include(locate_template("Module/Post/post_new_other_2_0_0/css/post_new_other_2_0_0_css.php")) ?>

<?php
	$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID), 'orderby' => 'rand' ) );

	if( $related )foreach( $related as $key => $post ) {
		setup_postdata($post); 
		$new_other .= '<div class="col-md-6"><ul><li>
							<div class="newsOther_2_0_0__pic">
								<a href="'.get_permalink().'"><img width="82" height="82"  src="'.get_the_post_thumbnail_url(get_the_ID(),'thumbnail').'" alt="'.get_the_title().'"></a>
							</div>
							<div class="newsOther_2_0_0__body">
								<div class="newsOther_2_0_0__title"><a href="'.get_permalink().'"><h3>'.get_the_title().'</h3></a></div>
							</div>
							</li></ul></div>';	
	}
	wp_reset_postdata(); 
?>

<div class="newsOther_2_0_0">
	<p><i class="icon-doc-text"></i>TIN LIÊN QUAN</p>
	<div class="row">
		<?php echo $new_other; ?>
	</div>
</div>

